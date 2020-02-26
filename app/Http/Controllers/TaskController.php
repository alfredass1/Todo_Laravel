<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Events\Validated;
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
            'status' => 'required',
            'percent' => 'required',

        ]);

        $task = Task::create([
            'tema' => request('subject'), //name
            'prioritetas' => request('priority'),
            'statusas' => request('status'),
            'procentai' => request('percent'),
            'userID' => Auth::id()


        ]);

        return redirect('lentele');
    }

    public function ShowTable()
    {
        $tasks = Task::all();
        return view('todo.pages.lentele', compact('tasks'));
    }

    public function deleteTask(Task $task)
    {
        if(Gate::allows('delete', $task)) {
            $task->delete();
            return redirect('lentele');

        } return view('todo.pages.error');
    }

    public function editTask(Task $task)
    {

        if(Gate::allows('edit', $task)) {

            return view('todo.pages.redaguoti',compact('task'));

        } return view('todo.pages.error');


        return view('todo.pages.redaguoti',compact('task'));

    }

    public function edit_task(Request $request, Task $task){

        $validateData = $request->validate([
            'subject' => 'required',
            'priority' => 'required',
            'status' => 'required',
            'percent' => 'required',

        ]);

        Task::where('id', $task->id)->update([

            'tema' => request('subject'), //name
            'prioritetas' => request('priority'),
            'statusas' => request('status'),
            'procentai' => request('percent'),

        ]);
        return redirect('lentele');
    }

}
