<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Admin CMS') }}</title>

    <meta name="description" content="">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="../css/bootstrap/bootstrap.css" />

    @yield('stylesheets')

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>

</head>
<body>


<!-- Preloader -->
<div class="loading-container">
    <div class="loading">
        <div class="l1">
            <div></div>
        </div>
        <div class="l2">
            <div></div>
        </div>
        <div class="l3">
            <div></div>
        </div>
        <div class="l4">
            <div></div>
        </div>
    </div>
</div>
<!-- Preloader -->

@yield('content')

<!-- JQuery v1.9.1 -->
<script src="../js/jquery/jquery-1.9.1.min.js" type="text/javascript"></script>
<script src="../js/plugins/underscore/underscore-min.js"></script>
<!-- Bootstrap -->
<script src="../js/bootstrap/bootstrap.min.js"></script>

@yield('scripts')

</body>
</html>
