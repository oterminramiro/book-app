<?php

namespace App\Http\Controllers;
use Cookie;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{

	public function __construct()
	{
		$this->middleware('auth');
	}

	public function index()
	{
		$books = Book::get();
		return view('main/books', compact('books'));
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


		$html = view('main.cart')->render();
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

		$html = view('main.cart')->render();
		$response = response($html);
		return $response;
	}

	public function shoppingcart(Request $request)
	{
		$session = session('cart');
		$session_decoded = json_decode($session, true);
		if(count($session_decoded) == 10)
		{

			# View con toda la info
		}
		return view('main/fullcart', compact('session_decoded'));
	}
}
