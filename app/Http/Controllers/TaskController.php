<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class TaskController extends Controller
{
    public function storeTask(Request $request){

        if ($request->filled('task_name')) {
          //$task = $request->input('task_name');
          //return $task;

          $task = $request->all();
          //return $task;
          $task['task_status'] = 0;
          Task::create($task);
        }

        return redirect('/rfid-todo-list');
        //return view('rfid-todo-list');
    }
}
