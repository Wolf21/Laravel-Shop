<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="OneTech shop project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @section('title')
        @yield('title')
    @show
    <link rel="stylesheet" type="text/css" href="{{url('styles/bootstrap4/bootstrap.min.css')}}">
    <link href="{{url('plugins/fontawesome-free-5.0.1/css/fontawesome-all.css')}}" rel="stylesheet" type="text/css">
    @section ('css')
    @show
</head>
<body>
<div class="super_container">
    @section('header')
        @include('layouts.header')
    @show
    @yield('content')

    @include('component.brands')
    @include('layouts.footer')
    @section('modal')
    @show
</div>
</body>
<script type="text/javascript" src="{{ url('js/jquery-3.3.1.min.js') }}"></script>
<script type="text/javascript" src="{{ url('styles/bootstrap4/popper.js') }}"></script>
<script type="text/javascript" src="{{ url('styles/bootstrap4/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ url('plugins/greensock/TweenMax.min.js') }}"></script>
<script type="text/javascript" src="{{ url('plugins/greensock/TimelineMax.min.js') }}"></script>
<script type="text/javascript" src="{{ url('plugins/scrollmagic/ScrollMagic.min.js') }}"></script>
<script type="text/javascript" src="{{ url('plugins/greensock/animation.gsap.min.js') }}"></script>
<script type="text/javascript" src="{{ url('plugins/greensock/ScrollToPlugin.min.js') }}"></script>
@section('script')
@show
</html>
