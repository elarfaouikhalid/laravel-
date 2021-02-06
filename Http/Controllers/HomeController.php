<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function home()
    {
        return view('posts.home');
    }

    // public function dashboard()
    // {
    //     dd(Auth::user());
    //     return view('dashboard');
    // }
}
