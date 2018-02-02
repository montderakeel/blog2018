<html>
    <head>
        <meta charset="utf-8">
        <title>HOME PAGE</title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>

    <body>
        <nav>
            <br>
        </nav>
        <div class="container">
            @yield('content')
        </div>
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>