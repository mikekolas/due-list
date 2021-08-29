<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ToDoList;
use App\Models\Task;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $toDoLists = ToDoList::where('userId', auth()->id())->get();
        $totalTasks = 0;
        $totalCompletedTasks = 0;
        foreach ($toDoLists as $toDoList) {
            $totalTasks += Task::where('listID', $toDoList->id)->count();
            $totalCompletedTasks += Task::where('listID', $toDoList->id)
                                        ->where('status', true)->count();
        }

        return view('home')->with([
            'username' => auth()->user()->name,
            'totalTasks' => $totalTasks,
            'totalCompletedTasks' => $totalCompletedTasks
        ]);
    }
}
