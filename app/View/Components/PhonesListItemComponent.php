<?php

namespace App\View\Components;

use Illuminate\View\Component;

class PhonesListItemComponent extends Component
{
    public $phone;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($phone)
    {
        $this->phone = $phone;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.phones-list-item-component');
    }
}
