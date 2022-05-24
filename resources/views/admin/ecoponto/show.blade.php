@extends('layouts.crud')

@section('content')

    <h3>Excluir Ecoponto</h3>
    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Telefone</th>
            <th>E-mail</th>
            <th>Endereço</th>
            <th>Responsável</th>            
        </tr>
        <tr>
            <td>{{ $ecoponto->id }}</td>
            <td>{{ $ecoponto->name }}</td>
            <td>{{ $ecoponto->phone }}</td>
            <td>{{ $ecoponto->email }}</td>
            <td>{{ $ecoponto->address }}</td>
            <td>{{ $ecoponto->responsible }}</td>
        </tr>
    </table>

        <form action="/ecoponto/{{$ecoponto->id}}" method="post">
            @csrf
            @method('DELETE')
            <input type="submit" value="Confirmar" class="btn btn-primary btn-sm">
            <a href="/usuario" class="btn btn-primary btn-sm">Voltar</a>
        </form>

@endsection