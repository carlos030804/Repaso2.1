<?php

namespace App\Http\Controllers;


use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\validadorLibro;

class controladorVistas extends Controller
{
    //

    public function welcome(){
        return view('welcome');
    }

    
    public function form(){
        return view('form');
    }

    public function procesarLibro(validadorLibro $peticion): RedirectResponse{
        $Titulo= $peticion ->input('txtTitulo');
        session()->flash('exito','Todo correcto: Libro "'.$Titulo. '"guardado');
        return to_route('rutaform');
    }
}
