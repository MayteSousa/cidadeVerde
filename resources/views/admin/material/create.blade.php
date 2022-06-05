@extends('layouts.crud')

@section('content')
    <div class="row">

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">

                    <div class="card">
                        <div class="card-header">Cadastrar Usuário</div>

                        <div class="card-body">
                            <form action="/material" method="post">
                                @csrf
                                <!-- token de segurança -->


                                <div class="row mb-3">
                                    <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                                    <div class="col-md-6">
                                        <input id="name" type="text"
                                            class="form-control @error('name') is-invalid @enderror" name="name"
                                            value="{{ old('name') }}" required autocomplete="name" autofocus>

                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="tipo_material"
                                        class="col-md-4 col-form-label text-md-end">{{ __('Tipo Material') }}</label>

                                    <div class="col-md-6">
                                        <input id="tipo_material" type="tipo_material"
                                            class="form-control @error('tipo_material') is-invalid @enderror" name="tipo_material"
                                            value="{{ old('tipo_material') }}" required autocomplete="tipo_material">

                                        @error('tipo_material')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

<!--
                                <div class="row mb-0">
                                    <div class="col-md-8 offset-md-4">
                                        <div class="row mb-3">
                                            <div class="form-check form-check-inline">
                                                <input class="form-control" type="checkbox" id="administrador"  value="administrador" name="checkuser[]">
                                                    
                                                <label class="form-check-label" for="administrador">Administrador</label>
                                            </div>

                                            <div class="form-check form-check-inline">
                                                <input class="form-control" type="checkbox" id="ecoponto" value="ecoponto" name="checkuser[]">
                                                <label class="form-check-label" for="ecoponto">Ecoponto</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
-->
                                <div class="row mb-0">
                                    <div class="col-md-8 offset-md-4">
                                        <input type="submit" value="Cadastrar" class="btn btn-primary btn-sm" />
                                        <a href="/home" class="btn btn-primary btn-sm">Voltar</a>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
