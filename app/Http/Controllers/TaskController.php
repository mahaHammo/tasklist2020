<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TaskController extends Controller
{
    public function index(){
        $tasks = DB::table('tasks')->get();
         return view('tasks.index',compact('tasks'));
    }

    public function show($id){
        $task = DB::table('tasks')->find($id);
        return view('tasks.show', compact('task'));
    }

    public function store(Request $request){
        // dd($request);
        DB::table('tasks')->insert([
            'name' => $request->name,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

         return redirect()->back();

    }
    public function destroy($id){
        DB::table('tasks')->where('id','=',$id)->delete();
        return redirect()->back();
    }

    public function edit($id){
        $task = DB::table('tasks')->where('id','$id')->update(['id'=>'$id']);
        return view('task.edit', compact('task','id'));
    }

    public function update(Request $request , $id){
        $this->validate($request,[
            'id' => 'required'
        ]);
        $task= tasks::find('$id');
        $task->id=$request->get('id');
        $task->save();
        return redirect()->back();
    }
}
