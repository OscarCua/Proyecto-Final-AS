@extends('layouts.app')

@section('template_title')
    {{ $alumno->name ?? __('Show') . " " . __('Alumno') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Alumno</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('alumnos.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Cui:</strong>
                                    {{ $alumno->cui }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Nombre1:</strong>
                                    {{ $alumno->nombre1 }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Nombre2:</strong>
                                    {{ $alumno->nombre2 }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Nombre3:</strong>
                                    {{ $alumno->nombre3 }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Apellido1:</strong>
                                    {{ $alumno->apellido1 }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Apellido2:</strong>
                                    {{ $alumno->apellido2 }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Fecha Nac:</strong>
                                    {{ $alumno->fecha_nac }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
