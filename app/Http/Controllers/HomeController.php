<?php

namespace App\Http\Controllers;

use App\Competencia;
use App\Sorteo;

class HomeController extends Controller
{
    public function index()
    {
       $sorteos = Sorteo::whereNotNull("premio_id")->get();

       $competencias = Competencia::whereNotNull("local")->whereNotNull("visitante")->get();

        return view('welcome', compact("sorteos", "competencias"));
    }
}
