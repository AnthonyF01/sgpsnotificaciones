@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Diligencia
                    <a href="{{ url('/tbldiligencia') }}" class="btn btn-xs btn-default pull-right">Registros</a>
                </div>

                <div class="panel-body">                                        
                    <p><strong>Nombre</strong>     {{ $tbldiligencia->nombre }}</p>
                    <p><strong>Sigla</strong>  {{ $tbldiligencia->sigla }}</p>
                    <p><strong>Descripción</strong>  {{ $tbldiligencia->descripcion }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection