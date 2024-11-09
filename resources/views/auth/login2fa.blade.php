@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Autenticate') }}</div>

                <div class="card-body text-center">
                    <form method="POST" action="{{ route('2fa.verify') }}">
                        @csrf
                        <p>{{ __('Ingrese su contraseña de un solo uso para completar su inicio de sesión.') }}</p>
                        <div class="row mb-3 justify-content-center">
                            <div class="col-md-6">
                                <input id="one_time_password" type="password" class="form-control @error('one_time_password') is-invalid @enderror" name="one_time_password" placeholder="**********" required autofocus>

                                @error('one_time_password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3 justify-content-center">
                            <div class="col-md-6">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Verificar') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
