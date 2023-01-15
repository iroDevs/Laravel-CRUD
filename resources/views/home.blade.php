@extends('template')

@section('content')

<div class="main-home container">
    <table class="table table-striped table-dark text-center">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Nota</th>
                <th>Ação</th>
            </tr>
        </thead>
        <tbody>
            @foreach($jogos as $jogo)
                <tr data-id="{{ $jogo['id'] }}">
                    <td>{{ $jogo['id'] }}</td>
                    <td data-id="{{ $jogo['id'].'-nome' }}">{{ $jogo['nome'] }}</td>
                    <td data-id="{{ $jogo['id'].'-nota' }}">{{ $jogo['nota'] }}</td>
                    <td>
                         <i id="lixo"  data-id="{{ $jogo['id'] }}" class="fas fa-trash icone"></i>
                         <i  data-id="{{ $jogo['id'] }}" id="editar" class="fas fa-edit icone"></i> 
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div id="modal" class="modal hide">
        <div class="modal-content">
           
                <input type="text" id="nomeJogo" class="nomeJogo-class" name="nome" placeholder="Nome do jogo">
                <input type="number" name="nota" class="notaJogo-class" id="notaJogo" placeholder="Nota do jogo">
                <input type="submit" id="edit"  data-id="{{ $jogo['id'] }}" class="btn-editar" value="Editar">
            
        </div>
    </div>
    <script>  
$(document).ready(function() {
    $('.fas.fa-trash').click(function() {
        let id = $(this).data('id');
        $.ajax({
            url: '/home/' + id,
            type: 'delete',
            data: { _token: '{{ csrf_token() }}', id: id },
            success: function(data) {
                console.log("elemento: ",id," elemento deletado");
                $(`tr[data-id=${id}]`).remove();
            }
        });
    });

    $('.fas.fa-edit').click(function() {
    let id = $(this).data('id');
    $('.btn-editar').data('id', id);
    $('#modal').removeClass('hide');
});

$('.btn-editar').click(function() {
    let id = $(this).data('id');
    let nomeJogo = $('#nomeJogo').val();
    let notaJogo = $('#notaJogo').val();
    $.ajax({
        url: '/home/' + id,
        type: 'put',
        data: {
            _token: '{{ csrf_token() }}',
            nomeJogo: nomeJogo,
            notaJogo: notaJogo
        },
        success: function(data) {
            $(`td[data-id=${id}-nome]`).text(nomeJogo);
            $(`td[data-id=${id}-nota]`).text(notaJogo);
            $('#modal').addClass('hide');

        }
    });
});


    $('.fas.fa-edit').click(function() {
        let id = $(this).data('id');
        $('#modal').removeClass('hide');
    });

    $('#close').click(function(){
        $('#modal').addClass('hide');
    });

    $('#modal').click(function(event){
        if(event.target == this){
            $('#modal').addClass('hide');
    }
        
    });

});     
    </script>
</div>
@endsection