@extends('template')

@section('content')

<div class="form-container">
    <form>
        <h2 class="text-center mb-4">Criar um jogo para listagem</h2>
        <div class="form-group">
            <label for="nomeJogo">Nome do jogo</label>
            <input type="text" class="form-control" id="nomeJogo" placeholder="Insira o nome do jogo">

            <label for="notaJogo">Nota</label>
            <input type="text" class="form-control" id="nomeJogo" placeholder="Insira a nota do jogo">
        </div>
        <button type="submit" class="btn btn-primary btn-block">Adicionar</button>
    </form>

</div>
@endsection