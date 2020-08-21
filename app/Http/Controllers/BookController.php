<?php

namespace App\Http\Controllers;
use Cookie;
use App\Models\Book;
use App\Models\Booktype;
use App\Models\Editorial;
use Illuminate\Http\Request;

use LynX39\LaraPdfMerger\Facades\PdfMerger;
use App\Mail\PdfEmail;
use Illuminate\Support\Facades\Mail;

class BookController extends Controller
{

	public function __construct()
	{
		$this->middleware('auth');
	}

	public function index()
	{
		#var_dump(auth()->user()->id_user);

		$books = Book::get();
		$bookType = BookType::get();
		$editorial = Editorial::get();

		return view('main/books', compact('books','bookType','editorial'));
	}

	public function filter_book(Request $request)
	{
		$query = Book::query();

		if($request->input('book_type') != NULL)
		{
			$bookType = BookType::whereIn('guid',$request->input('book_type'))->get()->modelKeys();
			if(count($bookType) != 0)
			{
				$query = $query->whereIn('id_book_type',$bookType);
			}
		}
		if($request->input('editorial') != NULL)
		{
			$editorial = Editorial::whereIn('guid',$request->input('editorial'))->get()->modelKeys();
			if(count($editorial) != 0)
			{
				$query = $query->whereIn('id_editorial',$editorial);
			}
		}
		if($request->input('word') != NULL)
		{
			$query = $query->where('name','like','%'.$request->input('word').'%');
		}

		$books = $query->get();

		return view('main/partials/books', compact('books'));
	}

	public function addtocart(Request $request)
	{
		$session = session('cart');

		$request->session()->put('key', 'value');
		if($session == null)
		{
			$book = Book::where('guid',$request->input('guid'))->first();
			$value[$request->input('guid')] = [
				'name' => $book->name,
				'image' => $book->image,
			];
			$request->session()->put('cart', json_encode($value));
		}
		else
		{
			$session_decoded = json_decode($session, true);
			if(count($session_decoded) == 10)
			{
				# Ver como devolver que ya estan los 10 items agregados
			}
			else
			{
				# No guardar duplicados
				if(!array_key_exists($request->input('guid'),$session_decoded))
				{
					$book = Book::where('guid',$request->input('guid'))->first();
					$session_decoded[$request->input('guid')] = [
						'name' => $book->name,
						'image' => $book->image,
					];
					$request->session()->put('cart', json_encode($session_decoded));
				}
				else
				{
					# Volver a setear la Cookie para que no se peirda
					$request->session()->put('cart', $session);
				}
			}
		}


		$html = view('main.partials.cart')->render();
		$response = response($html);
		return $response;
	}

	public function removecart(Request $request)
	{
		$session = session('cart');
		$session_decoded = json_decode($session, true);
		if(array_key_exists($request->input('guid'),$session_decoded))
		{
			unset($session_decoded[$request->input('guid')]);
			$request->session()->put('cart', json_encode($session_decoded));
		}

		$html = view('main.partials.cart')->render();
		$response = response($html);
		return $response;
	}

	public function shoppingcart(Request $request)
	{
		$session = session('cart');
		$session_decoded = json_decode($session, true);
		if(count($session_decoded) == 10)
		{
			$response = array();
			foreach($session_decoded as $key => $item)
			{
				$Book = Book::where('guid',$key)->first();
				$response[] = [
					'name' => $Book->name,
					'img' => $Book->image,
					'description' => $Book->description,
					'editorial' => $Book->Editorial->name,
					'booktype' => $Book->BookType->name,
				];
			}
			# View con toda la info
		}
		return view('main/fullcart', compact('response'));
	}

	public function mercadopago_checkout(Request $request)
	{
		require base_path('/vendor/autoload.php');
		#die('hola');
		MercadoPago\SDK::setAccessToken('PROD_ACCESS_TOKEN');

		$preference = new MercadoPago\Preference();

		// Crea un ítem en la preferencia
		$item = new MercadoPago\Item();
		$item->title = 'Mi producto';
		$item->quantity = 1;
		$item->unit_price = 75.56;
		$preference->items = array($item);
		$preference->save();

		return view('main/mp_checkout', compact('preference'));
	}

	public function create_order(Request $request)
	{
		$session = session('cart');
		$session_decoded = json_decode($session, true);
		if($session != NULL)
		{

			$Order = new Order;
			$Order->id_user = auth()->user()->id_user;
			$Order->filepath_print = NULL;
			$Order->filepath_download = NULL;
			$Order->guid = Str::uuid()->toString();
			$Order->created = date("Y-m-d H:i:s", time());
			$Order->updated = date("Y-m-d H:i:s", time());
			$Order->save();

			foreach($session_decoded as $guid => $book_item)
			{
				$Book = Book::where('guid',$guid)->first();

				$OrderBook = new OrderBook;
				$OrderBook->id_order = $Order->id_order;
				$OrderBook->id_book = $Book->id_book;
				$OrderBook->save();
			}
		}
	}

	public function create_pdf(Request $request)
	{
		$guid = $request->input('guid');
		$Order = Order::where('guid' , $guid)->first();

		$PdfPrint = PDFMerger::init();
		$PdfDownload = PDFMerger::init();

		foreach ($Order->OrderBook as $order_book)
		{
			$Book = Book::where('id_book',$order_book->id_book)->first();

			$PdfPrint->addPDF(public_path('/pdf/'.$Book->filename_print), 'all');
			$PdfDownload->addPDF(public_path('/pdf/'.$Book->filename_download), 'all');
		}

		$PdfPrint->merge();
		$PdfDownload->merge();

		$file_save_print = $PdfPrint->save(public_path('/pdf/'.auth()->user()->guid.'/'.$Order->id_order.'print.pdf'), "file");
		$file_save_download = $PdfDownload->save(public_path('/pdf/'.auth()->user()->guid.'/'.$Order->id_order.'download.pdf'), "file");

		$Order->filepath_print = $file_save_print;
		$Order->filepath_download = $file_save_download;
		$Order->save();

		#Send email with download pdf
	}

	public function test(Request $request)
	{


	    $data = ['message' => 'This is a test!'];

	    Mail::to('oterminramiro@gmail.com')->send(new PdfEmail($data));

		die();


		$PdfPrint = PDFMerger::init();

		$PdfPrint->addPDF(public_path('/pdf/books/divina.pdf'), 'all');
		$PdfPrint->addPDF(public_path('/pdf/books/recetas.pdf'), 'all');

		$PdfPrint->merge();

		$file_save_print = $PdfPrint->save(public_path('/pdf/books/print.pdf'), "file");
	}
}
