<a wire:navigate.hover {{ $attributes->merge(['class' => 'text-blue-500 text-center hover:underline']) }} href="{{ $href }}">{{ $slot }}</a>
