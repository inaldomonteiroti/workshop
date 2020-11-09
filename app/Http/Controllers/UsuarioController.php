<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsuarioController extends Controller
{
    public function index(){

        $usuarios = User::all();
        return view('admin.usuarios.index', compact('usuarios'));
    }
    public function adicionar(){
        return view('admin.usuarios.adicionar');
    }
    // public function salvar(){
    //     return view('admin.usuarios.adicionar');
    // }
}
