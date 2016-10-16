<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Repositories\TaskRepository;

class TaskController extends Controller
{
    protected $taskRepo;
    public function __construct(TaskRepository $taskRepo)
    {
        $this->taskRepo = $taskRepo;
    }

    public function store(Request $request)
    {
        $this->taskRepo->create([
            'user_id' => \Auth::user()->id,
            'title' => $request->get('title'),
            'description' => $request->get('description')
        ]);
        return redirect()->route('home.index');
    }

    public function index()
    {

    }

    public function create()
    {
        return view('task.index');
    }

    public function show($task)
    {
        $task = $this->taskRepo->find($task);
        return view('task.show', ['task' => $task]);
    }
}
