@props(['align' => 'right', 'width' => '48', 'contentClasses' => 'py-1 bg-white'])

@php
    switch ($align) {
        case 'left':
            $alignmentClasses = 'start-0';
            break;
        case 'top':
            $alignmentClasses = 'align-top';
            break;
        case 'right':
        default:
            $alignmentClasses = 'end-0';
            break;
    }

    $customWidth = '';
    switch ($width) {
        case '48':
            $customWidth = 'style="width: 12rem;"'; // Tailwind's w-48 is roughly 12rem
            break;
    }
@endphp

<div class="position-relative" x-data="{ open: false }" @click.outside="open = false" @close.stop="open = false">
    <div @click="open = !open">
        {{ $trigger }}
    </div>

    <div x-show="open"
         x-transition:enter="transition ease-out duration-200"
         x-transition:enter-start="opacity-0 scale-95"
         x-transition:enter-end="opacity-100 scale-100"
         x-transition:leave="transition ease-in duration-75"
         x-transition:leave-start="opacity-100 scale-100"
         x-transition:leave-end="opacity-0 scale-95"
         class="position-absolute z-index-50 mt-2 rounded shadow {{ $alignmentClasses }}"
         {{ $customWidth }}
         style="display: none;"
         @click="open = false">
        <div class="rounded ring-1 ring-black ring-opacity-5 {{ $contentClasses }}">
            {{ $content }}
        </div>
    </div>
</div>
