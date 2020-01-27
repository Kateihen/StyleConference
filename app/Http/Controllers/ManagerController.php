<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Visitor;
use App\Manager;

/**
 * ManagerController_Class deals with admin panel.
 */
class ManagerController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Outputs the list of registered visitors.
     * 
     * @param  Illuminate\Support\Facades\Auth  $admin
     * @param  App\Visitor  $visitor
     * @return mixed
     */
    public function home()
    {
        $admin = Auth::user();
        $visitors = Visitor::all();

        return view('admin', [
            'admin' => $admin,
            'visitors' => $visitors,
        ]);
    }

    /**
     * Outputs the lists of registered managers.
     * 
     * @param  Illuminate\Support\Facades\Auth  $admin
     * @param   App\Manager  $manager
     * @return mixed
     */
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
