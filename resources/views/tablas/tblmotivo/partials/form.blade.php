@if ($errors->any())
  <div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
    </ul>
  </div><br />
@endif
<div class="form-group">
	{{ Form::label('nombre', 'Nombre') }}
	{{ Form::text('nombre', null, ['class' => 'form-control', 'id' => 'nombre']) }}
</div>
<div class="form-group">
	{{ Form::label('sigla', 'Sigla') }}
    {{ Form::text('sigla', null, ['class' => 'form-control', 'id' => 'sigla']) }}
</div>
<div class="form-group">
    {{ Form::label('descripcion', 'Descripción') }}
    {{ Form::text('descripcion', null, ['class' => 'form-control', 'id' => 'descripcion']) }}
</div>
<div class="form-group">
	@if( ! empty($tblmotivo['id']))
		{{ Form::submit('Actualizar', ['class' => 'btn btn-sm btn-warning']) }}
	@else
		{{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
	@endif
	<a href="{{ url('/tblmotivo') }}" class="btn btn-sm btn-default pull-right">Cancelar</a>
</div>