@props(['post'])

<div>
    <a wire:navigate.hover href="{{ route('posts.edit', $post) }}" class="flex flex-col pt-2 gap-y-2">

        <h3 class="text-black/95 text-xl font-semibold">{{ $post->user->name }}</h3>
        <div class="space-y-2">
            <h4 class="text-lg">{{ $post->title }}</h4>

            <p class="text-md">
                {{ $post->body }}
            </p>
        </div>

        <p class="text-sm text-gray-400">
            {{ $post->created_at }}
        </p>
    </a>
</div>
