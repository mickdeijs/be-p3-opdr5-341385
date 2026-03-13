<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Allergenen')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css">
    @stack('head')
</head>
<body class="bg-gray-100 dark:bg-zinc-900 min-h-screen">
    <div class="container mx-auto py-8">
        @yield('content')
    </div>
</body>
</html>
