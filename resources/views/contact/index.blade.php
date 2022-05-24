@extends('layouts.app')

@section('title', ' - Fale Conosco')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

                <div class="card">
                    <div class="card-header">Fale Conosco</div>

              
                        <form action="{{ url('/contato') }}" method="POST">
                            @csrf

                            <div class="form-group">
                                
                            </div>

                            @if (count($errors) > 0)
                                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                    Preencha os dados corretamente
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li> {{ $error }} </li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            @if ($message = Session::get('success'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    Agradecemos seu contato! {{ $message }}
                                </div>
                            @endif

                            @if ($message = Session::get('error'))
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    Ops! {{ $message }}
                                </div>
                            @endif

                            <div class="row mb-3">
                                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                        name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>



                            <div class="row mb-3">
                                <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('E-mail') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                        name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>



                            <div class="row mb-3">
                                <label for="assunto"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Assunto') }}</label>

                                <div class="col-md-6">
                                    <input id="assunto" type="text"
                                        class="form-control @error('assunto') is-invalid @enderror" name="assunto"
                                        value="{{ old('assunto') }}" required autocomplete="assunto" autofocus>

                                    @error('assunto')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>



                            <div class="row mb-3">
                                <label for="mensagem"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Mensagem') }}</label>

                                <div class="col-md-6">
                                    <textarea id="mensagem" class="form-control @error('mensagem') is-invalid @enderror" name="mensagem"
                                        value="{{ old('mensagem') }}" required autocomplete="mensagem" autofocus
                                        cols="10" rows="5"></textarea>
                                </div>
                            </div>
                            <div class="row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <input type="submit" value="Enviar" class="btn btn-primary btn-sm" />
                                    <a href="{{ route('inicio') }}" class="btn btn-primary btn-sm">Voltar</a>                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
