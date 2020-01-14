<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Speaker;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function index()
    {
        return view('index');
    }

    public function speakers()
    {
        $speakers = Speaker::all();

        // dd($speakers);

        return view('speakers', ['speakers' => $speakers]);
    }

    public function venue()
    {
        return view('venue');
    }

    public function schedule()
    {
        return view('schedule');
    }
}
