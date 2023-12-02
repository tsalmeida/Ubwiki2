<button {{ $attributes->merge(['type' => 'submit', 'class' => 'd-inline-flex align-items-center px-4 py-2 bg-danger border border-0 rounded font-weight-bold text-uppercase small text-white" style="letter-spacing: 0.1em; transition: all 0.15s ease-in-out;']) }}>
    {{ $slot }}
</button>
