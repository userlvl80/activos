<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('codigo') }}
            {{ Form::text('codigo', $tableactivo->codigo, ['class' => 'form-control' . ($errors->has('codigo') ? ' is-invalid' : ''), 'placeholder' => 'Codigo']) }}
            {!! $errors->first('codigo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('marca') }}
            {{ Form::text('marca', $tableactivo->marca, ['class' => 'form-control' . ($errors->has('marca') ? ' is-invalid' : ''), 'placeholder' => 'Marca']) }}
            {!! $errors->first('marca', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('descripcion') }}
            {{ Form::text('descripcion', $tableactivo->descripcion, ['class' => 'form-control' . ($errors->has('descripcion') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion']) }}
            {!! $errors->first('descripcion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('numero_serie') }}
            {{ Form::text('numero_serie', $tableactivo->numero_serie, ['class' => 'form-control' . ($errors->has('numero_serie') ? ' is-invalid' : ''), 'placeholder' => 'Numero Serie']) }}
            {!! $errors->first('numero_serie', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('placa') }}
            {{ Form::text('placa', $tableactivo->placa, ['class' => 'form-control' . ($errors->has('placa') ? ' is-invalid' : ''), 'placeholder' => 'Placa']) }}
            {!! $errors->first('placa', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha_alta') }}
            {{ Form::text('fecha_alta', $tableactivo->fecha_alta, ['class' => 'form-control' . ($errors->has('fecha_alta') ? ' is-invalid' : ''), 'placeholder' => '10-01-23', 'pattern' => '(0[1-9]|[1-2][0-9]|3[0-1])-(0[1-9]|1[0-2])-\d{2}', 'onkeydown' => 'validateDateInput(event)']) }}
            {!! $errors->first('fecha_alta', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('precio_adquisicion') }}
            {{ Form::text('precio_adquisicion', $tableactivo->precio_adquisicion, ['class' => 'form-control' . ($errors->has('precio_adquisicion') ? ' is-invalid' : ''), 'placeholder' => '000.00', 'pattern' => '^\d+(\.\d{1,2})?$', 'onkeydown' => 'validateNumberInput(event)']) }}
            {!! $errors->first('precio_adquisicion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('moneda') }}
            {{ Form::select('moneda', ['Soles' => 'Soles', 'Dólares' => 'Dólares'], 'Soles', ['class' => 'form-control' . ($errors->has('moneda') ? ' is-invalid' : '')]) }}
            {!! $errors->first('moneda', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('precio_actual') }}
            {{ Form::text('precio_actual', $tableactivo->precio_actual, ['class' => 'form-control' . ($errors->has('precio_actual') ? ' is-invalid' : ''), 'placeholder' => '000.00', 'pattern' => '^\d+(\.\d{1,2})?$', 'onkeydown' => 'validateNumberInput(event)']) }}
            {!! $errors->first('precio_actual', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ubicacion') }}
            {{ Form::text('ubicacion', $tableactivo->ubicacion, ['class' => 'form-control' . ($errors->has('ubicacion') ? ' is-invalid' : ''), 'placeholder' => 'Ubicacion']) }}
            {!! $errors->first('ubicacion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('estado') }}
            {{ Form::select('estado', ['1' => 'Activo', '0' => 'Eliminado'], $tableactivo->estado, ['class' => 'form-control' . ($errors->has('estado') ? ' is-invalid' : '')]) }}
            {!! $errors->first('estado', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>

@section('scripts')
    @parent
    <script>
        function validateNumberInput(input) {
            input.value = input.value.replace(/[^\d.]/g, ''); // Reemplazar caracteres no numéricos ni puntos por una cadena vacía
            input.value = input.value.replace(/\.(?=.*\.)/g, ''); // Eliminar puntos adicionales
        }

        function validateDateInput(input) {
            const pattern = /^(0[1-9]|[1-2][0-9]|3[0-1])-(0[1-9]|1[0-2])-\d{2}$/;
            if (!pattern.test(input.value)) {
                input.setCustomValidity('El formato de fecha debe ser dd-mm-yy');
            } else {
                input.setCustomValidity('');
            }
        }
    </script>
@endsection

