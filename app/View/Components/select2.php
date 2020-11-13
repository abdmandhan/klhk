<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Spatie\Permission\Models\Role;

class select2 extends Component
{
    public $label, $name, $selectData, $value;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($label, $name, $value = null)
    {
        $this->label        = $label;
        $this->name         = $name;
        $this->selectData   = Role::all();
        $this->value        = $value;
    }

    public function isSelected($value)
    {
        return $value === $this->value;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.select2');
    }
}
