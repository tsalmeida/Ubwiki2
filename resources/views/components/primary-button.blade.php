<button {{ $attributes->merge(['type' => 'submit', 'class' => 'd-inline-flex align-items-center px-4 py-2 bg-dark border border-0 rounded text-white text-uppercase small']) }}>
    {{ $slot }}
</button>
