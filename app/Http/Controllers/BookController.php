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

		$cookie = Cookie::get('shoppingcart');
		if($cookie == null)
		{
			$book = Book::where('guid',$request->input('guid'))->first();
			$value[$request->input('guid')] = [
				'name' => $book->name,
				'image' => $book->image,
			];
			$cookie = cookie()->forever('shoppingcart', json_encode($value));
		}
		else
		{
			$cookie_decoded = json_decode($cookie, true);
			if(count($cookie_decoded) == 10)
			{
				# Ver como devolver que ya estan los 10 items agregados
			}
			else
			{
				# No guardar duplicados
				if(!array_key_exists($request->input('guid'),$cookie_decoded))
				{
					$book = Book::where('guid',$request->input('guid'))->first();
					$cookie_decoded[$request->input('guid')] = [
						'name' => $book->name,
						'image' => $book->image,
					];
					$cookie = cookie()->forever('shoppingcart', json_encode($cookie_decoded));
				}
				else
				{
					# Volver a setear la Cookie para que no se peirda
					$cookie = cookie()->forever('shoppingcart', $cookie);
				}
			}
		}


		$html = view('main.cart')->render();
		$response = response($html);
		$response->withCookie($cookie);
		#$response->withCookie(Cookie::forget('shoppingcart'));
		return $response;
	}

	public function removecart(Request $request)
	{
		
	}

	public function shoppingcart(Request $request)
	{
		$cookie = Cookie::get('shoppingcart');
		$cookie_decoded = json_decode($cookie, true);
		if(count($cookie_decoded) == 10)
		{

			# View con toda la info
		}
		return view('main/fullcart', compact('cookie_decoded'));
	}
}
