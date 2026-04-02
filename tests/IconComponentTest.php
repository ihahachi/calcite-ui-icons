<?php

namespace Calcite\Icons\Tests;

class IconComponentTest extends TestCase
{
    /** @test */
    public function icon_component_renders()
    {
        $view = $this->blade(
            '<x-calcite-icon icon="user" />'
        );

        $view->assertSee('calcite-icon');
        $view->assertSee('user');
    }

    /** @test */
    public function default_config_is_applied()
    {
        $view = $this->blade(
            '<x-calcite-icon icon="user" />'
        );

        $view->assertSee('w-5 h-5');
    }
}