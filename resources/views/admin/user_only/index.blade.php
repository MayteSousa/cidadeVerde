@extends('layouts.crud')

@section('content')
    <a href="/usuario/create" class="btn btn-primary btn-sm">Novo</a>

    <div class="card">
        <div class="card-header">
            <p class="card-title">Usuários Cadastrados</p>
        </div>
        <div class="card-body p-0">
            <br>
            <form action="{{ route('user_only.index') }}" method="GET" >
            
                <div class="row">
                    <div class="col">
                      <input type="text" class="form-control" id="search" name="search" placeholder="Pesquisar" aria-label="First name">
                    </div>
                    <div class="col">
                        <button>Pesquisar</button>
                        <a href="/user_only" class="btn btn-primary btn-sm">Exibir Todos</a>
                        <a href="/home" class="btn btn-primary btn-sm">Voltar</a>
                    </div>
                    
                </div>
            </form>
                
                
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
                            <td><input class="form-check-input" @if($a->administrador==1) {!! 'checked="checked" ' !!} @endif type="checkbox" role="switch" id="flexSwitchCheckDisabled" disabled></td>
                            <td><input class="form-check-input" @if($a->ecoponto==1) {!! 'checked="checked" ' !!} @endif type="checkbox" role="switch" id="flexSwitchCheckDisabled" disabled></td>
                                
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

@endsection
