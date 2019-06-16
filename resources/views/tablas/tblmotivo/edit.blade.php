@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Motivo</div>

                <div class="panel-body">                    
                    {!! Form::model($tblmotivo, ['route' => ['tblmotivo.update', $tblmotivo->id], 'method' => 'PUT']) !!}

                        @include('tablas.tblmotivo.partials.form')
                        
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection