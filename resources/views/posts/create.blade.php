<x-layouts.app>
    <main class="mt-2">
        <form action="{{ route('posts.store') }}" method="POST" class="space-y-2">
            @csrf
            <x-forms.input label="Title" name="title" placeholder="An interesting title" />

            <x-forms.textarea label="Body" name="body" placeholder="What a beautiful day..."/>

            <div class="flex">
                <x-link href="{{ route('posts.index') }}">Cancel</x-link>

                <x-forms.button class="ml-auto px-4 py-1.5 rounded-md bg-blue-500 text-white">Post</x-forms.button>
            </div>
        </form>
    </main>
</x-layouts.app>
