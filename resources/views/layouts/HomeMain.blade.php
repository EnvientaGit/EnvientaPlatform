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

        <!-- Fonts -->
        <link rel="stylesheet" href="{{ URL::to('css/font-awesome.css') }}">

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="{{ URL::to('css/bootstrap.min.css') }}" type="text/css">
        <link rel="stylesheet" href="{{ URL::to('css/platform.css') }}" type="text/css">

    </head>
    
    <body class="bg-primary">
        <div class="container-fluid">
            @include('partials.navigation')
        </div>

        <div class="container-fluid">
            @yield('content')   
        </div>

        <div class="container-fluid">
            @include('partials.footer')
        </div>
    </body>
</html>