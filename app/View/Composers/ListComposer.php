<?php

namespace App\View\Composers;

use Illuminate\View\View;
use App\Models\Task;

class ListComposer 
{
    /**
     * Bind data to the sidebar view.
     *
     * @param \Illuminate\View\View $view
     * @return void
     */
    public function compose(View $view) {
        $tasks = Task::where('listID', $view->toDoList->id)->paginate(5);

        $tasksCompleted = 0;
        $tasksOverdue = 0;

        $tasksCompleted = Task::where('listID', $view->toDoList->id)
                                ->where('status', true)->count();
        $tasksOverdue = Task::where('listID', $view->toDoList->id)
                                ->whereDate('dueDate', '<', today()->format('Y-m-d'))
                                ->whereNotNull('dueDate')->count();

        $view->with([
            'tasks' => $tasks,
            'tasksCompleted' => $tasksCompleted,
            'tasksOverdue' => $tasksOverdue
        ]);
    }
};