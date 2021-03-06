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

    /**
     * Outputs the list of speakers.
     * 
     * @return mixed
     */
    public function speakers()
    {
        $speakers = Speaker::all();

        return view('speakers', ['speakers' => $speakers]);
    }

    /**
     * Outputs the venue information.
     * 
     * @return mixed
     */
    public function venue()
    {
        return view('venue');
    }

    /**
     * Outputes the schedule of the event.
     * 
     * @return mixed
     */
    public function schedule()
    {
        return view('schedule');
    }
}
