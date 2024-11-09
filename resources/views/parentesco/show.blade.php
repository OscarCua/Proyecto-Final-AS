@extends('layouts.app')

@section('template_title')
    {{ $parentesco->name ?? __('Show') . " " . __('Parentesco') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Parentesco</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('parentescos.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Alumno Fk:</strong>
                                    {{ $parentesco->alumno_fk }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Encargado Fk:</strong>
                                    {{ $parentesco->encargado_fk }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Tipo Parentesco:</strong>
                                    {{ $parentesco->tipo_parentesco }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Prioridad:</strong>
                                    {{ $parentesco->prioridad }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
