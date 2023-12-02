<button {{ $attributes->merge(['type' => 'button', 'class' => 'd-inline-flex align-items-center px-4 py-2 bg-white border border-secondary rounded text-uppercase small text-dark shadow-sm']) }}>
    {{ $slot }}
</button>
