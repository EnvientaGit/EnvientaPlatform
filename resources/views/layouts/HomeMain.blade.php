<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Envienta Playground</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="{{ URL::to('css/font-awesome.min.css') }}">

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="{{ URL::to('css/bootstrap.min.css') }}" type="text/css">

    </head>
    <body>
        <div class="container">
            @include('partials.navigation')
        </div>

            <div class="container">
                @yield('content')   
            </div>
        <div class="container">
            @include('partials.footer')
        </div>
    </body>
</html>