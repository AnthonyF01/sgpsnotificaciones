@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Tipos de Motivo
                    @can('tblmotivo.create')
                    <a href="{{ route('tblmotivo.create') }}" 
                    class="btn btn-sm btn-primary pull-right">
                        Crear
                    </a>
                    @endcan
                </div>

                <div class="panel-body">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th width="10px">ID</th>
                                <th>Nombre</th>
                                <th>Sigla</th>
                                <th>Descripción</th>
                                <th colspan="3">Acción</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($tblmotivos as $tblmotivo)
                            <tr>
                                <td>{{ $tblmotivo->id }}</td>
                                <td>{{ $tblmotivo->nombre }}</td>
                                <td>{{ $tblmotivo->sigla }}</td>
                                <td>{{ $tblmotivo->descripcion }}</td>
                                @can('tblmotivo.show')
                                <td width="10px">
                                    <a href="{{ route('tblmotivo.show', $tblmotivo->id) }}" 
                                    class="btn btn-sm btn-default">
                                        ver
                                    </a>
                                </td>
                                @endcan
                                @can('tblmotivo.edit')
                                <td width="10px">
                                    <a href="{{ route('tblmotivo.edit', $tblmotivo->id) }}" 
                                    class="btn btn-sm btn-default">
                                        editar
                                    </a>
                                </td>
                                @endcan
                                @can('tblmotivo.destroy')
                                <td width="10px">
                                    {!! Form::open(['route' => ['tblmotivo.destroy', $tblmotivo->id], 
                                    'method' => 'DELETE']) !!}
                                        <button class="btn btn-sm btn-danger">
                                            Eliminar
                                        </button>
                                    {!! Form::close() !!}
                                </td>
                                @endcan
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $tblmotivos->render() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection