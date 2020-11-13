<?php

namespace App\View\Components;

use Illuminate\View\Component;

class statustoggle extends Component
{
    public $label, $name, $value;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($label, $name, $value)
    {
        $this->label = $label;
        $this->name = $name;
        $this->value = $value;
    }
    public function isChecked($value)
    {
        return $value ? true : false;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.statustoggle');
    }
}
