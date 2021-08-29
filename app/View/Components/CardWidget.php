<?php

namespace App\View\Components;

use Illuminate\View\Component;

class CardWidget extends Component
{
    /**
     * @var string
     */
    public $title;

    /**
     * @var int
     */
    public $total;

    /**
     * @var string
     */
    public $color;

    /**
     * @var string
     */
    public $icon;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title, $total, $color, $icon)
    {
        $this->title = $title;
        $this->total = $total;
        $this->color = $color;
        $this->icon = $icon;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.card-widget');
    }
}
