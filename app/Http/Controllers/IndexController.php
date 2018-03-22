<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
class IndexController extends Controller
{
	public function index () 
	{
		//$users = DB::table('user')->paginate(4);
		//var_dump($users);
		return view('home.index');
	}
}