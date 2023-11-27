<!DOCTYPE html>
<html lang="es">
    <head>
        <!-- Sección del encabezado del documento HTML -->
        <meta charset="utf-8" />
        <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('img/apple-icon.png') }}">
        <link rel="icon" type="image/png" href="{{ asset('img/favicon.ico') }}">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <title>@yield('title') - PHPDevelopers</title>
        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
        <!-- Fonts and icons -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
        <!-- CSS Files -->
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" />
        <link href="{{ asset('css/light-bootstrap-dashboard.css?v=2.0.0') }}" rel="stylesheet" />
        <link href="{{ asset('css/general.css') }}" rel="stylesheet" />
    </head>
    <body>
        @yield('body')
    </body>
    <!-- Core JS Files -->
    <script src="{{ asset('js/core/jquery.3.2.1.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/core/popper.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/core/bootstrap.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/plugins/bootstrap-switch.js') }}"></script>
    <script src="{{ asset('js/plugins/chartist.min.js') }}"></script>
    <script src="{{ asset('js/light-bootstrap-dashboard.js?v=2.0.0') }}" type="text/javascript"></script>
    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.9/index.global.min.js'></script>
    <script src="{{ asset('js/general.js') }}"></script>
</html>
