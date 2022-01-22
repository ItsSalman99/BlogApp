<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog @yield('title')</title>

    <!-- Styles -->
    <link rel="stylesheet" href="/css/app.css'">

    <!-- Scripts -->
    <script src="/js/app.js" defer></script>
</head>
<body>
    
    <nav class="flex justify-between p-4">
        <a href="/">Blog</a>
        @auth
            <ul class="flex justify-evenly">
                <div>
                    <a href="/dashboard" class="px-4 py-2 bg-gray-800 text-white rounded-lg">{{auth()->user()->name}}</a>
                </div>
            </ul>
        @endauth
        @guest
            <ul class="flex justify-evenly">
                <div>
                    <a href="/login" class="px-4">Login</a>
                </div>
                <div>
                    <a href="/register" class="px-4">Sign Up</a>
                </div>
            </ul>    
        @endguest
    </nav>

    @yield('content')

</body>
</html>