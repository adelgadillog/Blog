<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Tag;
use App\Image;
use App\Article;
use Illuminate\Support\Facades\Auth;
use Laracasts\Flash\Flash;
use App\Http\Requests\ArticleRequest;
class ArticlesController extends Controller
{
     public function index(Request $request){
        $articles = Article::Search($request->title)->orderBy('id','DESC')->paginate(5);
        $articles->each(function($articles){
                        $articles -> category;
                        $articles -> user;
        });
       
        return view('admin.articles.index')->with('articles',$articles);
	}
    //CRUD USER
    public function create(){
    	$categories = Category::orderBy('name','ASC')->pluck('name','id');
    	
    	$tags = Tag::orderBy('name','ASC')->pluck('name','id');
    	return view('admin.articles.create')
    		->with('categories',$categories)
    		->with('tags',$tags);
    }

    public function edit($id){
        $article = Article::find($id);
        $article->category;
        $categories = Category::orderBy('name','DESC')->pluck('name','id');
        $tags = Tag::orderBy('name','DESC')->pluck('name','id');
        $mytags = $article->tags->pluck('id')->ToArray();
       
    	return view('admin.articles.edit')->with('categories',$categories)->with('article',$article)->with('tags',$tags)->with('mytags',$mytags);
    }

    public function destroy($id){
        $article = Article::find($id);
        $article->delete();
        Flash::error('Se ha borrado el articulo: <b>'.$article->title.' </b>de forma extiosa');
    	return redirect()->route('articles.index');
    }
    
    public function show($id){
        $article = Article::find($id);
        $article->each(function($article){
                        $article -> category;
                        $article -> user;
                        $article -> tags;
                        $article -> images;
        });
        $myimagesname = $article->images->pluck('name')->ToArray();
       //dd($article->tags);
        return view('admin.articles.show')->with('article',$article)->with('image',$myimagesname);
    }

    public function update(Request $request, $id){
    	$article = Article::find($id);
        $article->fill($request->all());
        $article->save();
        $article->tags()->sync($request->tags);
        Flash::success('Se ha editado el articulo '.$article->title. ' de forma extiosa');
        return redirect()->route('articles.index');
    }

    public function store(ArticleRequest $request){

    	//manipulacion de imagenes
    	if($request->file('image')){

    		$file = $request->file('image');
	    	$name='imageBlog_'.time().'.'.$file->getClientOriginalExtension();
	    	$path = public_path().'/images/articles';
	    	$file->move($path,$name);
    	}
    	
    	$article = new Article($request->all());
    	$article->user_id = \Auth::user()->id;
    	$article->save();

    	$image = new Image();
    	$image->name = $name;
    	$image->article()->associate($article);
    	$image->save();

    	$article->tags()->sync($request->tags);

    	Flash::success('Se ha creado el articulo: '.$article->title.' de forma correcta!');
    	return redirect()->route('articles.index');
    	
    }
        
}
