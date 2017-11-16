@extends('admin.template.dash')
	@section('title') 
	    	Home Imagenes
	@endsection

	@section('active-images') 
	    	class="active"
	@endsection

	@section('menu-lista') 
	    	<li><a href="{{url('admin/images')}}">Imagenes</a> </li>
	@endsection
	
	@section('dash-users') 
	    	Bienvenido al panel de Imagenes

	@endsection

	@section('content')
		<div class="row">
			@foreach($images as $image)
				<div class="col-md-4">
					<div class="panel panel-info">
						<div class="panel-body thumbnail">
							<img  src="/images/articles/{{ $image->name }}" class="img-responsive">
						</div>
						<div class="panel-footer">
							{{ $image->article->title }}<br>
							<a href="{{route('articles.show',$image->article->id)}}" class="btn btn-info"><span class="glyphicon glyphicon-eye-open"></span>&nbsp;Ver </a>
						</div>
					</div>
				</div>
			@endforeach
		</div>
		{{ $images->links() }}
	@endsection