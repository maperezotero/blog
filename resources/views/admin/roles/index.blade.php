@extends('adminlte::page')

@section('title', 'SuperBit')

@section('content_header')
	<a class="btn btn-secondary btn-sm float-right" href="{{ route('admin.roles.create') }}">Nuevo rol</a>

    <h1>Lista de roles</h1>
@stop

@section('content')

	@if (session('info'))
		<div class="alert alert-success">
			{{ session('info') }}
		</div>
	@endif

    <div class="card">
		<table class="table table-striped">
			<thead>
				<tr>
					<td>ID</td>
					<td>Rol</td>
					<td colspan="2"></td>
				</tr>
			</thead>

			<tbody>
				@foreach ($roles as $role)
					<tr>
						<td>{{ $role->id }}</td>
						<td>{{ $role->name }}</td>
						<td width="10px">
							<a class="btn btn-primary btn-sm" href="{{ route('admin.roles.edit', $role) }}">Editar</a>
						</td>
						<td width="10px">
							<form action="{{ route('admin.roles.destroy', $role) }}" method="POST">
								@csrf
								@method('delete')

								<button class="btn btn-danger btn-sm" type="submit">Eliminar</button>
							</form>
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop