@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Tipos de diligencia
                    @can('tbldiligencia.create')
                    <a href="{{ route('tbldiligencia.create') }}" 
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
                            @foreach($tbldiligencias as $tbldiligencia)
                            <tr>
                                <td>{{ $tbldiligencia->id }}</td>
                                <td>{{ $tbldiligencia->nombre }}</td>
                                <td>{{ $tbldiligencia->sigla }}</td>
                                <td>{{ $tbldiligencia->descripcion }}</td>
                                @can('tbldiligencia.show')
                                <td width="10px">
                                    <a href="{{ route('tbldiligencia.show', $tbldiligencia->id) }}" 
                                    class="btn btn-sm btn-default">
                                        ver
                                    </a>
                                </td>
                                @endcan
                                @can('tbldiligencia.edit')
                                <td width="10px">
                                    <a href="{{ route('tbldiligencia.edit', $tbldiligencia->id) }}" 
                                    class="btn btn-sm btn-default">
                                        editar
                                    </a>
                                </td>
                                @endcan
                                @can('tbldiligencia.destroy')
                                <td width="10px">
                                    {!! Form::open(['route' => ['tbldiligencia.destroy', $tbldiligencia->id], 
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
                    {{ $tbldiligencias->render() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection