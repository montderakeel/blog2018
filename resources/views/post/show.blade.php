<html>
    <head>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>

    <body class="container">
        
        <h2>{{ $post->title }}</h2>
        <p>{{ $post->body }}</p>
        {{ $post->author_url }}

        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>