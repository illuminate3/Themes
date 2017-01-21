<!doctype html>
<html class="no-js" lang="">
    <head>
        {{-- meta --}}
        <meta charset="utf-8"/>
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title', 'Site Title here')</title>
        <meta name="description" content="@yield('meta_description')">
        <meta name="keywords" content="@yield('meta_keywords')">
        @yield('meta')

        {{-- header stylesheets --}}
        <link rel="stylesheet" type="text/css" href="{{ Theme::asset('css/site.css') }}">
        @yield('header-styles')

        {{-- header scripts --}}
        <script src="{{ Theme::asset('js/site.js') }}"></script>
        @yield('header-scripts')

    </head>
<body>

{{-- header --}}
@include('boilerplate::partials.header')

{{-- içerik --}}
@yield('content')

{{-- footer --}}
@include('boilerplate::partials.footer')

{{-- footer stylesheets --}}
@yield('footer-styles')

{{-- footer scripts --}}
@yield('footer-scripts')

{{-- google analytics --}}
@yield('google_analytics', 'Google Analytic codes here')

</body>
</html>
