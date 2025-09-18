<?php
namespace Simonmorgan\FieldBuilder\Components;

use Illuminate\View\Component;

class Input extends Component
{
    public $label;

    public function __construct($label = null)
    {
        $this->label = $label;
    }

    public function render()
    {
        return view('getfield::components.input');
    }
}
