<?php

namespace App\Http\Controllers;

use App\Repositories\Criteries\TaskOrderBy;
use App\Repositories\TaskRepository;
use View;


class HomeController extends Controller
{
    protected $taskRepo;

    public function __construct(TaskRepository $taskRepo)
    {
        $this->middleware('auth');
        $this->taskRepo = $taskRepo;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tasks = $this->taskRepo->pushCriteria(new TaskOrderBy())->paginate(2);
        if (View::exists('task.task')) {
//            return view('task.task', ['tasks' => $tasks]);
            return view('task.task')->with(['tasks' => $tasks]);
        } else{
            echo '<h1 style="color: red; text-align: center;  ">no exist this page</h1>';
        }
    }
}
