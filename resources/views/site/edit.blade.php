<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
</head>
<body>
<h1> Editar Tarefa</h1>

    @foreach($tarefas as $tarefa)

    <form name="criar-tarefa"  method="POST" action="{{route('tarefas.update', ['tarefa' => $tarefa]) }}">
        @csrf
        <label> Nome da Tarefa: </label> <input type="text" name="nome"  value="{{$tarefa->nome}}" minlength="4" maxlength="50"> <br>
        <label> Descrição: </label> <br> <textarea  name="descricao"  value="{{$tarefa->descricao}}"rows="4" cols="50" maxlength="100"> </textarea> <br>
        <button type="submit"> Alterar </button>
    </form>
    @endforeach





</body>
</html>
