@extends('layouts.app')

@section('titulo')
    Excluir Usuário
@endsection

@section('content')
    <h3>Excluir Usuário</h3>
    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>E-mail</th>
        </tr>
        <tr>
            <td>{{ $dados->id }}</td>
            <td>{{ $dados->name }}</td>
            <td>{{ $dados->email }}</td>
        </tr>
    </table>

        <form action="/usuario/{{$dados->id}}" method="post">
            @csrf
            @method('DELETE')
            <input type="submit" value="Confirmar" class="btn btn-primary btn-sm">
            <a href="/usuario" class="btn btn-primary btn-sm">Voltar</a>
        </form>

@endsection