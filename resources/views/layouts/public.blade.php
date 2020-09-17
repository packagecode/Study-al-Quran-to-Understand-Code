<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="generator" content="Mobirise v4.8.2, mobirise.com">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <link rel="shortcut icon" href="{{asset('assets/images/logo-150x125.png')}}" type="image/x-icon">
    <meta name="description" content="">
    <title>@isset($title)  {{ $title }} |  @endisset {{config('app.name')}}</title>
    <link rel="stylesheet" href="{{asset('assets/web/assets/mobirise-icons/mobirise-icons.css')}}">
    <link rel="stylesheet" href="{{asset('assets/tether/tether.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap-grid.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap-reboot.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/dropdown/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/socicon/css/styles.css')}}">
    <link rel="stylesheet" href="{{asset('assets/datatables/data-tables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/animatecss/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/theme/css/style.css')}}">
    <link href="{{asset('assets/fonts/style.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('assets/mobirise/css/mbr-additional.css')}}" type="text/css">
    @yield('cssScript')
</head>
<body>
@include('public.inc.header')
@yield('content')
@include('public.inc.footer')
<script src="{{asset('assets/web/assets/jquery/jquery.min.js')}}"></script>
<script src="{{asset('assets/popper/popper.min.js')}}"></script>
<script src="{{asset('assets/tether/tether.min.js')}}"></script>
<script src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/smoothscroll/smooth-scroll.js')}}"></script>
<script src="{{asset('assets/dropdown/js/script.min.js')}}"></script>
<script src="{{asset('assets/touchswipe/jquery.touch-swipe.min.js')}}"></script>
<script src="{{asset('assets/viewportchecker/jquery.viewportchecker.js')}}"></script>
<script src="{{asset('assets/ytplayer/jquery.mb.ytplayer.min.js')}}"></script>
<script src="{{asset('assets/vimeoplayer/jquery.mb.vimeo_player.js')}}"></script>
<script src="{{asset('assets/datatables/jquery.data-tables.min.js')}}"></script>
<script src="{{asset('assets/datatables/data-tables.bootstrap4.min.js')}}"></script>
<script src="{{asset('assets/bootstrapcarouselswipe/bootstrap-carousel-swipe.js')}}"></script>
<script src="{{asset('assets/theme/js/script.js')}}"></script>
<script src="{{asset('assets/slidervideo/script.js')}}"></script>

@yield('jsScript')

<input name="animation" type="hidden">
<div id="scrollToTop" class="scrollToTop mbr-arrow-up"><a style="text-align: center;"><i></i></a></div>
</body>
</html>
