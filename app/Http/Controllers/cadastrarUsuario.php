<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\cadastrarUsuarioModel;//importar a classe que eu quero ultilizar

class cadastrarUsuario extends Controller
{
    public function index(){
        $dados = cadastrarUsuarioModel::all();



        return view('paginas.cadastrar')->With('dados',$dados);
    }//fim do metodo

    public function store(request $request){
        $nomeUsuario     = $request->input('nome');//coletando os dados do formulario
        $cpfUsuario = $request->input('cpf');
       


        $model = new cadastrarUsuarioModel();
        $model->nome = $nomeUsuario;
        $model->cpf = $cpfUsuario;
       
        $model->save();//armazenar os dados no BD

        return redirect('/tarefa');
    }//fim do metodo store





}//fim da classe




