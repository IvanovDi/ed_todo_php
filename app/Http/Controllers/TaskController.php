<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;
use App\Http\Requests;

class TaskController extends Controller
{
    public function store(Request $request)
    {
        Task::create([
            'user_id' => \Auth::user()->id,
            'title' => $request->get('title'),
            'description' => $request->get('description')
        ]);
        return redirect()->back();
    }

    public function index()
    {
        $tasks = Task::all();
        return view('task.task', ['tasks' => $tasks]);
    }

    public function show($id)
    {

    }
}
