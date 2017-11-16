<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CategoryRequest;
use Laracasts\Flash\Flash;
use App\Category;

class CategoriesController extends Controller
{
    public function index(){
        $categories = Category::orderBy('id','ASC')->paginate(5);
		
		return view('admin.categories.index')->with('categories',$categories);
	}
    //CRUD USER
    public function create(){

    	return view('admin.categories.create');
    }

    public function edit($id){
    	$categories= Category::find($id);
        return view('admin.categories.edit')->with('categories',$categories);
    }

    public function destroy($id){
        
    	$category = Category::find($id);
        $category->delete();
        Flash::error("La categoria ". $category->name. " ha sido borrado de forma exitosa!");
        return redirect()->route('categories.index');
    }
    
    public function show($id){
        $category = Category::find($id);
    	return view('admin.categories.show')->with('category',$category);
    }

    public function update(CategoryRequest $request, $id){
    	$category = Category::find($id);
        $category->fill($request->all());
        $category->save();
        Flash::error("La categoria ". $category->name. " ha sido actualizada de forma exitosa!");
        return redirect()->route('categories.index');
    }

    public function store(CategoryRequest $request){
        $category = new Category($request->all());
        $category->save();
        Flash::success('Categoria '.$category->name.'ha sido creada con exito!');
        return redirect()->route('categories.index');
    	


    }
}
