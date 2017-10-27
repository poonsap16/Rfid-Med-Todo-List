<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class TaskController extends Controller
{
    public function storeTask(Request $request){

        if ($request->filled('note')) {
          $task = $request->all();
          Task::create($task);
        }
        $tasks = Task::all();
        return back();
    }

    public function taskList($project){
        $tasks = Task::all()->where('project',$project);
          return view('rfid-todo-list', compact('tasks','project'));
    }

    public function updateTask(Request $request)
    {
        $task = Task::findOrFail($request->id);
        $task->status = 1;
        $task->update();
        return back();
    }

}
