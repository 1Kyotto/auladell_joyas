<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnillosController
{
    function index() 
    {
        return view('anillos.index');
    }
}
