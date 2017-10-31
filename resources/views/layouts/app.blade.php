<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Prospectos</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="{{ asset('css/theme/bootstrap.min.css') }}">
    <!-- Fontastic Custom icon font-->
    <link rel="stylesheet" href="{{ asset('css/theme/fontastic.css') }}">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="{{ asset('css/theme/font-awesome.min.css') }}">
    <!-- Google fonts - Poppins -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="{{ asset('css/theme/style.default.css') }}" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="{{ asset('css/theme/custom.css') }}">
    <!-- Favicon-->
    <link rel="shortcut icon" href="favicon.png">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->

</head>
<body>
    <div class="page home-page">
        @include('layouts.top_bar')
        <div class="page-content d-flex align-items-stretch">
            @include('layouts.side_bar_menu')
            <div class="content-inner">
                <header class="page-header">
                    <div class="container-fluid">
                        <h2 class="no-margin-bottom">@yield('page-header')</h2>
                    </div>
                </header>
                @yield('content')
            </div>
        </div>

        @include('layouts.footer')
    </div>

    <!-- Scripts -->
    {{--<script src="{{ asset('js/app.js') }}"></script>--}}
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
    <script src="{{ asset('js/footable.min.js') }}"></script>


    <!-- Javascript files-->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    {{--<script src="{{ asset('js/theme/popper.min.js') }}"> </script>--}}
    <script src="{{ asset('js/theme/bootstrap.min.js') }}"></script>
    {{--<script src="vendor/jquery.cookie/jquery.cookie.js"> </script>--}}
    <script src="{{ asset('js/theme/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('js/theme/front.js') }}"></script>
@yield('custom_scripts')
</body>
</html>
