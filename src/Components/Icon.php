<?php

namespace Calcite\Icons\Components;

use Illuminate\View\Component;
use Illuminate\Contracts\View\View;
use Closure;

class Icon extends Component
{
    public string $icon;
    public string $class;

    public function __construct(string $icon, string $class = '')
    {
        $this->icon = $icon;
        $this->class = $class;
    }

    public function render(): View|Closure|string
    {
        return view('calcite-icons::icon');
    }
}
