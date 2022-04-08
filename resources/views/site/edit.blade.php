<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Editar Tarefa</title>
</head>

<body>
    <p class="fs-1 text-center"> Editar Tarefa <a href="{{route('tarefas.index')}}">
            <p class="fs-4 text-center"><a href="{{route('tarefas.index')}}"> Voltar </a> </p>
            <hr>
            </hr>
            <div class="text-center">
                <form name="editar-tarefa" method="POST" action="{{route('tarefas.update', ['tarefa' => $tarefa->id ])}}">

                    @csrf
                    @method('PUT')
                    <label class="lead"> Nome da tarefa: </label> <br> <input type="text" value="{{$tarefa->nome ?? old('nome')}}" name="nome" minlength="4" maxlength="50" required> <br> <br>
                    <label class="lead"> Descrição: </label> <br> <textarea name="descricao" placeholder="{{$tarefa->descricao ?? old('descricao')}}" rows="4" cols="50" maxlength="100"> </textarea> <br> <br>

                    <label class="lead"> Status: </label> <br>
                    <select name="status_id" required>
                        <option>-- Selecione um Status --</option>
                        @foreach($status as $tarefa_status)
                        <option value="{{ $tarefa_status->id }}" {{ ($tarefa->status_id ?? old('status_id')) == $tarefa_status->id ? 'selected' : '' }}>{{ $tarefa_status->status }}</option>
                        @endforeach
                    </select> <br> <br> <br>
                    <button type="submit" class="btn btn-primary">Editar Tarefa</button>


                </form>

                </form>




</body>

</html>
