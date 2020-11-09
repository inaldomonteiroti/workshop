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
    public function salvar(Request $request)
    {
        $dados = $request->all();

        $usuario = new User();
        $usuario->name = $dados['name'];
        $usuario->email = $dados['email'];
        $usuario->password = bcrypt($dados['password']);
        $usuario->save();
        return redirect()->route('admin.usuarios');
    }
    public function deletar($id)
    {
        User::find($id)->delete();
        return redirect()->route('admin.usuarios');

    }
    public function editar($id)
    {
        $usuario = User::find($id);
        return view('admin.usuarios.editar', compact('usuario'));
    }

    public function atualizar(Request $request, $id)
    {

        $usuario = User::find($id);
        $dados = $request->all();
        if(isset($dados['password']) && strlen($dados['password']) > 5 ){
            $dados['password'] = bcrypt($dados['password']);
        }else{
            unset($dados['password']);
        }

        $usuario ->update($dados);

        return redirect()->route('admin.usuarios');
    }
}
