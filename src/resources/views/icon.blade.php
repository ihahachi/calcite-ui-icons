<svg icon="{{ $icon }}" class="{{ $class }}" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" {{ $attributes ?? '' }}>
    @include("calcite-icons::icons.{$icon}")
</svg>
