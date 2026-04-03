@php
    $viewBox = match((string) $scale) {
        's' => '0 0 16 16',
        'l' => '0 0 32 32',
        default => '0 0 24 24',
    };
@endphp
<svg icon="{{ $icon }}" scale="{{ $scale }}" class="{{ $class }}" viewBox="{{ $viewBox }}" fill="currentColor" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" {{ $attributes ?? '' }}>
    @include("calcite-icons::icons.{$icon}")
</svg>
