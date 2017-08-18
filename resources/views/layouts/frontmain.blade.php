<!doctype html>
<html>
    <head>

        {{-- Meta section --}}
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        {{-- Link section --}}
        <link rel="icon" href="{{ URL::to('img/favicon_img.jpg') }}">

        {{-- Title --}}
        <title>Envienta Playground</title>

        <!-- Default CSS -->
        <link rel="stylesheet" href="{{ URL::to('css/font-awesome.css') }}">
        {{-- <link rel="stylesheet" href="{{ URL::to('css/bootstrap_4.css') }}"> --}}

        <!-- Custom CSS -->
        <link rel="stylesheet" href="{{ URL::to('css/platform.css') }}" type="text/css">
        <link rel="stylesheet" href="{{ URL::to('css/animate.css') }}" type="text/css">

        {{-- reCAPTCHA --}}
        <script src='https://www.google.com/recaptcha/api.js'></script>

    </head>

    <body class="bg-primary">
        @include('partials.navigation')

        @include('partials.carousel')

        @include('partials.categories')

        @yield('content')

        @include('partials.breadcrumbs')
        
        @include('partials.footer')
    </body>
</html>