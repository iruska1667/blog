<?php

Auth::routes();

Route::get('/', function () {
    return redirect('posts');
});

Route::get('/home', function () {
    return view('home');
});

Route::resource('/posts', 'PostController');

Route::post('/posts/{post}/coments', 'ComentController@store');
Route::delete('coments/{coment}', 'ComentController@destroy');
Route::get('coments/{coment}/edit', 'ComentController@edit');
Route::patch('coments/{coment}', 'ComentController@update');


Route::name('cost')->group(function ()
{
    Route::get('/cost', 'CostController@index')->name('.index');
    Route::post('/cost', 'CostController@store')->name('.store');
    Route::get('/cost/show', 'CostController@show')->name('.show.per.day');
    Route::get('/cost/showpertime', 'CostController@showPerTime')->name('.show.per.time');
    Route::get('/cost/{cost}/edit', 'CostController@edit')->name('.edit');
    Route::patch('/cost/{cost}', 'CostController@update')->name('.update');
    Route::delete('/cost/{cost}', 'CostController@destroy')->name('.destroy');
});

Route::name('category')->group(function ()
{
    Route::get('/category', 'CostCategoryController@index')->name('.index');
    Route::post('/category/store', 'CostCategoryController@store')->name('.store');
    Route::get('/category/{costCategory}', 'CostCategoryController@show')->name('.show');
    Route::get('/category/{costCategory}/edit', 'CostCategoryController@edit')->name('.edit');
    Route::patch('/category/{costCategory}', 'CostCategoryController@update')->name('.update');
});


Route::get('/exit', function() {
    Auth::logout();
    return redirect('/posts');
});

