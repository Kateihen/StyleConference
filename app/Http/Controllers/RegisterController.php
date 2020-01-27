<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Visitor;
use App\Events\VisitorRegistered;

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

        event(new VisitorRegistered($visitor));

        return response()
            ->view('confirm', ['visitor' => $visitor])
            ->setStatusCode(201);

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
