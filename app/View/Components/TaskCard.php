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
     * @var integer
     */
    public $taskID;
    
    /**
     * @var datetime
     */
    public $dueDate;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title, $status, $taskID, $dueDate = null)
    {
        $this->title = $title;
        $this->status = $status;
        $this->taskID = $taskID;
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
