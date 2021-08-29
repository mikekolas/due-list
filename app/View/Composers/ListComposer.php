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
        $tasks = Task::where('listID', $view->toDoList->id)->get();
        // $completedTasks = Task::where()->count();
        $tasksCompleted = 0;
        $tasksOverdue = 0;
        foreach ($tasks as $task) {
            if($task->status) $tasksCompleted++;
            if(today()->format('Y-m-d') > $task->dueDate && $task->dueDate != NULL) $tasksOverdue++;
        }

        $view->with([
            'tasks' => $tasks,
            'tasksCompleted' => $tasksCompleted,
            'tasksOverdue' => $tasksOverdue
        ]);
    }
};