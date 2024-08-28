<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController
{
    function index() 
    {
        return view('home.index');
    }
}
