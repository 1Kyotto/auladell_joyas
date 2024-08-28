<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarritosController
{
    function index() 
    {
        return view('carrito.index');
    }
}
