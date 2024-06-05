<div
    class="sticky bg-gray-300 top-2 shadow-inner flex px-4 py-2 place-items-center rounded-md h-16 gap-x-4">
    <h2 class="text-xl mr-auto font-semibold">Posts</h2>

    @auth
        <div class="flex space-x-2 place-items-center">
            <form class="border-r-2 border-black px-2" action="{{ route('logout') }}" method="POST">
                @csrf
                @method('DELETE')
                <button class="text-blue-500 hover:underline">Logout</button>
            </form>

            <x-link class="ml-auto" href="{{ route('posts.create') }}">New Post</x-link>
            <x-link class="ml-auto" href="{{ route('posts.index') }}">Home</x-link>
        </div>
    @else
        <div class="flex space-x-2 place-items-center">
            <x-link href="{{ route('login') }}">Login</x-link>
            <x-link href="{{ route('register') }}">Register</x-link>
        </div>
    @endauth
</div>
