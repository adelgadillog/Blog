@extends('admin.template.dash')
	@section('title') 
	    	Crear Usuario
	@endsection
	@section('menu-lista') 
	    	<li><a href="{{url('admin/users')}}">Usuarios</a> </li>
	    	<li><a href="{{url('admin/users/create')}}">Crear Usuario </a></li></a>
	@endsection
	@section('dash-users') 
	    	Crear Usuario
	@endsection
	
    @section('content')
		
        {!! Form::open(['route' => 'users.store','method'=>'POST'])!!}
			<div class="form-group" style="margin-left:20px;margin-right:20px;">
				{!! Form::label('name','Nombre')!!}
				{!! Form::text('name',null,['class'=>'form-control','placeholder'=>'Nombre completo','required'])!!}
				
			</div>
			<div class="form-group " style="margin-left:20px;margin-right:20px;">
				{!! Form::label('email','Correo electronico')!!}
				{!! Form::email('email',null,['class'=>'form-control','placeholder'=>'example@gmail.com','required'])!!}
			</div>
			<div class="form-group " style="margin-left:20px;margin-right:20px;">
				{!! Form::label('password','Contraseña')!!}
				{!! Form::password('password',['class'=>'form-control','placeholder'=>'*********','required'])!!}
			</div>
			
			<div class="form-group " style="margin-left:20px;margin-right:20px;">
				{!! Form::label('type','Tipo')!!}
				{!! Form::select('type',['member'=>'Miembro','admin'=>'Administrador'],null,['class'=>'form-control','placeholder'=>'Seleccionar una opcion...','required'])!!}
			</div>
			<div class="form-group" style="margin-left:20px;margin-right:20px;">
				{!! Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
				<br><br>
			</div>

        {!! Form::close()!!}

        
    @endsection