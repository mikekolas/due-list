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

        // TO DO mechanism when listID is missing
        $view->with('tasks', $tasks);
    }
};