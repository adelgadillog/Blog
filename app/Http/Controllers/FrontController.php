<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Category;
use App\Tag;
use App\Image;
use Carbon\Carbon;
use \Cviebrock\EloquentSluggable\Services\SlugService;

class FrontController extends Controller
{
	public function __construct(){
		Carbon::setLocale('es');
	}
    public function index(){
        $articles = Article::orderBy('id','DESC')->paginate(9);
        $articles->each(function($articles){
                        $articles -> category;
                        //$articles -> user;
        });
        
        return view('front.index')->with('articles',$articles);
	}
    public function searchCategory($name){
       $category = Category::SearchCategory($name)->first();
       $articles = $category->articles()->paginate(9);
       $articles->each(function($articles){
                        $articles -> category;
                        //$articles -> user;
        });
       return view('front.index')->with('articles',$articles);
    }
    public function searchTag($name){
       
      $tag = Tag::SearchTag($name)->first();
      $articles = $tag->articles()->paginate(9);
      $articles->each(function($articles){
                        $articles -> category;
                        $articles -> images;
        });
      return view('front.index')->with('articles',$articles);
    }
    public function viewArticle($id){

      $article = Article::find($id);
      $article -> category;
      $article -> user;
      $article -> tags;
      $article -> images;
     
      return view('front.article')->with('article',$article);
    }

}

