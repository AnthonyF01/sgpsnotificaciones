@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Diligencia</div>

                <div class="panel-body">                    
                    {!! Form::model($tbldiligencia, ['route' => ['tbldiligencia.update', $tbldiligencia->id], 'method' => 'PUT']) !!}

                        @include('tablas.tbldiligencia.partials.form')
                        
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection