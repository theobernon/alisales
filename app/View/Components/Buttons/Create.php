<?php

namespace App\View\Components\Buttons;

use App\Traits\Model;
use Illuminate\View\Component;

class Create extends Component
{
    public $route;

    use Model;


    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($route)
    {
        $this->route = $route;
    }


    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.buttons.create');
    }
}
