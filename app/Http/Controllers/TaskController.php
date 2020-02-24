<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
use File;
use Gate;
use Illuminate\Support\Facades\Auth;


class TaskController extends Controller
{
    public function addTask()
    {
        $tasks = Task::all();
        return view('todo.pages.prideti', compact('tasks'));
    }

    public function storeTask(Request $request)
    {

        $validateData = $request->validate([
            'subject' => 'required',
            'priority' => 'required',
            'data' => 'required',
            'status' => 'required',
            'edited' => 'required',
        ]);

        $task = Task::create([
            'tema' => request('subject'), //name
            'prioritetas' => request('priority'),
            'data' => request('data'),
            'statusas' => request('status'),
            'redaguota' => request('edited'),

        ]);

        return redirect('/home');
    }

    public function controlTask()
    {
        $tasks = Task::all();
        return view('home', compact('tasks'));
    }


}
