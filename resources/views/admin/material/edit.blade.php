@extends('layouts.crud')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

                <div class="card">
                    <div class="card-header">Editar Materiais</div>

                    <div class="card-body">

                        <form action="/material/{{ $material->id }}" method="post">
                            @csrf
                            <!-- token de segurança -->
                            @method('PUT')
                            <div class="form-group">
                                <label for="name">Nome</label>
                                <input type="text" name="name" id="name" class="form-control"
                                    value="{{ empty(old('name')) ? $material->name : old('name') }}" />
                                @if ($errors->has('name'))
                                    <p class="text-danger">{{ $errors->first('name') }}</p>
                                @endif
                            </div>
                            <div>
                                <label for="tipo_material">Tipo Material</label>
                                <input type="tipo_material" name="tipo_material" id="tipo_material" class="form-control"
                                    value="{{ empty(old('tipo_material')) ? $material->tipo_material : old('tipo_material') }}" />
                                @if ($errors->has('tipo_material'))
                                    <p class="text-danger">{{ $errors->first('tipo_material') }}</p>
                                @endif
                            </div>

                        <br>
                            <input type="submit" value="Atualizar" class="btn btn-primary btn-sm" />
                            <a href="/material" class="btn btn-primary btn-sm">Voltar</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
