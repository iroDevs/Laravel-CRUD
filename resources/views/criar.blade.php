@extends('template')

@section('content')

<div class="form-container">
    <form>
    @csrf
        <h2 class="text-center mb-4">Criar um jogo para listagem</h2>
        <div class="form-group">
            <label for="nomeJogo">Nome do jogo</label>
            <input type="text" class="form-control" id="nomeJogo" placeholder="Insira o nome do jogo">

            <label for="notaJogo">Nota</label>
            <input type="number" class="form-control" id="nomeJogo" placeholder="Insira a nota do jogo">
        </div>
        <button type="button" id="add-game" class="btn btn-primary btn-block">Adicionar</button>
        <h2 id="alert" class="text-center mb-4 hide">Criado Com sucesso</h2>
    </form>
    <script>
         console.log('entrei no script');
$(document).ready(function() {
    $('#add-game').click(function() {
        let nomeJogo = $('#nomeJogo').val();
        let notaJogo = $('#notaJogo').val();
        let alert = $('#alert');
        console.log('click');

        $.ajax({
            url: '{{ route("adcionaJogo") }}',
            type: 'post',
            data: {
                _token: '{{ csrf_token() }}',
                nomeJogo: nomeJogo,
                notaJogo: notaJogo
            },
            success: function(data) {
                if (!data) {
                    alert.removeClass("hide").addClass("text-red");
                    alert.text("algo deu errado");
                    return;
                }
                alert.removeClass("hide").addClass("text-green");
               

            }
        });
    });
});
</script>
</div>
@endsection