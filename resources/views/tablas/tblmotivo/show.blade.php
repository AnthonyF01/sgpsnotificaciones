@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Motivo
                    <a href="{{ url('/tblmotivo') }}" class="btn btn-xs btn-default pull-right">Registros</a>
                </div>

                <div class="panel-body">                                        
                    <p><strong>Nombre</strong>     {{ $tblmotivo->nombre }}</p>
                    <p><strong>Sigla</strong>  {{ $tblmotivo->sigla }}</p>
                    <p><strong>Descripción</strong>  {{ $tblmotivo->descripcion }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection