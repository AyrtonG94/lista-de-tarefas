<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Nova Tarefa</title>
</head>
<body>
    <p class="fs-1 text-center"> Criar nova Tarefa</p> <p class="fs-4 text-center"><a href="{{route('tarefas.index')}}"> Voltar </a> </p>
    <hr> </hr>
<div class="text-center">
    <form name="criar-tarefa"  method="POST" action="{{route('tarefas.store')}}">
        @csrf
        <label class="lead"> Nome da Tarefa: </label> <br><input type="text" name="nome" minlength="4" maxlength="50" required> <br> <br>
        <label class="lead"> Descrição: </label> <br> <textarea  name="descricao" rows="4" cols="50" maxlength="100"> </textarea> <br> <br>

        <select name="status_id" required>
        <option>-- Selecione um Status --</option>

        @foreach($status as $tarefa_status)
            <option value="{{ $tarefa_status->id }}" {{ ($tarefa_status->tarefa_status_id ?? old('tarefa_status')) == $tarefa_status->id ? 'selected' : '' }} >{{ $tarefa_status->status }}</option>
        @endforeach
    </select> <br> <br>


    <button type="submit" class="btn btn-success">Cadastrar</button></a>
    </form>

    </div>



</body>
</html>
