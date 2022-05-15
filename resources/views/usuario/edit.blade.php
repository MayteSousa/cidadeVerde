@extends('layouts.app')

@section('title', 'Editar Usuário')
    
@section('content')
    <div class="container">
        <h3>Editar Usuário</h3>
        <div class="row">
            <div class="col-sm-6">
                <form action="/usuario/{{$dados->id}}" method="post">
                    @csrf  <!-- token de segurança -->
                    @method('PUT')
                    <div class="form-group">
                        <label for="name">Nome</label>
                        <input type="text" name="name" id="name" class="form-control" value="{{(empty(old('name')))?$dados->name:old('name')}}"/>
                        @if($errors->has('name'))
                            <p class="text-danger">{{$errors->first('name')}}</p>
                        @endif
                    </div>
                    <div>
                        <label for="email">E-mail</label>
                        <input type="email" name="email" id="email" class="form-control" value="{{(empty(old('email')))?$dados->email:old('email')}}"/>
                        @if($errors->has('email'))
                        <p class="text-danger">{{$errors->first('email')}}</p>
                        @endif
                    </div>
                    <div>
                        <label for="administrador">Administrador</label>
                        <input type="administrador" name="administrador" id="administrador" class="form-control" value="{{(empty(old('administrador')))?$dados->administrador:old('administrador')}}"/>
                        @if($errors->has('administrador'))
                        <p class="text-danger">{{$errors->first('administrador')}}</p>
                        @endif
                    </div>
                    <div>
                        <label for="ecoponto">Ecoponto</label>
                        <input type="ecoponto" name="ecoponto" id="ecoponto" class="form-control" value="{{(empty(old('ecoponto')))?$dados->ecoponto:old('ecoponto')}}"/>
                        @if($errors->has('ecoponto'))
                        <p class="text-danger">{{$errors->first('ecoponto')}}</p>
                        @endif
                    </div>
                    <input type="submit" value="Atualizar" class="btn btn-primary btn-sm"/>
                    <a href="/usuario" class="btn btn-primary btn-sm">Voltar</a>
                </form>
            </div>
        </div>
    </div>
@endsection