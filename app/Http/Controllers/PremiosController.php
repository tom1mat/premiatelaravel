<?php

namespace App\Http\Controllers;

use App\Premio;
use Illuminate\Http\Request;

class PremiosController extends Controller
{
    public function index(){
        $premios = Premio::all();

        return view("panel.premios.index", compact("premios"));
    }

    public function create(){
        return view("panel.premios.create");
    }

    public function edit($id){
        $premio = Premio::find($id);

        if($premio)
            return view("panel.premios.edit", compact("premio"));
        else
            return redirect()->route('premios.index')->withErrors("El premio #$id no existe.");

    }

    public function store(Request $request){
        $validatedData = $request->validate([
            'premio' => 'required',
            'imagen' => 'required',
        ]);

        if($path = $request->imagen->store('premios')){
            $premio = Premio::create($validatedData);
            $premio->imagen = $path;
            $premio->save();
        }else{
            return redirect()->back()->withErrors("No se pudo crear el premio ERR1");
        }

        if($premio)
            return redirect()->route('premios.index')->with("success", "El premio $premio->premio ha sido creado correctamente.");
        else
            return redirect()->back()->withErrors("No se pudo crear el premio ERR2");

        //No devuelvo asi la vista porque no se envia lo que va en wl with.
        //return view("panel.premios.create")->with("success", "El premio ha sido creado correctamente.");
    }

    public function update($id, Request $request){
        $validatedData = $request->validate([
            'premio' => 'required',
        ]);

        if(isset($request->imagen)){
            if($path = $request->imagen->store('premios')){
                $validatedData["imagen"] = $path;
            }else{
                return redirect()->back()->withErrors("No se pudo editar el premio ERR1");
            }
        }

        $premio = Premio::find($id);

        if($premio->update($validatedData)){
            return redirect()->route('premios.index')->with("success", "El sorteo $premio->premio se ha editado correctamente.");
        }
    }

    public function destroy($id){
        $premio = Premio::find($id);
        if($premio):
            if($premio->destroy($id)):
                return redirect()->back()->with("success","Se eliminó correctamente el jugador $premio->premio");
            else:
                return redirect()->back()->withErrors("No se pudo eliminar el jugador $premio->premio");
            endif;
        else:
            return redirect()->back()->withErrors("No se encontró el jugador $premio->premio");
        endif;
    }
}
