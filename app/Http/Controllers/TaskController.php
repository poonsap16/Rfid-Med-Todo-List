<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class TaskController extends Controller
{
    public function storeTask(Request $request){

        if ($request->filled('task')) {
          //$task = $request->input('task');
          //return $task;

          $task = $request->all();
          Task::create();
        }

        return redirect('/rfid-todo-list');
        //return view('rfid-todo-list');
    }
}
