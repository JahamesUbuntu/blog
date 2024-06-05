<!doctype html>
<html lang="en" class="h-full bg-gray-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Blog</title>
</head>
<body x-data class="h-full">

    <div class="h-full flex">
        <div class="bg-gray-200 min-h-full h-fit relative shadow-xl p-4 mx-auto w-full md:w-[70%]">
            <x-navbar/>

            {{ $slot }}
        </div>
    </div>

    @stack('scripts')
    @livewireScripts
</body>
</html>
