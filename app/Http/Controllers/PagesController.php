<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
    	return view('home');
    }

    public function home()
    {
        return view('home');
    }

    public function about()
    {
    	return view('about');
    }

    public function contact()
    {
    	return view('tickets.create');
    }
}
