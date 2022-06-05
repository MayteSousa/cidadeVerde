@extends('layouts.crud')

@section('content')
    <a href="/material/create" class="btn btn-primary btn-sm">Novo</a>

    <div class="card">
        <div class="card-header">
            <p class="card-title">Materiais Cadastrados</p>
        </div>
        <div class="card-body p-0">
            <br>
            <form action="{{ route('material.index') }}" method="GET" >
            
                <div class="row">
                    <div class="col">
                      <input type="text" class="form-control" id="search" name="search" placeholder="Pesquisar" aria-label="First name">
                    </div>
                    <div class="col">
                        <button>Pesquisar</button>
                        <a href="/material" class="btn btn-primary btn-sm">Exibir Todos</a>
                        <a href="/home" class="btn btn-primary btn-sm">Voltar</a>
                    </div>
                    
                </div>
            
            </form>   
                
            <table class="table">
                <thead>
                    <tr>
                        <th style="width: 10px">ID</th>
                        <th>Nome</th>
                        <th>Tipo Material</th>
                    </tr>
                </thead>
                <tbody>
                    
                    @foreach ($materiais as $mat)
                        <tr>
                             
                            <td>{{ $mat->id }}</td>
                            <td>{{ $mat->name }}</td>
                            <td>{{ $mat->tipo_material }}</td>                                                                                  
                                
                            <td>
                                <a href="/material/{{ $mat->id }}/edit" class="btn btn-primary btn-sm">Editar</a>
                                <a href="/material/{{ $mat->id }}" class="btn btn-primary btn-sm">Excluir</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        
        <!--  {//!! $dados->links() !!}-->
        </div>
    </div>

@endsection
