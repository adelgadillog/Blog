@extends('admin.template.dash')
	@section('title') 
	    	Home Users
	@endsection

	@section('active-user') 
	    	class="active"
	@endsection

	@section('menu-lista') 
	    	<li><a href="{{url('admin/users')}}">Usuarios</a> </li>
	@endsection
	
	@section('dash-users') 
	    	Bienvenido al panel de usuarios
	@endsection

	@section('content')
		<table class="table table-striped">
			<thead>
				<th>#</th>
				<th>ID</th>
				<th>Nombre</th>
				<th>Tipo</th>
				<th>Accion</th>
			</thead>
			<tbody>
				<?php $i=1; ?>
				@foreach($users as $user)
					<tr>
						
						<td>{{$i++}}</td>
						<td>{{$user->id}}</td>
						<td><a href="{{route('users.show',$user->id)}}">{{$user->name}}</a></td>
						<td>{{$user->email}}</td>
						<td>
						@if($user->type =="admin")
							<span class="label label-warning">Administrador</span>
				
						@else
							<span class="label label-success">Miembro</span>
						@endif
						
						</td>
						<td class="in-line">
						<a href="{{route('users.show',$user->id)}}" class="btn btn-info"><span class="glyphicon glyphicon-eye-open"></span> </a>
						<a href="{{route('users.edit',$user->id)}}" class="btn btn-warning"><span class="glyphicon glyphicon-pencil"></span> </a>
						<!--{{ Form::open(['route' => ['users.destroy', $user->id], 'method' => 'delete']) }}
						<button class="btn btn-danger" type="submit"><span class="glyphicon glyphicon-trash"></span></a>
						</td></button>
						{{ Form::close() }} -->
						
						<a href="{{route('users.destroy',$user->id)}}" onclick="return confirm('¿Seguro que desea eliminar al usuario?')"class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></a>
						</td>


					</tr>
				@endforeach
		
			</tbody>
		</table>
		{{ $users->links() }}
		<br>
		<a href="{{route('users.create')}}" class="btn btn-info"><span class="glyphicon glyphicon-pencil"></span> &nbsp;Crear usuario</a>
	@endsection