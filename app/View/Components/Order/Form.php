<?php

namespace App\View\Components\Order;

use Illuminate\View\Component;

class Form extends Component
{
    public $customer;
    public $route;
    public $method;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($customer=null)
    {
        $this->customer=$customer;
        $this->route = route('customer.storeOrder',['customer'=>$customer]);
        $this->method = 'POST';
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.order.form');
    }
}
