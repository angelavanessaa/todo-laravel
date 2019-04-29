<?php

Route::get('/', 'TodosController@index');
Route::get('create', 'TodosController@create');
Route::post('save-todos', 'TodosController@store');
Route::get('{todo}/update', 'TodosController@update');
Route::post('{todo}/update-todo', 'TodosController@submitUpdate');
Route::get('/{todo}', 'TodosController@show');
Route::get('/{todo}/delete', 'TodosController@delete');

