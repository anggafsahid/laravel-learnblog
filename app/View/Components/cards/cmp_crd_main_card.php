<?php

namespace App\View\Components\cards;

use Illuminate\View\Component;

class cmp_crd_main_card extends Component
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
        return view('components.cards.cmp_crd_main_card');
    }
}
