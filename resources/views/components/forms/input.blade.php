@props(['label', 'name'])

@php
    $defaults = [
        'name' => $name,
        'id' => $name,
        'class' => 'rounded-md px-4 py-2 shadow-inner bg-gray-100 w-full',
        'value' => old($name),
    ];

    $error = $errors->first($name);
@endphp

@if($label)
    <div class="inline-flex items-center gap-x-2">
        <span class="w-2 h-2 bg-black inline-block"></span>
        <label class="font-bold" for="{{ $name }}">{{ $label }}</label>
    </div>
@endif

<input {{ $attributes($defaults) }}>

@if($error)
    <p class="text-red-500">{{ $error }}</p>
@endif

