@extends('admin.template.dash')
	@section('title') 
	    	Editar Usuario
	@endsection
	@section('menu-lista') 
	    	<li><a href="{{url('admin/users')}}">Usuarios</a> </li>
	    	<li><a href="{{route('users.edit',$user->id)}}">Editando Usuario:  </a>{{$user->name}}</li></a>
	@endsection
	@section('dash-users') 
	    	Editar Usuario {{$user->name}}
	@endsection
	
    @section('content')

        {!! Form::open(['route' => ['users.update',$user],'method'=>'PUT'])!!}
			<div class="form-group" style="margin-left:20px;margin-right:20px;">
				{!! Form::label('name','Nombre')!!}
				{!! Form::text('name',$user->name,['class'=>'form-control','placeholder'=>'Nombre completo','required'])!!}
				
			</div>
			<div class="form-group " style="margin-left:20px;margin-right:20px;">
				{!! Form::label('email','Correo electronico')!!}
				{!! Form::email('email',$user->email,['class'=>'form-control','placeholder'=>'example@gmail.com','required'])!!}
			</div>
						
			<div class="form-group " style="margin-left:20px;margin-right:20px;">
				{!! Form::label('type','Tipo')!!}
				{!! Form::select('type',['member'=>'Miembro','admin'=>'Administrador'],$user->type,['class'=>'form-control'])!!}
			</div>

			<div class="form-group" style="margin-left:20px;margin-right:20px;">
				{!! Form::submit('Actualizar',['class'=>'btn btn-primary'])!!}
				<br><br>
			</div>

        {!! Form::close()!!}

        
    @endsection