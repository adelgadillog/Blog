@extends('admin.template.dash')
	@section('title') 
	    	Home Etiquetas
	@endsection

	@section('active-tags') 
	    	class="active"
	@endsection

	@section('menu-lista') 
	    	<li><a href="{{url('admin/tags')}}">Etiquetas</a> </li>
	@endsection
	
	@section('dash-users') 
	    	Bienvenido al panel de etiquetas
	@endsection

	@section('content')
	<!--Buscador de tags-->
		{!! Form::open(['route'=>'tags.index','method'=>'GET','class'=>'navbar-form pull-right'])!!}
			<div class="form-group">
				<div class="input-group">
					{!! Form::text('name',null,['class'=>'form-control','placeholder' =>'Buscar Etiqueta...','aria-describedby'=>'search'])!!}
					<span class="input-group-btn">
				        <button type="submit" class="btn btn-default" type="button"><span class="glyphicon glyphicon-search"></span></button>
				     </span>
				</div>
				


			</div>
		{!! Form::close()!!}
	<!-- fin del buscador-->
		<table class="table table-striped">
			<thead>
				<th>#</th>
				<th>ID</th>
				<th>Nombre</th>
				<th>Accion</th>
			</thead>
			<tbody>
				<?php $i=1; ?>
				@foreach($tags as $tag)
					<tr>
						
						<td>{{$i++}}</td>
						<td>{{$tag->id}}</td>
						<td><a href="{{route('tags.show',$tag->id)}}">{{$tag->name}}</a></td>

						
						<td class="in-line">
						<a href="{{route('tags.show',$tag->id)}}" class="btn btn-info"><span class="glyphicon glyphicon-eye-open"></span> </a>
						<a href="{{route('tags.edit',$tag->id)}}" class="btn btn-warning"><span class="glyphicon glyphicon-pencil"></span> </a>
						
						
						
						<a href="{{route('tags.destroy',$tag->id)}}" onclick="return confirm('¿Seguro que desea eliminar la categoria?')"class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></a>
						</td>


					</tr>
				@endforeach

			</tbody>
		</table>
		{{$tags->links()}}
		<br>
		<a href="{{route('tags.create')}}" class="btn btn-info"><span class="glyphicon glyphicon-pencil"></span> &nbsp;Crear Etiqueta</a>
	@endsection