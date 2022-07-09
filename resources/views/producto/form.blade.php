<div class="box box-info padding-1">
    <div class="box-body">
        <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre', $producto->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('talla') }}
            {{ Form::text('talla', $producto->talla, ['class' => 'form-control' . ($errors->has('talla') ? ' is-invalid' : ''), 'placeholder' => 'Talla']) }}
            {!! $errors->first('talla', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('observaciones') }}
            {{ Form::textarea('observaciones', $producto->observaciones, ['class' => 'form-control' . ($errors->has('observaciones') ? ' is-invalid' : ''), 'placeholder' => 'Observaciones']) }}
            {!! $errors->first('observaciones', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Marca') }}
            {!! Form::select('id_marca', $marca, null, ['class' => 'form-control'. ($errors->has('id_marca') ? ' is-invalid' : ''), 'placeholder' => 'Marca']) !!}
            {!! $errors->first('id_marca', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cantidad_inventario') }}
            {{ Form::text('cantidad_inventario', $producto->cantidad_inventario, ['class' => 'form-control' . ($errors->has('cantidad_inventario') ? ' is-invalid' : ''), 'placeholder' => 'Cantidad Inventario']) }}
            {!! $errors->first('cantidad_inventario', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha_embarque') }}
            {{ Form::date('fecha_embarque', date("d/m/Y", strtotime($producto->fecha_embarque)), ['class' => 'form-control' . ($errors->has('fecha_embarque') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Embarque']) }}
            {!! $errors->first('fecha_embarque', '<div class="invalid-feedback">:message</div>') !!}
        </div>
    </div>
    <br/>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-success">Guardar</button>
        <a class="btn btn-primary" href="{{ route('productos.index') }}"> Atras</a>
    </div>
</div>