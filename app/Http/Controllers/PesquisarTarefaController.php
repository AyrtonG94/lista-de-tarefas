<?php

namespace App\Http\Controllers;

use App\Models\Tarefa;
use Illuminate\Http\Request;

class PesquisarTarefaController extends Controller
{
    public function pesquisarTarefaPorNome(Request $request) {
        $nome = $request->input('nome');
        $tarefas =  Tarefa::with(['TarefaStatus'])->where('nome', 'like', $nome)->get();

        return view ('site.pesquisar-tarefa', ['tarefas' => $tarefas]);

    }
}
