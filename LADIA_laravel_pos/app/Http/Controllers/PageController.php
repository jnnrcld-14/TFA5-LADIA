<?php

namespace App\Http\Controllers;

use App\Models\Task;

class PageController extends Controller
{
    public function home() {
        $todayTasks = Task::whereDate('task_date', today())->orderBy('status')->orderBy('title')->get();
        return view('pages.home', compact('todayTasks'));
    }
    public function about() { return view('pages.about'); }
}
