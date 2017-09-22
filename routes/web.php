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

Route::get('/list', "PostController@showListPost")->name('post.list');
Route::group(['prefix' => 'post'], function (){
    Route::get('/addForm', "PostController@showAddFormPost")->name('post.add');
    Route::post('/addForm', "PostController@added")->name('post.added');
    Route::get('{id}/edit', "PostController@showFormUpdate")->name('post.update');
    Route::post('{id}/edit', "PostController@updated")->name('post.updated');
    Route::get('{id}/delete', "PostController@showDelete")->name('post.delete');
    Route::post('{id}/delete', "PostController@deleted")->name('post.deleted');
    Route::post('/find', "PostController@search")->name('search');
});
