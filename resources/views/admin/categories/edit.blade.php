@extends('admin.template.dash')
	@section('title') 
	    	Editar Categoria
	@endsection
	@section('menu-lista') 
	    	<li><a href="{{url('admin/categories')}}">Categorias</a> </li>
	    	<li><a href="{{route('categories.edit',$categories->id)}}">Editar Categoria:  </a>{{$categories->name}}</li></a>
	@endsection
	@section('dash-users') 
	    	Editar Categoria {{$categories->name}}
	@endsection
	
    @section('content')

        {!! Form::open(['route' => ['categories.update',$categories],'method'=>'PUT'])!!}
			<div class="form-group" style="margin-left:20px;margin-right:20px;">
				{!! Form::label('name','Nombre')!!}
				{!! Form::text('name',$categories->name,['class'=>'form-control','placeholder'=>'Nombre de la categoria','required'])!!}
				
			</div>
			
			<div class="form-group" style="margin-left:20px;margin-right:20px;">
				{!! Form::submit('Actualizar',['class'=>'btn btn-primary'])!!}
				<br><br>
			</div>

        {!! Form::close()!!}

        
    @endsection