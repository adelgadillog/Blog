<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\TagRequest;
use Laracasts\Flash\Flash;
use App\Tag;

class TagsController extends Controller
{
    public function index(Request $request){
        
       $tags = Tag::search($request->name)->orderBy('id','ASC')->paginate(5);
		//$tags = Tag::paginate(5);
		return view('admin.tags.index')->with('tags',$tags);
	}
    //CRUD USER
    public function create(){

    	return view('admin.tags.create');
    }

    public function edit($id){
    	$tags= Tag::find($id);
        return view('admin.tags.edit')->with('tags',$tags);
    }

    public function destroy($id){
        
    	$tag = Tag::find($id);
        $tag->delete();
        Flash::error("La etiqueta ". $tag->name. " ha sido borrado de forma exitosa!");
        return redirect()->route('tags.index');
    }
    
    public function show($id){
        $tag = Tag::find($id);
    	return view('admin.tags.show')->with('tag',$tag);
    }

    public function update(TagRequest $request, $id){
    	$tag = Tag::find($id);
        $tag->fill($request->all());
        $tag->save();
        Flash::error("La Etiqueta ". $tag->name. " ha sido actualizada de forma exitosa!");
        return redirect()->route('tags.index');
    }

    public function store(TagRequest $request){
        $tag = new Tag($request->all());
        $tag->save();
        Flash::success('La Etiqueta '.$tag->name.'ha sido creada con exito!');
        return redirect()->route('tags.index');
    	


    }
}
