<?php

namespace Calcite\Icons\Components;

use Illuminate\View\Component;
use Illuminate\Contracts\View\View;
use Closure;

class Icon extends Component
{
    public string $icon;
    public string $class;

    public function __construct(
        string $icon,
        string $class = ''
    ) {
        $this->icon = $icon;
        $this->class = $class ?: config('calcite-icons.class');
    }

    public function render(): View|Closure|string
    {
        if (! view()->exists("calcite-icons::icons.{$this->icon}")) {
            if (app()->environment('local', 'testing')) {
                throw new \InvalidArgumentException("Calcite icon '{$this->icon}' not found.");
            }
            return '';
        }

        return view('calcite-icons::icon');
    }
}