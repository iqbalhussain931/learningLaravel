@extends('layouts.webMaster')


@section('content')
    @foreach($widgets as $widget)
        {{ $widget->name }}
    @endforeach
@endsection

