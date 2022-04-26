@extends('layouts.app')

@section('title', ' - Editar Senha Usuário')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                    
                <div class="card">
                    <div class="card-header">{{ __('Change Password') }}</div>

                    <div class="card-body">
                        {{ __('Please confirm your password before continuing.') }}

                    <form action="{{ route('update-password') }}" method="POST">
                        @csrf
                        <div class="card-body">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @elseif (session('error'))
                                <div class="alert alert-danger" role="alert">
                                    {{ session('error') }}
                                </div>
                            @endif

                            <div class="row mb-3">
                                <label for="oldPasswordInput" class="col-md-4 col-form-label text-md-end">{{__('Old Password')}}</label>

                                <div class="col-md-6">
                                    <input name="old_password" type="password" class="form-control @error('old_password') is-invalid @enderror" id="oldPasswordInput" >

                                    @error('old_password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            
                           <div class="row mb-3">
                                <label for="newPasswordInput" class="col-md-4 col-form-label text-md-end">New Password</label>
                                
                                <div class="col-md-6">
                                    <input name="new_password" type="password" class="form-control @error('new_password') is-invalid @enderror" id="newPasswordInput">
                                    
                                    @error('new_password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                           <div class="row mb-3">
                                <label for="confirmNewPasswordInput" class="col-md-4 col-form-label text-md-end">Confirm New Password</label>
                                
                                <div class="col-md-6">
                                    <input name="new_password_confirmation" type="password" class="form-control" id="confirmNewPasswordInput">
                                </div>
                            </div>

                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button class="btn btn-info btn-sm">{{ __('Update Password') }}</button>
                                <a href="/home" class="btn btn-info btn-sm">Voltar</a>                                
                            </div>
                        </div>
                    </form>
                </div>
                </div>
            </div>
        </div>
    </div>
@endsection