<?php

namespace App\Http\Controllers;

use App\Models\Tarefa;
use App\Models\TarefaStatus;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;

use function GuzzleHttp\Promise\all;

class TarefaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $lista_tarefas =  Tarefa::with(['TarefaStatus'])->paginate(2);
        return view('site.index', ['lista_tarefas' => $lista_tarefas, 'request' => $request->all()])
        ->with('lista_tarefas', $lista_tarefas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $status =   TarefaStatus::all();
       return view('site.create', ['status' => $status]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            Tarefa::create($request->all());
            return redirect()->route('tarefas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Tarefa $tarefa)
    {   $status = TarefaStatus::all();
        return view('site.edit',['tarefa' => $tarefa, 'status' => $status]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tarefa $tarefa)
    {
        $tarefa->update($request->all());
        return redirect()->route('tarefas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tarefa $tarefa, TarefaStatus $tarefaStatus)
    {
        $tarefaStatus->destroy($tarefaStatus->tarefa_id);
        $tarefa->destroy($tarefa->id);
        return redirect()->route('tarefas.index');

    }
}
