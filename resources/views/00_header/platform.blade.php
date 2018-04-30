<?php
    use App\Utils;
?>    
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
        <title>Envienta Platform</title>

        <!-- CSS - CDN's -->
        <link href="https://fonts.googleapis.com/css?family=Armata|Days+One" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css" />
        
        <!-- Boostrap v4.0 -->
        {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"> --}}
        <link rel="stylesheet" href="{{ URL::to('css/bootstrap_4.1.0.min.css') }}" type="text/css">

        <!-- Custom CSS -->
        {{-- <link rel="stylesheet" href="{{ URL::to('css/platform.css') }}" type="text/css"> --}}
        <link rel="stylesheet" href="{{ URL::to('css/animate.css') }}" type="text/css">
        <link rel="stylesheet" href="{{ URL::to('css/style.css') }}" type="text/css">
        <link rel="stylesheet" href="{{ Utils::themePath('style.css') }}" type="text/css">
        
        {{-- reCAPTCHA --}}
        {{--
        <script src='https://www.google.com/recaptcha/api.js'></script>
        --}}

        {{-- jQuery --}}
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        
        {{-- jQuery UI --}}
        <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

        {{-- SimpleMDE --}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simplemde/1.11.2/simplemde.min.css" integrity="sha256-Is0XNfNX8KF/70J2nv8Qe6BWyiXrtFxKfJBHoDgNAEM=" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/simplemde/1.11.2/simplemde.min.js" integrity="sha256-6sZs7OGP0Uzcl7UDsLaNsy1K0KTZx1+6yEVrRJMn2IM=" crossorigin="anonymous"></script>

        {{-- embed.ly --}}
        <script async src="//cdn.embedly.com/widgets/platform.js" charset="UTF-8"></script>


        <link rel="stylesheet" href="{{ URL::to('css/jquery.tag-editor.css') }}">
        <script src="{{ URL::to('js/jquery.caret.min.js') }}"></script>
        <script src="{{ URL::to('js/jquery.tag-editor.min.js') }}"></script>

    </head>

    <body>
        <div>
            @include('40_topbar.navigation')
            
            @yield('content')
            
            @include('90_footer.footer')
        </div>
    </body>
</html>