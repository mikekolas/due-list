<?php

namespace App\View\Composers;

use Illuminate\View\View;
use App\Models\ToDoList;

class SidebarComposer 
{
    /**
     * Bind data to the sidebar view.
     *
     * @param \Illuminate\View\View $view
     * @return void
     */
    public function compose(View $view) {
        $lists = ToDoList::where('userID', auth()->id())->get();
        $view->with('lists', $lists);
    }
};