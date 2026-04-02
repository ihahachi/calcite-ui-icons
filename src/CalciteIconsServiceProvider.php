<?php

namespace Calcite\Icons;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;
use Calcite\Icons\Components\Icon;

class CalciteIconsServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/resources/views', 'calcite-icons');

        Blade::component('calcite-icon', Icon::class);
    }

    public function register()
    {
        //
    }
}
