@extends('admin.template.dash')
	@section('title') 
	    	Ver aticulo
	@endsection

	@section('active-articles') 
	    	class="active"
	@endsection

	@section('menu-lista') 
	    	<li><a href="{{url('admin/articles')}}">Articulos</a> </li>
	    	<li><a href="{{route('articles.show',$article->id)}}">Ver Articulo {{$article->title}}</a></li></a>
	@endsection
	
	@section('dash-users') 
	    	Ver articulo {{$article->title}}

	@endsection

	@section('content')
	<div class="container">
		<h2>{{$article->title}}</h2>
		<b>Creado por:</b> {{$article->user->name}}&nbsp; <br>
		<b>Categoria:</b> {{$article->category->name}}<br>
		<b>Etiquetas:</b> 
			@foreach($article->tags as $tag)
				{{$tag->name}}&nbsp;
			@endforeach
		<br><br>
		<div class="row">
			
			<div class="col-md-8"><hr>
				{!!$article->content!!}
			</div>
			<div class="col-md-3">
					<div class="panel panel-info">
						<div class="panel-body thumbnail">
							<img  src="/images/articles/{{ $image[0] }}" class="img-responsive">
						</div>
						
					</div>
			</div>
			
		</div>
		
	</div>
	@endsection