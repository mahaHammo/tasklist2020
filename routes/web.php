<?php

Route::get('tasks', 'TaskController@index');
Route::get('task/{id}','TaskController@show');
Route::post('store','TaskController@store');
Route::delete('delete/{id}','TaskController@destroy');
Route::post('edit/{id}','Taskcontroller@showupdate');
Route::post('update/{id}','TaskController@Update');

