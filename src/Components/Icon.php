<?php

namespace Calcite\Icons\Components;

use Illuminate\View\Component;
use Illuminate\Contracts\View\View;
use Closure;

class Icon extends Component
{
    public string $icon;
    public string $class;
    public string $scale;

    public function __construct(
        string $icon,
        string $class = '',
        string $scale = ''
    ) {
        $this->icon = $icon;
        $this->class = $class ?: config('calcite-icons.class');
        $this->scale = $scale ?: config('calcite-icons.scale');
    }

    public function render(): View|Closure|string
    {
        return view('calcite-icons::icon');
    }
}