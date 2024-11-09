<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="cui" class="form-label">{{ __('Cui') }}</label>
            <input type="text" name="cui" class="form-control @error('cui') is-invalid @enderror" value="{{ old('cui', $alumno?->cui) }}" id="cui" placeholder="Cui">
            {!! $errors->first('cui', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="nombre1" class="form-label">{{ __('Nombre1') }}</label>
            <input type="text" name="nombre1" class="form-control @error('nombre1') is-invalid @enderror" value="{{ old('nombre1', $alumno?->nombre1) }}" id="nombre1" placeholder="Nombre1">
            {!! $errors->first('nombre1', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="nombre2" class="form-label">{{ __('Nombre2') }}</label>
            <input type="text" name="nombre2" class="form-control @error('nombre2') is-invalid @enderror" value="{{ old('nombre2', $alumno?->nombre2) }}" id="nombre2" placeholder="Nombre2">
            {!! $errors->first('nombre2', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="nombre3" class="form-label">{{ __('Nombre3') }}</label>
            <input type="text" name="nombre3" class="form-control @error('nombre3') is-invalid @enderror" value="{{ old('nombre3', $alumno?->nombre3) }}" id="nombre3" placeholder="Nombre3">
            {!! $errors->first('nombre3', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="apellido1" class="form-label">{{ __('Apellido1') }}</label>
            <input type="text" name="apellido1" class="form-control @error('apellido1') is-invalid @enderror" value="{{ old('apellido1', $alumno?->apellido1) }}" id="apellido1" placeholder="Apellido1">
            {!! $errors->first('apellido1', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="apellido2" class="form-label">{{ __('Apellido2') }}</label>
            <input type="text" name="apellido2" class="form-control @error('apellido2') is-invalid @enderror" value="{{ old('apellido2', $alumno?->apellido2) }}" id="apellido2" placeholder="Apellido2">
            {!! $errors->first('apellido2', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="fecha_nac" class="form-label">{{ __('Fecha Nac') }}</label>
            <input type="text" name="fecha_nac" class="form-control @error('fecha_nac') is-invalid @enderror" value="{{ old('fecha_nac', $alumno?->fecha_nac) }}" id="fecha_nac" placeholder="Fecha Nac">
            {!! $errors->first('fecha_nac', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>