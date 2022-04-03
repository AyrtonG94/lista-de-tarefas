<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"  href="{{ asset('css/style.css') }}">
    <title>Pagina Inicial</title>
</head>

<body>
    <div style="text-align:center">
    <h1> Lista de Tarefas</h1> <a href="{{route('tarefas.create')}}" ><button class="botao-nova-tarefa"> Nova Tarefa</button></a>
    </div> <br> <br> <br>


    <div style="text-align:center">
        @foreach($lista_tarefas as $tarefa)
        <div>
            <h3> Tarefa:</h3> {{$tarefa->nome}}
            <h3> Descrição:</h3>{{$tarefa->descricao}} <br>
            <h3> Tarefa criada em:</h3> {{$tarefa->created_at->format('d-m-Y H:i:s')}} <br> <br>
            <h3> Status: {{$tarefa->TarefaStatus->status}} </h3>
            <a href="{{ route('tarefas.edit', ['tarefa' => $tarefa->id ]) }}">
                <button class="botao-editar-tarefa">Editar </button> </a>

            <a href="{{ route('tarefas.destroy', ['tarefa' => $tarefa->id ]) }}">
                <button class="botao-excluir-tarefa"> Exluir </button> </a> <br> <br> <br>


        </div>

        @endforeach

    </div>

</body>

</html>
