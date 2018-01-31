<html>
    <head>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>

    <body class="container">
        
        @foreach($posts as $post)
            <h2>{{ $post->title }}</h2>
        @endforeach

        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>