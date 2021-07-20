<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Card extends Component
{
    /**
     * @var string
     */
    public $action;

    /**
     * @var object
     */
    public $object;

    /**
     * @var string
     */
    public $type;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($action, $type, $object = null)
    {
        $this->action = $action;
        $this->type = $type;
        $this->object = $object; 
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.card');
    }
}
