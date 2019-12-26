<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Visitor;

class RegisterController extends Controller
{
	public function home()
	{
		return view('register');
	}

	public function store()
	{
		$attributes = $this->validateRegistration();

		$visitor = Visitor::create($attributes);

		return view('confirm', ['visitor' => $visitor]);

	}

	public function validateRegistration()
	{
		return \request()->validate([
            'name' => ['required', 'min:3', 'max:255'],
            'email' => ['required', 'min:3', 'max:255'],
            'num_of_passes' => ['required'],
            'comments' => []
        ]);
	}
}
