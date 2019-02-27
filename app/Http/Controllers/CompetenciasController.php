<?php

namespace App\Http\Controllers;

use App\Competencia;
use App\Competidor;
use App\Premio;
use App\Sorteo;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CompetenciasController extends Controller
{
    public function index(){
        $competencias = Competencia::all();

        return view("panel.competencias.index", compact("competencias"));
    }

    public function create(){
        $competidores = Competidor::pluck("competidor", "id");
        return view("panel.competencias.create", compact("competidores"));
    }

    public function edit($id){
        $competencia = Competencia::find($id);
        $competidores = Competidor::pluck("competidor", "id");

        if($competencia)
            return view("panel.competencias.edit", compact("competencia", "competidores"));
        else
            return redirect()->route('competencias.index')->withErrors("La competencia #$id no existe.");

    }

    public function store(Request $request){
        $validatedData = $request->validate([
            'local' => 'required',
            'visitante' => 'required',
            'competencia' => 'required',
        ]);

        $competencia = Competencia::create($validatedData);

        if($competencia)
            return redirect()->route('competencias.index')->with("success", "La competencia $competencia->competencia ha sido creado correctamente.");

        //No devuelvo asi la vista porque no se envia lo que va en wl with.
        //return view("panel.sorteos.create")->with("success", "El sorteo ha sido creado correctamente.");
    }

    public function update($id, Request $request){
        $validatedData = $request->validate([
            'local' => 'required',
            'visitante' => 'required',
            'competencia' => 'required',
        ]);

        $competencia = Competencia::find($id);

        if($competencia->update($validatedData)){
            return redirect()->route('competencias.index')->with("success", "La competencia $competencia->competencia se ha editada correctamente.");
        }
    }

    public function destroy($id){
        $competencia = Competencia::find($id);
        if($competencia):
            if($competencia->destroy($id)):
                return redirect()->back()->with("success","Se eliminó correctamente la competencia $competencia->competencia");
            else:
                return redirect()->back()->withErrors("No se pudo eliminar la competencia $competencia->competencia");
            endif;
        else:
            return redirect()->back()->withErrors("No se encontró el jugador $competencia->competencia");
        endif;
    }
}
