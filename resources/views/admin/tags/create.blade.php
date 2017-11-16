@extends('admin.template.dash')
	@section('title') 
	    	Crear Etiquetas	
	 @endsection
	@section('menu-lista') 
	    	<li><a href="{{url('admin/tags')}}">Etiquetas</a> </li>
	    	<li><a href="{{url('admin/tags/create')}}">Crear Etiquetas</a></li></a>
	@endsection
	@section('dash-users') 
	    	Crear Etiqueta
	@endsection

	@section('content')
		


        {!! Form::open(['route' => 'tags.store','method'=>'POST'])!!}
			<div class="form-group" style="margin-left:20px;margin-right:20px;">
				{!! Form::label('name','Nombre')!!}
				{!! Form::text('name',null,['class'=>'form-control','placeholder'=>'Nombre de la etiqueta','required'])!!}
				
			</div>
			
			<div class="form-group" style="margin-left:20px;margin-right:20px;">
				{!! Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
				<br><br>
			</div>

        {!! Form::close()!!}

        
    @endsection