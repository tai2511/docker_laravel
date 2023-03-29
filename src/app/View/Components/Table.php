<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Table extends Component
{
    public $project;
    public $dataMessage;

    /**
     * Create a new component instance.
     *
     * @param $project
     * @param $dataMessage
     */
    public function __construct($project, $dataMessage)
    {
        $this->project = $project;
        $this->dataMessage = $dataMessage;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.table');
    }
}
