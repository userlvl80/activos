@extends('layouts.app')

@section('template_title')
    {{ $tableactivo->name ?? "{{ __('Show') Tableactivo" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Tableactivo</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('tableactivos.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Codigo:</strong>
                            {{ $tableactivo->codigo }}
                        </div>
                        <div class="form-group">
                            <strong>Marca:</strong>
                            {{ $tableactivo->marca }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $tableactivo->descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Numero Serie:</strong>
                            {{ $tableactivo->numero_serie }}
                        </div>
                        <div class="form-group">
                            <strong>Placa:</strong>
                            {{ $tableactivo->placa }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Alta:</strong>
                            {{ $tableactivo->fecha_alta }}
                        </div>
                        <div class="form-group">
                            <strong>Precio Adquisicion:</strong>
                            {{ $tableactivo->precio_adquisicion }}
                        </div>
                        <div class="form-group">
                            <strong>Moneda:</strong>
                            {{ $tableactivo->moneda }}
                        </div>
                        <div class="form-group">
                            <strong>Precio Actual:</strong>
                            {{ $tableactivo->precio_actual }}
                        </div>
                        <div class="form-group">
                            <strong>Ubicacion:</strong>
                            {{ $tableactivo->ubicacion }}
                        </div>
                        <div class="form-group">
                            <strong>Estado:</strong>
                            {{ $tableactivo->estado }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
