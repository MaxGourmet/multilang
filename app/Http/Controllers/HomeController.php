<?php

namespace Multilang\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Multilang\Http\Requests;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function welcome()
    {
        return view('welcome', ['check' => Auth::check()]);
    }
}
