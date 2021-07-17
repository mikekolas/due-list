<?php

namespace App\View\Components;

use Illuminate\View\Component;

class TaskCard extends Component
{
    /**
     * @var string
     */
    public $title;

    /**
     * @var boolean
     */
    public $status;

    /**
     * @var datetime
     */
    public $dueDate;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title, $status, $dueDate = null)
    {
        $this->title = $title;
        $this->status = $status;
        $this->dueDate = $dueDate;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.task-card');
    }
}
