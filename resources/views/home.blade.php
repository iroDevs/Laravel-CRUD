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
                    <td>{{ $jogo['nome'] }}</td>
                    <td>{{ $jogo['nota'] }}</td>
                    <td>
                         <i id="lixo"  data-id="{{ $jogo['id'] }}" class="fas fa-trash icone"></i>
                         <i  data-id="{{ $jogo['id'] }}" id="editar" class="fas fa-edit icone"></i> 
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

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
});


    </script>
</div>
@endsection