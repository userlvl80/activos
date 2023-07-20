@extends('layouts.app')

@section('template_title')
    Tableactivo
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">
                            <span id="card_title">
                                {{ __('Tableactivo') }}
                            </span>
                            <div class="float-right">
                                <a href="{{ route('tableactivos.create') }}" class="btn btn-primary btn-sm float-right" data-placement="left">
                                    {{ __('Create New') }}
                                </a>
                                <!-- Botón para descargar el PDF -->
                                <form action="{{ url('/generate-pdf') }}" method="GET">
                                    @csrf
                                    <button type="submit" class="btn btn-success btn-sm float-right" style="margin-right: 10px;">
                                        {{ __('PDF') }}
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        <th>Codigo</th>
                                        <th>Marca</th>
                                        <th>Descripcion</th>
                                        <th>Numero Serie</th>
                                        <th>Placa</th>
                                        <th>Fecha Alta</th>
                                        <th>Precio Adquisicion</th>
                                        <th>Moneda</th>
                                        <th>Precio Actual</th>
                                        <th>Ubicacion</th>
                                        <th>Estado</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($tableactivos as $tableactivo)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            <td>{{ $tableactivo->codigo }}</td>
                                            <td>{{ $tableactivo->marca }}</td>
                                            <td>{{ $tableactivo->descripcion }}</td>
                                            <td>{{ $tableactivo->numero_serie }}</td>
                                            <td>{{ $tableactivo->placa }}</td>
                                            <td>{{ $tableactivo->fecha_alta }}</td>
                                            <td>{{ $tableactivo->precio_adquisicion }}</td>
                                            <td>{{ $tableactivo->moneda }}</td>
                                            <td>{{ $tableactivo->precio_actual }}</td>
                                            <td>{{ $tableactivo->ubicacion }}</td>
                                            <td>
                                                @if($tableactivo->estado == 1)
                                                    Activo
                                                @else
                                                    Eliminado
                                                @endif
                                            </td>
                                            <td>
                                                <form action="{{ route('tableactivos.destroy',$tableactivo->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('tableactivos.show',$tableactivo->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('tableactivos.edit',$tableactivo->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $tableactivos->links() !!}
            </div>
        </div>
    </div>
@endsection
