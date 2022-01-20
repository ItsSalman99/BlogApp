<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog @yield('title')</title>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body>
    
    <nav class="flex justify-between p-4">
        <a href="/">Blog</a>
            <ul class="flex justify-evenly">
                <div>
                    <a href="/login" class="px-4">Login</a>
                </div>
                <div>
                    <a href="/register" class="px-4">Sign Up</a>
                </div>
            </ul>
    </nav>

    @yield('content')

</body>
</html>