<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function welcome()
    {
        $titulo = "Bienvenidos a mi web";

        return view('welcome')->with('titulo', $titulo);
    }
    public function pagina1()
    {
        $titulo = "Practicando CSS";

        $animales = ['perro', 'gato', 'pez', 'elefante', 'tigre'];

        $edad = 33;

        return view('pcss')->with('titulo', $titulo)
                           ->with('animales', $animales)
                           ->with('edad', $edad);
    }
    public function pagina2()
    {
        $titulo = "Practicando IMG";

        return view('pimg')->with('titulo', $titulo);
    }
}

