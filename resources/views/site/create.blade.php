<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nova Tarefa</title>
</head>
<body>
<h1> Criar nova Tarefa</h1>

    <form name="criar-tarefa"  method="POST" action="{{route('tarefas.store')}}">
        @csrf
        <label> Nome da Tarefa: </label> <input type="text" name="nome" minlength="4" maxlength="50"> <br>
        <label> Descrição: </label> <br> <textarea  name="descricao" rows="4" cols="50" maxlength="100"> </textarea> <br>
        <button type="submit"> Cadastrar </button>
    </form>



</body>
</html>
