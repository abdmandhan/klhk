<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Input extends Component
{
    public $label, $name, $type, $value;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($label, $name, $type, $value = null)
    {
        $this->label    = $label;
        $this->name     = $name;
        $this->type     = $type;
        $this->value    = $value;
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
        return view('components.input');
    }
}
