<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>

    <meta name="_token" content="{{ csrf_token() }}"/>
    <title>@yield('title', site_name())</title>
    <meta name="description" content="@yield('meta_description')">
    <meta name="keywords" content="@yield('meta_keywords')">
    @yield('meta')

    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="{{ Theme::asset('vendor/materialize/dist/css/materialize.min.css') }}" type="text/css" rel="stylesheet"
          media="screen,projection"/>
    <link href="{{ Theme::asset('css/style.css') }}" type="text/css" rel="stylesheet" media="screen,projection"/>
    @yield('header-styles')

</head>
<body>

{{-- header --}}
@include('materialize-starter::partials.header')

{{-- içerik --}}
@yield('content')

{{-- footer --}}
@include('materialize-starter::partials.footer')


@yield('footer-styles')

<script src="{{ Theme::asset('vendor/jquery/dist/jquery.min.js') }}"></script>
<script src="{{ Theme::asset('vendor/materialize/dist/js/materialize.min.js') }}"></script>
<script src="{{ Theme::asset('js/init.js') }}"></script>

@yield('footer-scripts')

{{-- google analytics --}}
@yield('google_analytics', googleAnalytics())

</body>
</html>

