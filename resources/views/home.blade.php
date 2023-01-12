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
                <tr>
                    <td>{{ $jogo['id'] }}</td>
                    <td>{{ $jogo['nome'] }}</td>
                    <td>{{ $jogo['nota'] }}</td>
                    <td>
                        <a href="#" class="btn btn-danger"> <i class="fas fa-trash"></i> </a>
                        <a href="#" class="btn btn-primary"> <i class="fas fa-edit"></i> </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection