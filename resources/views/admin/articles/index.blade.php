@extends('admin.template.dash')
	@section('title') 
	    	Home Articulos
	@endsection

	@section('active-articles') 
	    	class="active"
	@endsection
	
	@section('menu-lista') 
	    	<li><a href="{{url('admin/articles')}}">Articulos</a> </li>
	@endsection
	
	@section('dash-users') 
	    	Bienvenido al panel de Articulos

	@endsection

	@section('content')
	<!--Buscador de articulos-->
		{!! Form::open(['route'=>'articles.index','method'=>'GET','class'=>'navbar-form pull-right'])!!}
			<div class="form-group">
				<div class="input-group">
					{!! Form::text('title',null,['class'=>'form-control','placeholder' =>'Buscar Articulo...','aria-describedby'=>'search'])!!}
					<span class="input-group-btn">
				        <button type="submti" class="btn btn-default" type="button"><span class="glyphicon glyphicon-search"></span></button>
				     </span>
				</div>
				


			</div>
		{!! Form::close()!!}
	<!-- fin del buscador-->
		<table class="table table-striped">
			<thead>
				<th>ID</th>
				<th>Titulo</th>
				<th>Categoria</th>
				<th>Usuarios</th>
				<th>Accion</th>
			</thead>
			<tbody>
				@foreach($articles as $article)
					<tr>
						<td>{{ $article-> id}}</td>
						<td>{{ $article-> title}}</td>
						<td>{{ $article-> category->name}}</td>
						<td>{{ $article-> user->name}}</td>
						<td class="in-line">
						<a href="{{route('articles.show',$article->id)}}" class="btn btn-info"><span class="glyphicon glyphicon-eye-open"></span> </a>
						<a href="{{route('articles.edit',$article->id)}}" class="btn btn-warning"><span class="glyphicon glyphicon-pencil"></span> </a>				
						
						<a href="{{route('articles.destroy',$article->id)}}" onclick="return confirm('¿Seguro que desea eliminar la categoria?')"class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></a>
						</td>
					</tr>
				@endforeach	
			</tbody>
		</table>
		{{$articles->links()}}<br>

		<a href="{{route('articles.create')}}" class="btn btn-info"><span class="glyphicon glyphicon-pencil"></span> &nbsp;Crear Articulo</a>
						
	@endsection