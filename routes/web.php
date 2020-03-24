<?php

Route::get('tasks', 'TaskController@index');
Route::get('task/{id}','TaskController@show');
Route::post('store','TaskController@store');

