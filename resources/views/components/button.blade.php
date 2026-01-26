@props(['variant' => 'primary'])

@php
    $styles = [
        'primary' => 'bg-primary text-white hover:bg-opacity-90 shadow-lg',
        'accent' => 'bg-accent text-white hover:scale-105 transition-transform shadow-lg',
    ];
@endphp

<button {{ $attributes->merge(['class' => "px-8 py-4 rounded-full font-bold uppercase tracking-wider transition-all duration-300 {$styles[$variant]}"]) }}>
    {{ $slot }}
</button>