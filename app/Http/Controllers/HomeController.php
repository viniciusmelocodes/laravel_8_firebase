<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function users()
    {
        return view('userdetails');
    }
}
