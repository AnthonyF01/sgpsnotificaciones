<div class="form-group">
	{{ Form::label('name', 'Nombre') }}
	{{ Form::text('name', null, ['class' => 'form-control', 'id' => 'name']) }}
</div>
<hr>
<h3>Lista de roles</h3>
<div class="form-group">
	<ul class="list-unstyled">
		@foreach($roles as $role)
	    <li>
	        <label>
	        <!-- 'roles[]' => es un array que guardara multiples valores del checkbox -->
	        <!-- 'null' => no tendra ningun rol marcado por defecto -->
	        {{ Form::checkbox('roles[]', $role->id, null) }}
	        {{ $role->name }}
	        <em>({{ $role->description ?: 'N/A' }})</em>
	        </label>
	    </li>
	    @endforeach
    </ul>
</div>
<div class="form-group">
	@if( ! empty($user['id']))
		{{ Form::submit('Actualizar', ['class' => 'btn btn-sm btn-warning']) }}
	@else
		{{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
	@endif
	<a href="{{ url('/users') }}" class="btn btn-sm btn-default pull-right">Cancelar</a>
</div>