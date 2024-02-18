<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Iluminate\Support\Fascades\Auth;
class HomeController extends Controller
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
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //return view('home');
        $role = auth()->user()->role;
        if ($role == '1') {
            return view('admin');
        } 
        if ($role == '2') {
            return view('manager');
        } 
        else
         {
            return view('Dashboard');
        } 
        
        
    }
}
