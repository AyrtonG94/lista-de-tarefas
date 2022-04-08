<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Pagina Inicial</title>
</head>

<body>
    <!-- BARRA DE PESQUISA-->
    <div class="text-center">
        <nav class="navbar navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand">Pesquisar tarefa</a>
                <form class="d-flex" method="POST" action="{{route('tarefa-detalhe')}}">
                    @csrf
                    <input class="form-control me-2" name="nome" type="search" placeholder="Digite o nome da tarefa" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Pesquisar</button>
                </form>
            </div>
        </nav>


        <!-- TITULO PRINCIPAL-->
        <p class="fs-1"> Lista de Tarefas </p> <a href="{{route('tarefas.create')}}"><button type="button" class="btn btn-success">Nova Tarefa</button></a>
    </div> <br> <br> <br>


    <!-- EXIBIÇÃO DOS DADOS-->
    <div class="text-center">
        @foreach($lista_tarefas as $tarefa)
        <div class="border">

            <p class="fs-3">Tarefa:
            <p class="lead"> {{$tarefa->nome}} </p>

            <p class="fs-3"> Descrição:</p>
            <p class="lead">{{$tarefa->descricao}} </p>

            <p class="fs-3"> Tarefa criada em:</p>
            <p class="lead"> {{$tarefa->created_at->format('d-m-Y H:i:s')}} </p> <br>

            <p class="fs-3"> Status:</p>
            <p class="lead"> {{$tarefa->TarefaStatus->status ?? ''}} </p>


            <!-- BOTÃO EDITAR-->
            <a href="{{ route('tarefas.edit', ['tarefa' => $tarefa]) }}">
                <button type="button" class="btn btn-primary position-relative">Editar</button> </a>
            <div>


            <!--BOTÃO EXCLUIR-->
                <form id="form_{{$tarefa->id}}" method="post" action="{{ route('tarefas.destroy', ['tarefa' => $tarefa->id]) }}">
                    @method('DELETE')
                    @csrf
                    <a href="#" onclick="document.getElementById('form_{{$tarefa->id}}').submit()"> <button type="button" class="btn btn-danger position-relative">Excluir</button></a>
                </form> <br> <br> <br>
            </div>
        </div>

        @endforeach
        {{$lista_tarefas->links()}}
    </div>

</body>

</html>
