<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nombre*') }}
            {{ Form::text('nombre', $marca->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('referencia*') }}
            {{ Form::text('referencia', $marca->referencia, ['class' => 'form-control' . ($errors->has('referencia') ? ' is-invalid' : ''), 'placeholder' => 'Referencia']) }}
            {!! $errors->first('referencia', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <br/>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-success">Guardar</button>
        <a class="btn btn-primary" href="{{ route('marcas.index') }}"> Back</a>
    </div>
</div>