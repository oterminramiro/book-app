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
			$value[] = $request->input('guid');
			$cookie = cookie()->forever('shoppingcart', json_encode($value));
		}
		else
		{
			$cookie_decoded = json_decode($cookie, true);

			# No guardar duplicados
			if(!in_array($request->input('guid'),$cookie_decoded))
			{
				$cookie_decoded[] = $request->input('guid');
				$cookie = cookie()->forever('shoppingcart', json_encode($cookie_decoded));
			}
			else
			{
				# Volver a setear la Cookie para que no se peirda
				$cookie = cookie()->forever('shoppingcart', $cookie);
			}

		}



		$response = response("Voy a enviarte una cookie");
		$response->withCookie($cookie);
		#$response->withCookie(Cookie::forget('shoppingcart'));
		return $response;
	}
}
