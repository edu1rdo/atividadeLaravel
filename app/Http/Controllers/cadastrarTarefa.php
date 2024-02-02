<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\cadastrarTarefaModel;//importar a classe que eu quero ultilizar

class cadastrarTarefa extends Controller
{
    public function index(){
        $dados = cadastrarTarefaModel::all();



        return view('paginas.tarefa')->With('dados',$dados);
    }//fim do metodo

    public function store(request $request){
        $nomeTarefa    = $request->input('nomeTarefa');//coletando os dados do formulario
        $descTarefa = $request->input('descTarefa');
        $dataTarefa = $request->input('dataTarefa');
       


        $model = new cadastrarTarefaModel();
        $model->nomeTarefa = $nomeTarefa;
        $model->descTarefa = $descTarefa;
        $model->dataTarefa = $dataTarefa;
       
        $model->save();//armazenar os dados no BD

        return redirect('/addtarefas/salvar');
    }//fim do metodo store





}//fim da classe

