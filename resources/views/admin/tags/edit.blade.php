@extends('admin.template.dash')
	@section('title') 
	    	Editar Etiquetas
	@endsection
	@section('menu-lista') 
	    	<li><a href="{{url('admin/tags')}}">Etiquetas</a> </li>
	    	<li><a href="{{route('tags.edit',$tags->id)}}">Editar Etiquetas:  </a>{{$tags->name}}</li></a>
	@endsection
	@section('dash-users') 
	    	Editar Categoria {{$tags->name}}
	@endsection
	
    @section('content')

        {!! Form::open(['route' => ['tags.update',$tags],'method'=>'PUT'])!!}
			<div class="form-group" style="margin-left:20px;margin-right:20px;">
				{!! Form::label('name','Nombre')!!}
				{!! Form::text('name',$tags->name,['class'=>'form-control','placeholder'=>'Nombre de la etiqueta','required'])!!}
				
			</div>
			
			<div class="form-group" style="margin-left:20px;margin-right:20px;">
				{!! Form::submit('Actualizar',['class'=>'btn btn-primary'])!!}
				<br><br>
			</div>

        {!! Form::close()!!}

        
    @endsection