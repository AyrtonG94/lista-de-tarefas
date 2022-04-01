<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina Inicial</title>
</head>

<body>
    <h1> Lista de Tarefas</h1>

    <div>
        @foreach($lista_tarefas as $lista)
        <h3> {{$lista->tarefa}} </h3> <a href="{{ route('tarefas/.edit')}}" > Editar</a>
        {{$lista->descricao}} <br>
        {{$lista->created_at}} <br> <br>
        @endforeach

    </div>
</body>

</html>
