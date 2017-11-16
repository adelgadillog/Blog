@extends('admin.template.dash')
	@section('title') 
	    	Crear Categorias	
	 @endsection
	@section('menu-lista') 
	    	<li><a href="{{url('admin/categories')}}">Categorias</a> </li>
	    	<li><a href="{{url('admin/categories/create')}}">Crear Categorias</a></li></a>
	@endsection
	@section('dash-users') 
	    	Crear Usuario
	@endsection

	@section('content')
		


        {!! Form::open(['route' => 'categories.store','method'=>'POST'])!!}
			<div class="form-group" style="margin-left:20px;margin-right:20px;">
				{!! Form::label('name','Nombre')!!}
				{!! Form::text('name',null,['class'=>'form-control','placeholder'=>'Nombre de la categoria','required'])!!}
				
			</div>
			
			<div class="form-group" style="margin-left:20px;margin-right:20px;">
				{!! Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
				<br><br>
			</div>

        {!! Form::close()!!}

        
    @endsection