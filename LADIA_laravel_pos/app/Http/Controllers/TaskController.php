<?php

namespace App\Http\Controllers;

use App\Models\Task;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::orderBy('task_date')->orderBy('id')->get();
        $todayTasks = $tasks->where('task_date', today()->toDateString());
        return view('tasks.index', compact('tasks', 'todayTasks'));
    }
}
