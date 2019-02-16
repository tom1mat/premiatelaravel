<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index(){
        $usuarios = User::all();

        return view("panel.usuarios.index", compact("usuarios"));
    }

    public function create(){
        return view("panel.usuarios.create");
    }

    public function edit($id){
        $user = User::find($id);
        return view("panel.usuarios.create");
    }
}
