@props(['value'])

<label {{ $attributes->merge(['class' => 'small text-danger mb-1']) }}>
    {{ $value ?? $slot }}
</label>
