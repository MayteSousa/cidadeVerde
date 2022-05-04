@extends('layouts.app')

@section('title', ' - Usuários Cadastrados')

@section('content')
    <a href="/usuario/create" class="btn btn-primary btn-sm">Novo</a>

    <div class="card">
        <div class="card-header">
            <p class="card-title">Usuários Admininstradores Cadastrados</p>
        </div>
        <div class="card-body p-0">
            <table class="table">
                <thead>
                    <tr>
                        <th style="width: 10px">ID</th>
                        <th>Nome</th>
                        <th>E-mail</th>
                        <th style="width: 10px">Admin</th>
                        <th style="width: 10px">Ecoponto</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($dados as $a)
                        <tr>
                            <td>{{ $a->id }}</td>
                            <td>{{ $a->name }}</td>
                            <td>{{ $a->email }}</td>
                            <td>{{ $a->administrador }}</td>
                            <td>{{ $a->ecoponto }}</td>
                            <td>
                                <a href="/usuario/{{ $a->id }}/edit" class="btn btn-primary btn-sm">Editar</a>
                                <a href="/usuario/{{ $a->id }}" class="btn btn-primary btn-sm">Excluir</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
      <!--  {//!! $dados->links() !!}-->
        </div>
    </div>

    <a href="/home" class="btn btn-primary btn-sm">Voltar</a>
@endsection
