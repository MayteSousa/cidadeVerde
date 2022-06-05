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
                                <th>Tipo Material</th>
                            </tr>
                            <tr>
                                <td>{{ $materiais->id }}</td>
                                <td>{{ $materiais->name }}</td>
                                <td>{{ $materiais->tipo_material }}</td>
                            </tr>
                        </table>

                        <form action="/material/{{ $materiais->id }}" method="post">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="Confirmar" class="btn btn-primary btn-sm">
                            <a href="/material" class="btn btn-primary btn-sm">Voltar</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
