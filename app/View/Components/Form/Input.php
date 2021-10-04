<?php

namespace App\View\Components\Form;

use Illuminate\View\Component;

class Input extends Component
{

    public $label;
    public $value;
    public $name;
    public $type;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($label,$value,$name,$type='text')
    {
        $this->label=$label;
        $this->value=$value;
        $this->name=$name;
        $this->type=$type;


    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.form.input');
    }
}
