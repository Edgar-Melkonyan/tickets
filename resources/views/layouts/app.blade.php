<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>App Name - @yield('title')</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
    </head>
    <body>
    <div class="container">
        @yield('content')
    </div>
    </body>
    <script src="{{ mix('/js/app.js') }}"></script>
</html>