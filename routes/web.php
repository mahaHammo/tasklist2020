<?php

Route::get('tasks', 'TaskController@index');
Route::get('task/{id}','TaskController@show');
Route::post('store','TaskController@store');
Route::delete('delete/{id}','TaskController@destroy');
Route::put('edit/{id}','Taskcontroller@showupdate');
Route::patch('update/{id}','TaskController@Update');

