@extends('admin.template.dash')
	@section('title') 
	    	Ver Categoria
	 @endsection
	@section('menu-lista') 
	    	<li><a href="{{url('admin/categories')}}">Categorias</a> </li>
	    	<li><a href="{{route('categories.show',$category->id)}}">Ver Categoria {{$category->name}}</a></li></a>
	@endsection
	@section('dash-users') 
	    	Ver categoria {{$category->name}}
	@endsection

	@section('content')
		


       <table class="table table-striped">
       	<thead>
       		<th>ID</th>
       		<th>Nombre</th>
       	</thead>
       	<tbody>
       		<tr>
       			<td>{{$category->id}}</td>
       			<td>{{$category->name}}</td>
                        <td class="in-line">
                                   
                              <a href="{{route('categories.edit',$category->id)}}" class="btn btn-warning"><span class="glyphicon glyphicon-pencil"></span> </a>
                                    
                              <a href="{{route('categories.destroy',$category->id)}}" onclick="return confirm('¿Seguro que desea eliminar la categoria?')" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></a>
                        </td>
       		</tr>
       			
       		
       	</tbody>	

       </table>

        
    @endsection