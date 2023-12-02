@props(['status'])

@if ($status)
    <div {{ $attributes->merge(['class' => 'font-weight-normal small text-success']) }}>
        {{ $status }}
    </div>
@endif
