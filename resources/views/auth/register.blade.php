<x-layouts.app>
    <form action="/register" method="POST" class="space-y-2 mt-2">
        @csrf

        <x-forms.input label="Username" name="name" placeholder="user_11" />

        <x-forms.input label="Email adress" name="email" placeholder="example@email.com" />

        <x-forms.input label="Password" type="password" name="password" placeholder="•••••••••••" />

        <div class="flex">
            <x-forms.button class="ml-auto">Register</x-forms.button>
        </div>

    </form>
</x-layouts.app>
