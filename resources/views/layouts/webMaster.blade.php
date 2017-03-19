<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'ECommerce Template') }}</title>

    <meta name="description" content="">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="../css/bootstrap/bootstrap.css" />

    <!-- FontAwesome core CSS -->
    <link rel="stylesheet" href="../css/fontawesome/font-awesome.css" />

    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>

</head>
<body>

@yield('content')

<!-- JQuery v1.9.1 -->
<script src="../js/jquery/jquery-1.9.1.min.js" type="text/javascript"></script>
<script src="../js/plugins/underscore/underscore-min.js"></script>
<!-- Bootstrap -->
<script src="../js/bootstrap/bootstrap.min.js"></script>

@yield('scripts')

<!-- Custom JQuery -->
<script src="../js/app/jquery-ui.js" type="text/javascript"></script>

</body>
</html>
