<?php

namespace App\View\Components\templates;

use Illuminate\View\Component;

class cmp_frw_bootstrap extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.templates.cmp_frw_bootstrap');
    }
}
