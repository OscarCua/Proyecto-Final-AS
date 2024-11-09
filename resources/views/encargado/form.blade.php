<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="dpi" class="form-label">{{ __('Dpi') }}</label>
            <input type="text" name="dpi" class="form-control @error('dpi') is-invalid @enderror" value="{{ old('dpi', $encargado?->dpi) }}" id="dpi" placeholder="Dpi">
            {!! $errors->first('dpi', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="nombre1" class="form-label">{{ __('Nombre1') }}</label>
            <input type="text" name="nombre1" class="form-control @error('nombre1') is-invalid @enderror" value="{{ old('nombre1', $encargado?->nombre1) }}" id="nombre1" placeholder="Nombre1">
            {!! $errors->first('nombre1', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="nombre2" class="form-label">{{ __('Nombre2') }}</label>
            <input type="text" name="nombre2" class="form-control @error('nombre2') is-invalid @enderror" value="{{ old('nombre2', $encargado?->nombre2) }}" id="nombre2" placeholder="Nombre2">
            {!! $errors->first('nombre2', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="nombre3" class="form-label">{{ __('Nombre3') }}</label>
            <input type="text" name="nombre3" class="form-control @error('nombre3') is-invalid @enderror" value="{{ old('nombre3', $encargado?->nombre3) }}" id="nombre3" placeholder="Nombre3">
            {!! $errors->first('nombre3', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="apellido1" class="form-label">{{ __('Apellido1') }}</label>
            <input type="text" name="apellido1" class="form-control @error('apellido1') is-invalid @enderror" value="{{ old('apellido1', $encargado?->apellido1) }}" id="apellido1" placeholder="Apellido1">
            {!! $errors->first('apellido1', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="apellido2" class="form-label">{{ __('Apellido2') }}</label>
            <input type="text" name="apellido2" class="form-control @error('apellido2') is-invalid @enderror" value="{{ old('apellido2', $encargado?->apellido2) }}" id="apellido2" placeholder="Apellido2">
            {!! $errors->first('apellido2', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="fecha_nac" class="form-label">{{ __('Fecha Nac') }}</label>
            <input type="text" name="fecha_nac" class="form-control @error('fecha_nac') is-invalid @enderror" value="{{ old('fecha_nac', $encargado?->fecha_nac) }}" id="fecha_nac" placeholder="Fecha Nac">
            {!! $errors->first('fecha_nac', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="tel1" class="form-label">{{ __('Tel1') }}</label>
            <input type="text" name="tel1" class="form-control @error('tel1') is-invalid @enderror" value="{{ old('tel1', $encargado?->tel1) }}" id="tel1" placeholder="Tel1">
            {!! $errors->first('tel1', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="tel2" class="form-label">{{ __('Tel2') }}</label>
            <input type="text" name="tel2" class="form-control @error('tel2') is-invalid @enderror" value="{{ old('tel2', $encargado?->tel2) }}" id="tel2" placeholder="Tel2">
            {!! $errors->first('tel2', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="direcc" class="form-label">{{ __('Direcc') }}</label>
            <input type="text" name="direcc" class="form-control @error('direcc') is-invalid @enderror" value="{{ old('direcc', $encargado?->direcc) }}" id="direcc" placeholder="Direcc">
            {!! $errors->first('direcc', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>