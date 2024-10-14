<?php

namespace App\View\Components\Honda;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Footer extends Component
{
    protected $templateView = "hondaView";
    public $renderView = "footer";

    /**
     * Create a new component instance.
     */
    public function __construct($renderView)
    {
        $this->renderView = $renderView;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view($this->templateView.'.components.'.$this->renderView);
    }
}
