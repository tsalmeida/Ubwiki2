@props(['active'])

@php
    $classes = ($active ?? false)
                ? 'd-inline-flex align-items-center px-1 pt-1 border-bottom border-primary text-sm font-weight-medium'
                : 'd-inline-flex align-items-center px-1 pt-1 border-bottom border-transparent text-sm font-weight-medium text-secondary';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
