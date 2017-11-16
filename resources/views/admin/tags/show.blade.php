@extends('admin.template.dash')
	@section('title') 
	    	Ver Etiquetas
      @endsection
	@section('menu-lista') 
	    	<li><a href="{{url('admin/tags')}}">Etiquetas</a> </li>
	    	<li><a href="{{route('tags.show',$tag->id)}}">Ver Etiqueta {{$tag->name}}</a></li></a>
	@endsection
	@section('dash-users') 
	    	Ver etiquieta {{$tag->name}}
	@endsection

	@section('content')
		


       <table class="table table-striped">
       	<thead>
       		<th>ID</th>
       		<th>Nombre</th>
       	</thead>
       	<tbody>
       		<tr>
       			<td>{{$tag->id}}</td>
       			<td>{{$tag->name}}</td>
                        <td class="in-line">
                                   
                              <a href="{{route('tags.edit',$tag->id)}}" class="btn btn-warning"><span class="glyphicon glyphicon-pencil"></span> </a>
                                    
                              <a href="{{route('tags.destroy',$tag->id)}}" onclick="return confirm('¿Seguro que desea eliminar la etiqueta?')" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></a>
                        </td>
       		</tr>
       			
       		
       	</tbody>	

       </table>

        
    @endsection