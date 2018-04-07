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

Route::get('/', 'PagesController@index');
#controller functions should be in controllers 
#rather than as callbacks

Route::get('/hello', function(){
    return '<h1>Hello!!!!</h1>';
});

Route::get('/about', function(){
    return view('pages.about'); //can also use pages/about
});

Route::get('/users/{id}/{name}', function($id, $name){
    return 'This is user '.$id.' with name of '.$name;
}); 