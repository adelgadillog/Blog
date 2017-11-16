<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/*TIPOS DE RUTAS GET, POST , PUT ,DELET, RESOURCE*/


//Rutas del front end
Route::get('/',['as'=>'front.index',
				'uses'=>'FrontController@index'
]);

Route::get('categories/{name}',[
			'uses'=>'FrontController@searchCategory',
			'as' => 'front.search.category'
]);
Route::get('tags/{name}',[
			'uses'=>'FrontController@searchTag',
			'as' => 'front.search.tag'
]);

Route::get('articles/{id}',[
		'uses'=>'FrontController@viewArticle',
		'as' => 'front.view.article'
]);
//Rutas del pnale de administracion
Route::get('/admin', function () {
    return view('admin/template/welcome');
});

Route::group(['prefix'=>'admin'],function(){

	Route::resource('users','UsersController');
	Route::get('users/{id}/destroy',['uses'=>'UsersController@destroy','as'=>'users.destroy']);
	Route::get('users/{id}/edit',['uses'=>'UsersController@edit','as'=>'users.edit']);

	Route::resource('categories','CategoriesController');
	Route::get('categories/{id}/destroy',['uses'=>'CategoriesController@destroy','as'=>'categories.destroy']);
	Route::get('categories/{id}/edit',['uses'=>'CategoriesController@edit','as'=>'categories.edit']);

	Route::resource('tags','TagsController');
	Route::get('tags/{id}/destroy',['uses'=>'TagsController@destroy','as'=>'tags.destroy']);
	Route::get('tags/{id}/edit',['uses'=>'TagsController@edit','as'=>'tags.edit']);
	
	Route::resource('articles','ArticlesController');
	Route::get('articles/{id}/destroy',['uses'=>'ArticlesController@destroy','as'=>'articles.destroy']);
	Route::get('images',['uses'=>'ImagesController@index',
						'as'=>'admin.images.index']);
	
});
//localhost:8000/articles/view ->> Grupo de rutas con prefijo


Auth::routes();

Route::get('/home', 'HomeController@index')->name('admin');




