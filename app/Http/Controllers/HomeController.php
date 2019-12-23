<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Speaker;

class HomeController extends Controller
{
	public function index()
	{
		return view('index');
	}

	public function speakers()
	{
		$speakers = Speaker::all();

		return view('speakers', ['speakers' => $speakers]);
	}
}
