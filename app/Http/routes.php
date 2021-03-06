<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', [
		'as' => '/',
		'uses' => 'PagesController@getIndex'
]);

Route::get('about', [
		'as' => 'about',
		'uses' => 'PagesController@getAbout'
]);

Route::get('contact', [
		'as' => 'contact',
		'uses' => 'PagesController@getContact'
]);
Route::get('users/{user}', function(\App\User $user){
	return $user;
})->middleware('throttle');
Route::group(['middleware' => 'web'], function () {
	Route::resource('articles','ArticlesController');
	//Route::resource('users','UserController');
});


Route::resource('product', 'ProductController');


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});

Route::group(['middleware' => 'web'], function () {
    Route::auth();	

    Route::get('/home', 'HomeController@index');
});
