<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Editar Tarefa</title>
</head>

<body>
    <h1> Editar Tarefa</h1> <a href="{{route('tarefas.index')}}"> <button class="botao-voltar">Voltar </button> </a> <br> <br> <br> <br> <br>
    <form name="editar-tarefa" method="POST" action="{{route('tarefas.update', ['tarefa' => $tarefa->id ])}}">

        @csrf
        @method('PUT')
        <label> <h4> Nome da tarefa: </h4> </label> <input type="text" value="{{$tarefa->nome ?? old('nome')}}" name="nome" minlength="4" maxlength="50" required> <br> <br>
        <label> <h4> Descrição: </h4> </label>  <textarea name="descricao" placeholder="{{$tarefa->descricao ?? old('descricao')}}"  rows="10" cols="20" maxlength="100"> </textarea> <br> <br>

         <h4> Status: </h4> <select name="status_id" required>
            <option>-- Selecione um Status --</option>
            @foreach($status as $tarefa_status)
             <option value="{{ $tarefa_status->id }}" {{ ($tarefa->status_id ?? old('status_id')) == $tarefa_status->id ? 'selected' : '' }}>{{ $tarefa_status->status }}</option>
            @endforeach
        </select> <br> <br> <br>
        <button class="botao-editar" type="submit"> Editar </button>


    </form>






</body>

</html>
