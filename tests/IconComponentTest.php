<?php

uses(\Calcite\Icons\Tests\TestCase::class);

it('renders icon component', function () {
    $view = $this->blade(
        '<x-calcite-icon icon="user" />'
    );

    $view->assertSee('<svg', false);
    $view->assertSee('user');
});

it('applies default config', function () {
    $view = $this->blade(
        '<x-calcite-icon icon="user" />'
    );

    $view->assertSee('w-5 h-5');
});

it('throws exception for invalid icon', function () {
    $this->expectException(\Illuminate\View\ViewException::class);
    $this->expectExceptionMessage("Calcite icon 'this-is-not-an-icon' not found.");

    $this->blade('<x-calcite-icon icon="this-is-not-an-icon" />');
});