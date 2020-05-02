<?php

Route::get('tasks', 'TaskController@index');
Route::get('task/{id}','TaskController@show');
Route::post('storeToTaskController','TaskController@store')->name('store');
Route::delete('delete/{id}','TaskController@destroy');
Route::put('edit/{id}','Taskcontroller@showupdate');
Route::patch('update/{id}','TaskController@Update');

