<?php

namespace App\Http\Controllers;

use App\Sorteo;
use Carbon\Carbon;
use Illuminate\Http\Request;

class SorteosController extends Controller
{
    public function index(){
        $sorteos = Sorteo::all();

        return view("panel.sorteos.index", compact("sorteos"));
    }

    public function create(){
        return view("panel.sorteos.create");
    }

    public function edit($id){
        $sorteo = Sorteo::find($id);

        if($sorteo)
            return view("panel.sorteos.edit", compact("sorteo"));
        else
            return redirect()->route('sorteos.index')->withErrors("El sorteo #$id no existe.");

    }

    public function store(Request $request){
        $validatedData = $request->validate([
            'sorteo' => 'required',
            'fecha' => 'date',
        ]);

        $fecha = new Carbon($validatedData["fecha"]);
        $now = Carbon::now();
        if($fecha->diff($now)->days < 30){
            return view("panel.sorteos.create")->withErrors("La fecha debe ser mayor a 30 días");
        }

        $sorteo = Sorteo::create($validatedData);

        if($sorteo)
            return redirect()->route('sorteos.index')->with("success", "El sorteo $sorteo->sorteo ha sido creado correctamente.");

        //No devuelvo asi la vista porque no se envia lo que va en wl with.
        //return view("panel.sorteos.create")->with("success", "El sorteo ha sido creado correctamente.");
    }

    public function update($id, Request $request){
        $validatedData = $request->validate([
            'sorteo' => 'required',
            'fecha' => 'date',
        ]);

        $sorteo = Sorteo::find($id);

        if($sorteo->update($validatedData)){
            return redirect()->route('sorteos.index')->with("success", "El sorteo $sorteo->sorteo se ha editado correctamente.");
        }
    }

    public function destroy($id){
        $sorteo = Sorteo::find($id);
        if($sorteo):
            if($sorteo->destroy($id)):
                return redirect()->back()->with("success","Se eliminó correctamente el jugador $sorteo->sorteo");
            else:
                return redirect()->back()->withErrors("No se pudo eliminar el jugador $sorteo->sorteo");
            endif;
        else:
            return redirect()->back()->withErrors("No se encontró el jugador $sorteo->sorteo");
        endif;
    }
}
