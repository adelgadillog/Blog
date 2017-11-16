@extends('admin.template.dash')
	@section('title') 
	    	Ver Usuario
	 @endsection
	@section('menu-lista') 
	    	<li><a href="{{url('admin/users')}}">Categorias</a> </li>
	    	<li><a href="{{route('users.show',$user->id)}}">Ver usuario {{$user->name}}</a></li></a>
	@endsection
	@section('dash-users') 
	    	Ver usuario {{$user->name}}
	@endsection

	@section('content')
		


       <table class="table table-striped">
       	<thead>
       		<th>ID</th>
       		<th>Nombre</th>
                  <th>Correo</th>
                  <th>Tipo</th>
                  <th>Accion</th>
       	</thead>
       	<tbody>
       		<tr>
       			<td>{{$user->id}}</td>
       			<td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>
                        @if($user->type =="admin")
                              <span class="label label-warning">Administrador</span>
                        
                              @else
                                    <span class="label label-success">Miembro</span>
                        @endif
                        </td>
                        <td class="in-line">
                                   
                                    <a href="{{route('users.edit',$user->id)}}" class="btn btn-warning"><span class="glyphicon glyphicon-pencil"></span> </a>
                                    <!--{{ Form::open(['route' => ['users.destroy', $user->id], 'method' => 'delete']) }}
                                    <button class="btn btn-danger" type="submit"><span class="glyphicon glyphicon-trash"></span></a>
                                    </td></button>
                                    {{ Form::close() }} -->
                                    
                                    <a href="{{route('users.destroy',$user->id)}}" onclick="return confirm('¿Seguro que desea eliminar al usuario?')"class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></a>
                        </td>
       		</tr>
       			
       		
       	</tbody>	

       </table>

        
    @endsection