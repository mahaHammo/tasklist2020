<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Document</title>
        </head>
        <body>
        @foreach($tasks as $task)
        <h3>{{$task->name}}</h3>
        @endforeach
    
    </body>
</html>
