@extends('layouts.crud')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

                <div class="card">
                    <div class="card-header">Excluir Usuário</div>

                    <div class="card-body">

                        <table class="table">
                            
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

                        <form action="/usuario/{{ $dados->id }}" method="post">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="Confirmar" class="btn btn-primary btn-sm">
                            <a href="/usuario" class="btn btn-primary btn-sm">Voltar</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
