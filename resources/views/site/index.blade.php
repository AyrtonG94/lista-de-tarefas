<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina Inicial</title>
</head>

<body>
    <h1> Criar nova Tarefa</h1>

    <div>
        @foreach($lista_tarefas as $lista)
        {{$lista->tarefa}} <br>
        {{$lista->descricao}} <br>
        {{$lista->created_at}} <br>
        @endforeach

    </div>
</body>

</html>
