<div class="form-group">
	{{ Form::label('name', 'Nombre de la etiqueta') }}
	{{ Form::text('name', null, ['class' => 'form-control', 'id' => 'name']) }}
</div>
<div class="form-group">
	{{ Form::label('description', 'Descripción') }}
	{{ Form::textarea('description', null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
	@if( ! empty($product['id']))
		{{ Form::submit('Actualizar', ['class' => 'btn btn-sm btn-warning']) }}
	@else
		{{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
	@endif
	<a href="{{ url('/products') }}" class="btn btn-sm btn-default pull-right">Cancelar</a>
</div>