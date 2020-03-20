<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
    @foreach($tasks as $task)
        <li><a href="/task/{{$task->id}}">{{$task->name}}</a> </li>
    
        @endforeach
    
    </ul>

</body>
</html>
<?php 
Route::get('/',function(){
    return view('welcome');
});
Route::get('tasks',function(){
    $tasks = DB::table('tasks')->get();
    //return $tasks;
    return view('index', compact('tasks'));
});