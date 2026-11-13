<!doctype html>
<html lang="fr" data-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title') — WishFlix</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    @yield('styles')
</head>
<body class="min-h-screen flex flex-col">
    @include('partials.nav')

    <main class="flex-1 container mx-auto p-6">
        @yield('content')
    </main>

    <footer class="wishflix-footer footer footer-center p-4 bg-base-200">
        <p>WishFlix — catalogue de jeux vidéo</p>
    </footer>
</body>
</html>
