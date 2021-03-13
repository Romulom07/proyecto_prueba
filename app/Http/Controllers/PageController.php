<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function welcome()
    {
        return view('welcome');
    }
    public function pagina1()
    {
        return view('pcss');
    }
    public function pagina2()
    {
        return view('pimg');
    }
}

