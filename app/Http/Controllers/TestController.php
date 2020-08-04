<?php

namespace App\Http\Controllers;

use App\UserRole;
use Illuminate\Http\Request;

class TestController extends Controller
{
	public function index()
	{
		$role = UserRole::get();
		die(var_dump($role));
	}
}
