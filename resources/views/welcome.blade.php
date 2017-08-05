<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        
        <!-- Boostrap CDN -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">0
            {{-- @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Loginka</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif --}}

            <div class="container-fluid">
                <div row>
                    <div class="col-md-6 pull-left">
                        <div class="title">
                            <p>Envienta: <br> Open Source Everything</p>
                            <img src="{{ URL::to('img/page-under-construction.png') }}" alt="">
                        </div>
                    </div>
                    
                    <div class="col-md-6 pull-right">
                        <h2>Working layouts so far:</h2><br>

                        <ul>
                            <li>
                                <h4>Crowdfunding page from - Pingendo - 01_crowdfunding_page.html</h4>
                                <a href="{{ url('/home') }}" target="_blank"><h4>Home to Login & Register</h4></a>
                                <hr>
                            </li>
                            <li>
                                <h4>Crowdfunding page from - Pingendo - 01_crowdfunding_page.html</h4>
                                <a href="{{ route('playground.main') }}" target="_blank"><h4>/project/3</h4></a>
                                <hr>
                            </li>
                            <li>
                                <h4>Crowdfunding page from - Pingendo - 02_campaigns_page.html</h4>
                                <a href="{{ route('playground.campaign') }}"" target="_blank"><h4>/campaign</h4></a>
                                <hr>
                            </li>
                            <li>
                                <h4>Front page from - Pingendo - 03_front_page.html</h4>
                                <a href="{{ route('playground.FrontPage') }}"" target="_blank"><h4>/front</h4></a>
                                <hr>
                            </li>
                        </ul>
                    
                        {{-- <div class="links">
                            <a href="https://laravel.com/docs">Documentation</a>
                            <a href="https://laracasts.com">Laracasts</a>
                            <a href="https://laravel-news.com">News</a>
                            <a href="https://forge.laravel.com">Forge</a>
                            <a href="https://github.com/laravel/laravel">GitHub</a>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
