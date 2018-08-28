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
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

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

        {{-- leaflet --}}
        <link rel="stylesheet" href="http://cdn.leafletjs.com/leaflet-0.3.1/leaflet.css" />
        <script src="http://cdn.leafletjs.com/leaflet-0.3.1/leaflet.js"></script>
        <script src="http://maps.google.com/maps/api/js?v=3.2&sensor=false"></script>
        <script src="{{ URL::to('js/leaflet-google.js') }}"></script>

        <link rel="stylesheet" href="{{ URL::to('css/jquery.tag-editor.css') }}">
        <script src="{{ URL::to('js/jquery.caret.min.js') }}"></script>
        <script src="{{ URL::to('js/jquery.tag-editor.min.js') }}"></script>

        {{-- mobi --}}

  <link rel="stylesheet" href="{{ URL::to('assets/web/assets/mobirise-icons/mobirise-icons.css') }}">
  <link rel="stylesheet" href="{{ URL::to('assets/tether/tether.min.css') }}">
  <link rel="stylesheet" href="{{ URL::to('assets/bootstrap/css/bootstrap-grid.min.css') }}">
  <link rel="stylesheet" href="{{ URL::to('assets/bootstrap/css/bootstrap-reboot.min.css') }}">
  <link rel="stylesheet" href="{{ URL::to('assets/socicon/css/styles.css') }}">
  <link rel="stylesheet" href="{{ URL::to('assets/dropdown/css/style.css') }}">
  <link rel="stylesheet" href="{{ URL::to('assets/theme/css/style.css') }}">
  <link rel="stylesheet" href="{{ URL::to('assets/mobirise/css/mbr-additional.css') }}" type="text/css">

    </head>

    <body>
        <div>
            @include('40_topbar.navigation')

            @yield('content')

            @include('90_footer.footer')
        </div>
    </body>
</html>
