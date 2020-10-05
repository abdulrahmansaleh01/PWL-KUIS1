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

/*Route::get('/', function(){
	return view('welcome');
}); */


/*----------------------KUIS 1------------------------------------*/
Route::get('/home', 'HomeController@home')->name('home');

Route::get('/blog', 'BlogController@blog') ->name('blog');

Route::get('/post/{id}', 'PostController@post');

Route::get('/gallery', 'GalleryController@gallery')->name('gallery');

//Route::get('/article/{id}', 'ArticleController@getById');



/*-----------------PERTEMUAN 4-----------------------
Route::get('/home', 'HomeController@getAll')->name('home');

Route::get('/article/{id}', 'ArticleController@getById');

/*---------------------------------------------------

/*-----------------PERTEMUAN 3-----------------------
Route::get('/home', 'HomeController@home');

Route::get('/article', 'ArticleController@article');

Route::get('/about', 'AboutController@about');

Route::get('/home2', 'HomeController@home2');

Route::get('/article2', 'ArticleController@article2');

Route::get('/about2', 'AboutController@about2');
----------------------------------------------------*/



Auth::routes();












//Route::get('/hello', function(){
//	return view('blog.hello',['name' => 'Andi']);
//});

//Route::get('/hello', 'WelcomeController@hello');



/*Route::get('/home', 'PageController@home');

Route::get('/about', 'PageController@about');

Route::get('/articles/{id}', 'PageController@articles');*/


/*Route::get('/', function() {
	return ('Selamat Datang');
}); 
Route::get('/about', 'WelcomeController@about'); 

Route::get('/articles/{id}', function($id){
	return ('Halaman artikel ini dengan id ' . $id);
}); */   

