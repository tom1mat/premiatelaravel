<?php

namespace App\Http\Controllers;

use App\Competencia;
use App\Competidor;
use App\Premio;
use App\Sorteo;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CompetidoresController extends Controller
{
    public function index(){
        $competidores = Competidor::all();

        return view("panel.competidores.index", compact("competidores"));
    }

    public function create(){
        return view("panel.competidores.create");
    }

    public function edit($id){
        $competidor = Competidor::find($id);

        if($competidor)
            return view("panel.competidores.edit", compact("competidor"));
        else
            return redirect()->route('competidores.index')->withErrors("El competidor #$id no existe.");

    }

    public function store(Request $request){
        $validatedData = $request->validate([
            'competidor' => 'required',
        ]);

        $competidor = Competidor::create($validatedData);

        if($competidor)
            return redirect()->route('competidores.index')->with("success", "El competidor $competidor->competidor ha sido creado correctamente.");
    }

    public function update($id, Request $request){
        $validatedData = $request->validate([
            'competidor' => 'required',
        ]);

        $competidor = Competidor::find($id);

        if($competidor->update($validatedData)){
            return redirect()->route('competidores.index')->with("success", "El competidor $competidor->competidor se ha editado correctamente.");
        }
    }

    public function destroy($id){
        $competidor = Competidor::find($id);
        if($competidor):
            if($competidor->destroy($id)):
                return redirect()->back()->with("success","Se eliminó correctamente el competidor $competidor->competidor");
            else:
                return redirect()->back()->withErrors("No se pudo eliminar el competidor $competidor->competidor");
            endif;
        else:
            return redirect()->back()->withErrors("No se encontró el competidor $competidor->competidor");
        endif;
    }
}
