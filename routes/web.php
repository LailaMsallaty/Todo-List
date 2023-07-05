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
Route::get('/', 'pagesController@home');
Route::get('/about', 'pagesController@about');

 /*return view('welcome')->with([
 	'tasks' => ['go to store','go to market']

    ,'foo' => 'foo' ]);

});*/


Route::get('/contact', function() {
    return view('contact');
});
/* Route::get('/about', function () {
    return view('about');
});*/
Route::get('/todos','todosControllers@index');
Route::get('/todos/{todo}','todoscontrollers@show');
Route::get('/create','todoscontrollers@create');
Route::post('/create','todoscontrollers@store');
Route::get('/todos/{todo}/edit','todoscontrollers@edit');
Route::post('/todos/{todo}','todoscontrollers@update');
Route::get('/todos/{todo}/delete','todoscontrollers@destroy');
Route::get('/todos/{todo}/complete','todoscontrollers@complete');
