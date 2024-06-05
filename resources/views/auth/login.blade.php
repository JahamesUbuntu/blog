<x-layouts.app>
    <form action="/login" method="POST" class="space-y-2 mt-2">
        @csrf

        <x-forms.input label="Email adress" name="email" placeholder="user@example.com" />

        <x-forms.input label="Password" type="password" name="password" placeholder="•••••••••••" />

        <div class="flex">
            <x-forms.button class="ml-auto">Login</x-forms.button>
        </div>

    </form>
</x-layouts.app>
