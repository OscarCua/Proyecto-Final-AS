@extends('layouts.app')

@section('template_title')
    {{ $encargado->name ?? __('Show') . " " . __('Encargado') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Encargado</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('encargados.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Dpi:</strong>
                                    {{ $encargado->dpi }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Nombre1:</strong>
                                    {{ $encargado->nombre1 }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Nombre2:</strong>
                                    {{ $encargado->nombre2 }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Nombre3:</strong>
                                    {{ $encargado->nombre3 }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Apellido1:</strong>
                                    {{ $encargado->apellido1 }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Apellido2:</strong>
                                    {{ $encargado->apellido2 }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Fecha Nac:</strong>
                                    {{ $encargado->fecha_nac }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Tel1:</strong>
                                    {{ $encargado->tel1 }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Tel2:</strong>
                                    {{ $encargado->tel2 }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Direcc:</strong>
                                    {{ $encargado->direcc }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
