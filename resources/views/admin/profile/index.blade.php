@extends('layouts.crud')

@section('content')   
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <p class="card-title">Perfil do Usuário</p>
                </div>
                
                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                @if(session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif

                <div class="card-body p-0">
                    <table class="table">
                            <thead>
                                <tr>
                                    <th style="width: 10px">ID</th>
                                    <td>{{ auth()->user()->id }}</td>
                                </tr>
                                <tr>
                                    <th>Nome</th>
                                    <td>{{ auth()->user()->name }}</td>
                                </tr>
                                <tr>
                                    <th>E-mail</th>
                                    <td>{{ auth()->user()->email }}</td>
                                </tr>
                                <tr>
                                    <th style="width: 10px">Admin</th>
                                    <td>{{ auth()->user()->administrador }}</td>
                                </tr>
                                <tr>
                                    <th style="width: 10px">Ecoponto</th>
                                    <td>{{ auth()->user()->ecoponto }}</td>
                                </tr>
                            </thead>
                        </table>
                </div>
            </div>
            <a href="/home" class="btn btn-primary btn-sm">Voltar</a>
        </div>
    </div>
</div>
@endsection