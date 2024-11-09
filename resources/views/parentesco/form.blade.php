<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="alumno_fk" class="form-label">{{ __('Alumno Fk') }}</label>
            <input type="text" name="alumno_fk" class="form-control @error('alumno_fk') is-invalid @enderror" value="{{ old('alumno_fk', $parentesco?->alumno_fk) }}" id="alumno_fk" placeholder="Alumno Fk">
            {!! $errors->first('alumno_fk', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="encargado_fk" class="form-label">{{ __('Encargado Fk') }}</label>
            <input type="text" name="encargado_fk" class="form-control @error('encargado_fk') is-invalid @enderror" value="{{ old('encargado_fk', $parentesco?->encargado_fk) }}" id="encargado_fk" placeholder="Encargado Fk">
            {!! $errors->first('encargado_fk', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="tipo_parentesco" class="form-label">{{ __('Tipo Parentesco') }}</label>
            <input type="text" name="tipo_parentesco" class="form-control @error('tipo_parentesco') is-invalid @enderror" value="{{ old('tipo_parentesco', $parentesco?->tipo_parentesco) }}" id="tipo_parentesco" placeholder="Tipo Parentesco">
            {!! $errors->first('tipo_parentesco', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="prioridad" class="form-label">{{ __('Prioridad') }}</label>
            <input type="text" name="prioridad" class="form-control @error('prioridad') is-invalid @enderror" value="{{ old('prioridad', $parentesco?->prioridad) }}" id="prioridad" placeholder="Prioridad">
            {!! $errors->first('prioridad', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>