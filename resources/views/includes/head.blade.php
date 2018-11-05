<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

     <!-- PAGE settings -->
        <link rel="icon" href="">
        <meta name="description" content="Transcribe Everything">
        <meta name="keywords" content="">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Transcript') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/animate-in.js') }}" defer></script>
    <script src="{{ asset('js/navbar-ontop.js') }}" defer></script>
    <script src="{{ asset('js/smooth-scroll.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/trans.css') }}" rel="stylesheet">