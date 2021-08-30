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
        $toDoLists = ToDoList::where('userID', auth()->id())->get();
        // Find total lists that the user has
        $totalLists = 0;
        $totalLists = count($toDoLists);            
        //Find total tasks and total completed tasks the user has
        $totalTasks = 0;
        $totalCompletedTasks = 0;
        foreach ($toDoLists as $toDoList) {
            $totalTasks += Task::where('listID', $toDoList->id)->count();
            $totalCompletedTasks += Task::where('listID', $toDoList->id)
                                        ->where('status', true)->count();
        }
        // Avoid division with 0 problem
        $tasksPercentage = 0;
        if ($totalTasks != 0) {
            $tasksPercentage = round($totalCompletedTasks / $totalTasks, 2) * 100;
        }
        

        return view('home')->with([
            'username' => auth()->user()->name,
            'totalTasks' => $totalTasks,
            'totalCompletedTasks' => $totalCompletedTasks,
            'tasksPercentage' => $tasksPercentage,
            'totalLists' => $totalLists
        ]);
    }
}
