<?php

use App\Models\Post;
use function Livewire\Volt\{computed, hydrate, state, with, usesPagination};

usesPagination();

state(['q' => ''])->url();

$posts = computed(function() {
    if ($this->q !== "") {
        return Post::query()
            ->with('user')
            ->where('title', 'like', '%' . $this->q . '%')
            ->latest()
            ->get();
    } else {
        return Post::with('user')->latest()->paginate(5);
    }
});

with(fn() => ['posts' => $this->posts]);

?>

<div>
    <div class="mt-2">
        <x-forms.input :label="false" name="q" placeholder="Search" wire:model.live.debounce="q"/>
    </div>

    <div class="mt-2 space-y-2 divide-black/10 divide-y divide-solid">
        @foreach($posts as $post)
            <x-post :$post/>
        @endforeach
    </div>

    <div class="mt-4">
        @if($q == "")
            {{ $posts->links() }}
        @endif
    </div>
</div>
