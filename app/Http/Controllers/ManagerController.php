<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Visitor;
use App\Manager;

class ManagerController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
	}

	public function home()
	{
		$admin = Auth::user();
		$visitors = Visitor::all();

		return view('admin', [
			'admin' => $admin,
			'visitors' => $visitors,
		]);
	}

	public function list()
	{
		$admin = Auth::user();
		$managers = Manager::all();

		return view('managers', [
			'managers' => $managers,
			'admin' => $admin,
		]);
	}
}
