<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laracasts\Flash\Flash;
use App\User;
use App\Http\Requests\UserRequest;
use App\Http\Requests\UpdateUserRequest;


class UsersController extends Controller
{
    
	public function index(){
		//$users = User::orderBy('id','ASC')->get();
        $users = User::orderBy('id','ASC')->paginate(5);

		return view('admin.users.index')->with('users',$users);
	}
    //CRUD USER
    public function create(){

    	return view('admin.users.create');
    }

    public function edit($id){
    	$user= User::find($id);
    	return view('admin.users.edit')->with('user',$user);
    }

    public function destroy($id){
    	$user = User::find($id);
    	$user->delete();
    	Flash::error("El usuario ". $user->name. " ha sido borrado de forma exitosa!");
    	return redirect()->route('users.index');
    }
     public function show($id){
    	$user = User::find($id);
        return view('admin.users.show')->with('user',$user);
    }

    public function update(UpdateUserRequest $request, $id){
    	$user = User::find($id);
        $user->fill($request->all());
        $user->save();
        Flash::error("El usuario ". $user->name. " ha sido editado de forma exitosa!");
        return redirect()->route('users.index');

    }

    public function store(UserRequest $request){
        
    	$user = new User($request->all());//crea un nuevo usuario
    	$user->password = bcrypt($request->password);
    	$user->save();
    	Flash::success("Se ha registrado ".$user->name." de forma exitosa.");
    	return redirect()->route('users.index');


    }
}
