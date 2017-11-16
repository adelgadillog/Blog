@extends('admin.template.dash')
	@section('title') 
	    	Home Categorias
	@endsection

	@section('active-categories') 
	    	class="active"
	@endsection

	@section('menu-lista') 
	    	<li><a href="{{url('admin/categories')}}">Categorias</a> </li>
	@endsection
	
	@section('dash-users') 
	    	Bienvenido al panel de categorias
	@endsection

	@section('content')
		<table class="table table-striped">
			<thead>
				<th>#</th>
				<th>ID</th>
				<th>Nombre</th>
				<th>Accion</th>
			</thead>
			<tbody>
				<?php $i=1; ?>
				@foreach($categories as $category)
					<tr>
						
						<td>{{$i++}}</td>
						<td>{{$category->id}}</td>
						<td><a href="{{route('categories.show',$category->id)}}">{{$category->name}}</a></td>

						
						<td class="in-line">
						<a href="{{route('categories.show',$category->id)}}" class="btn btn-info"><span class="glyphicon glyphicon-eye-open"></span> </a>
						<a href="{{route('categories.edit',$category->id)}}" class="btn btn-warning"><span class="glyphicon glyphicon-pencil"></span> </a>
						
						
						
						<a href="{{route('categories.destroy',$category->id)}}" onclick="return confirm('¿Seguro que desea eliminar la categoria?')"class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></a>
						</td>


					</tr>
				@endforeach

			</tbody>
		</table>
		{{$categories->links()}}
		<br>
		<a href="{{route('categories.create')}}" class="btn btn-info"><span class="glyphicon glyphicon-pencil"></span> &nbsp;Crear Categoria</a>
	@endsection