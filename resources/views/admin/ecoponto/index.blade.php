@extends('layouts.crud')

@section('content')

    <a href="/ecoponto/create" class="btn btn-primary btn-sm">Novo</a>

    <div class="card">
        <div class="card-header">
            <p class="card-title">Ecopontos Cadastrados</p>
        </div>
        
        <div class="card-body p-0">
            <br>
            <form action="{{ route('ecoponto.index') }}" method="GET" >
            
                <div class="row">
                    <div class="col">
                      <input type="text" class="form-control" id="search" name="search" placeholder="Pesquisar" aria-label="First name">
                    </div>
                    <div class="col">
                        <button>Pesquisar</button>
                        <a href="/ecoponto" class="btn btn-primary btn-sm">Exibir Todos</a>
                        
                        <a href="/home" class="btn btn-primary btn-sm">Voltar</a>
                    </div>
                    
                </div>
                <br>
                <a href="/mapa_ecopontos" class="btn btn-primary btn-sm">Mapa</a>
            
            </form>   
                
            <table class="table">
                <thead>
                    <tr>
                        <th style="width: 10px">ID</th>
                        <th>Nome</th>
                        <th>Telefone</th>
                        <th>E-mail</th>
                        <th>Endereço</th>
                        <th style="width: 10px">Latitude</th>
                        <th style="width: 10px">Longitude</th>
                    </tr>
                </thead>
                <tbody>
                    
                    @foreach ($ecopontos as $eco)
                        <tr> 
                            <td>{{ $eco->id }}</td>
                            <td>{{ $eco->name }}</td>
                            <td>{{ $eco->phone }}</td>
                            <td>{{ $eco->email }}</td> 
                            <td>{{ $eco->address }}</td>
                            <td>{{ $eco->lat }}</td>
                            <td>{{ $eco->lng }}</td>                                                   
                            <td>
                                <a href="/ecoponto/{{ $eco->id }}/edit" class="btn btn-primary btn-sm">Editar</a>
                                <a href="/ecoponto/{{ $eco->id }}" class="btn btn-primary btn-sm">Excluir</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        
        <!--  {//!! $ecopontos->links() !!}-->
        </div>
    </div>

@endsection
