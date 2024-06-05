<x-layouts.app>
    <main class="mt-2" x-data="alpineData()">
        <form action="{{ route('posts.update', $post) }}" method="POST" class="space-y-2">
            @csrf
            @method('PATCH')
            <x-forms.input label="Title" name="title" placeholder="An interesting title" value="{{ $post->title }}"></x-forms.input>

            <x-forms.textarea x-text="'{{ $post->body }}'" label="Body" name="body" placeholder="What's on your mind?"></x-forms.textarea>

            <div class="flex">
                <x-link href="{{ route('posts.index') }}">Cancel</x-link>

                <div class="flex space-x-2 ml-auto">
                    <x-forms.button form="delete-form" class="bg-red-600">Delete</x-forms.button>
                    <x-forms.button>Save</x-forms.button>
                </div>
            </div>
        </form>

        <form method="POST" @submit.prevent="confirmForm($el, 'Are you sure you want to delete this post?')" id="delete-form" action="{{ route('posts.destroy', $post) }}">
            @csrf
            @method('DELETE')
        </form>
    </main>


    <script>
        function alpineData() {
            return {
                confirmForm(el, question) {
                    window.confirm(question) ? el.submit() : null;
                }
            }
        }
    </script>
</x-layouts.app>
