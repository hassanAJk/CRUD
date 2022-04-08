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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

//Route::get('/home', 'HomeController@createroles')->name('home');
Route::get('/home', 'HomeController@index')->name('home');

Route::get('login/github', 'Auth\LoginController@redirectToProvider');
Route::get('login/github/callback', 'Auth\LoginController@handleProviderCallback');





Route::get('/books','BooksController@index')->name('books.index');
Route::post('/books','BooksController@store')->name('books.createRecord');

Route::get('/books/books','BooksController@create')->name('create.records');

Route::get('/books/{books}','BooksController@show')->name('show.records');
Route::get('/books/{art}/edit','BooksController@edit')->name('edit.records');
Route::put('/books/{books}','BooksController@update')->name('updatedRecords');
Route::delete('/books/{books}/delete','BooksController@delete')->name('Delete.Record');


Route::get('/testing',function(){$testRole = config('roles.models.role')::create([
    'name' => "Tester",
    'slug' => "tes",
    'description' => "checking the result",
    'level' => 5,
]);});

Route::get('/idOfuser',function(){//return Auth::user()->id;
$tester=config('roles.models.role')::where('name', '=', 'Tester')->first();
$user = config('roles.models.defaultUser')::find(8);


$user->attachRole($tester);
});

