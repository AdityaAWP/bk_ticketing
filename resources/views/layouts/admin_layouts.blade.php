<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <title>@yield('title', 'My Laravel App')</title>
</head>

<body>
    <div class="flex">
        @include('components.sidebar')
        <div class="flex-grow p-4">
            @yield('content')
        </div>
    </div>
    <footer class="bg-light text-center py-3">
        <div class="container">
            <p>© {{ date('Y') }} MyLaravelApp. All rights reserved.</p>
        </div>
    </footer>
</body>

</html>
