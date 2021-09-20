<?php

namespace App\View\Components\Buttons;

use App\Traits\Model;
use Illuminate\View\Component;

class Show extends Component
{
    use Model;

    public $item;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($item)
    {
        $this->item=$item;
    }

    public function route()
    {
        $name = $this->modelName($this->item);
        return route($name.'.show',[$name=>$this->item]);
    }
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.buttons.show');
    }
}
