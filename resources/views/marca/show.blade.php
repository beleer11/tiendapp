@extends('layouts.app')

@section('template_title')
    {{ $marca->name ?? 'Ver Marca' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Ver Marca</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('marcas.index') }}"> Atras</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $marca->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Referencia:</strong>
                            {{ $marca->referencia }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
