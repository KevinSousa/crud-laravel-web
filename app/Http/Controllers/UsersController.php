<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\UsersController;
use App\Users;

class UsersController extends Controller {

    public function index() {
    	$users = Users::all();
    	return view('index', compact('users'));
    }

    public function salvar(Request $req){

    	$dados = $req -> all();
    	Users::create($dados);
    	return redirect() -> route('home');

    }

    public function editar($id){

        $usuario = Users::find($id);
        return view('editar', compact('usuario'));

    }

    public function atualizar(Request $req, $id){
        $dados = $req -> all();
        Users::find($id)->update($dados);
        return redirect() -> route('home');
    }

    public function remover($id){
    	Users::find($id) -> delete();
    	return redirect() -> route('home');
    }

    public function gerarPDF(){
    
        $users = Users::all();
        $pdf = \PDF::loadView('pdf', compact('users'));
        return $pdf -> stream();

    }
}
