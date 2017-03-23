@extends('layouts.webMaster')


@section('stylesheets')
    @foreach($widgets as $widget)
        <link rel="stylesheet" href="../css/{{ $widget->name }}.css" />
    @endforeach
@endsection

@section('content')

    <div id="loader-wrapper">
        <div id="loader">
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
        </div>
    </div>
    <!-- Back to top -->
    <div class="back-to-top"><span class="icon-keyboard_arrow_up"></span></div>
    <!-- /Back to top -->

    @foreach($widgets as $widget)
        <?php require_once '../resources/views/'.$widget->name.'.blade.php';?>
    @endforeach
@endsection

