<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function index()
    {
        return view('catalog');
    }

    public function about()
    {
        return view('about');
    }

    public function simulation()
    {
        return view('simulation.min-heap');
    }
}
