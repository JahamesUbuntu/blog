@php
    $defaults = [
        'class' => 'ml-auto px-4 py-1.5 rounded-md bg-blue-500 text-white',
    ];
@endphp

<button {{ $attributes($defaults) }}>{{ $slot }}</button>
