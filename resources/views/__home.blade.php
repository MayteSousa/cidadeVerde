@extends('layouts.app')
@section('title')
     - {{ __('Dashboard') }}
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('You are logged in!') }}
                    </div>
                </div>
                <br />
                <h1>{{ Auth::user()->name }}, Bem vindo(a) ao Cidade Verde </h1>
            </div>
        </div>
    </div>
@endsection
