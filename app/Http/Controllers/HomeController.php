<?php

namespace App\Http\Controllers;

use Auth;
use Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function changeLang()
    {
        $lang = Request::input('lang');
        Auth::user()->lang=$lang;
        Auth::user()->save();
    }
}
