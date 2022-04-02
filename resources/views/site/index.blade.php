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
    <h1> Lista de Tarefas</h1> <a href="{{route('tarefas.create')}}" ><button class="botao-nova-tarefa"> Nova Tarefa</button></a>

    <div>
        @foreach($lista_tarefas as $tarefa)
        <div class="borda-vermelha">
            <h3> Tarefa:</h3> {{$tarefa->nome}}
            <h3> Descrição:</h3>{{$tarefa->descricao}} <br>
            <h3> Data de criação:</h3>{{$tarefa->created_at}} <br> <br>
            <h3> Status: {{$tarefa->TarefaStatus->status}} </h3>
            <a href="{{ route('tarefas.edit', ['tarefa' => $tarefa->id ]) }}">
                <button class="botao-editar-tarefa">Editar </button> </a>

            <a href="{{ route('tarefas.destroy', ['tarefa' => $tarefa->id ]) }}">
                <button class="botao-excluir-tarefa"> Exluir </button> </a>


        </div>

        @endforeach

    </div>

</body>

</html>
