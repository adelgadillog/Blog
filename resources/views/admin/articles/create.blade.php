@extends('admin.template.dash')
	@section('title') 
	    	Crear Articulo
	 @endsection
	@section('menu-lista') 
	    	<li><a href="{{url('admin/articles')}}">Articulos</a> </li>
	    	<li><a href="{{url('admin/articles/create')}}">Crear Articulo</a></li></a>
	@endsection
	@section('dash-users') 
	    	Crear Articulo
	@endsection

	@section('content')
		<div class="container-fluid">
			{!! Form::open(['route'=>'articles.store','method'=>'POST','files'=>true]) !!}
			<div class="form-group">
				{!! Form::label('title','Titulo') !!}
				{!! Form::text('title',null,['class'=>'form-control','placeholder'=>'Titulo del articulo...','required']) !!}
			</div>
			<div class="form-group">
				{!! Form::label('category_id','Categoria') !!}
				{!! Form::select('category_id',$categories,null,['class'=>'form-control select-category','placeholder'=>'Seleccione una opcion']) !!}
			</div>
			<div class="form-group">
				{!! Form::label('content','Contenido') !!}
				{!! Form::textarea('content',null,['class'=>'form-control textarea-content','placeholder'=>'Contenido del articulo']) !!}
			</div>
			<div class="form-group">
				{!! Form::label('image','Imagen') !!}
				{!! Form::file('image',['class'=>'image-view']) !!}
			</div>
			<div class="form-group">
				{!! Form::label('tags','Etiquetas') !!}
				{!! Form::select('tags[]',$tags,null,['class'=>'form-control select-tag','multiple']) !!}
			</div>

			<div class="form-group">
				{!! Form::submit('Agregar articulo',['class'=>'btn btn-primary']) !!}
			</div>
			{!! Form::close() !!}
		</div>
		

        
    @endsection
 @section('js')
    <script>
    	$('.select-tag').chosen({
    		placeholder_text_multiple: 'Seleccione un maximo de 3 etiquetas',
    		max_selected_options: 3,
    		no_results_text:'No se encontraron estos tags'
    	});
    	$('.select-category').chosen({
    		placeholder_text_multiple: 'Seleccione una Categoria',
    	});

    	
    	$('.textarea-content').trumbowyg();
    	$(".image-view").fileinput({
			showUpload: false,
	        maxFileCount: 10,
	        mainClass: "input-group-lg"
			});
    </script>
 @endsection