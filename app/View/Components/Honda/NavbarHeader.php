<?php

namespace App\View\Components\Honda;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class NavbarHeader extends Component
{
    protected $templateView = "hondaView";

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        if (request()->routeIs('penawaranpromo')) return "";
        
        return view($this->templateView.'.components.navbar-header');
    }
}
