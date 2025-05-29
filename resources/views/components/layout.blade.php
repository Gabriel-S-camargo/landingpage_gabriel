<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Gabriel Santos | Desenvolvedor Fullstack' }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-white text-gray-900 dark:bg-gray-900 dark:text-black">
    <x-navbar />
    {{ $slot }}
    <x-footer />
</body>
</html>