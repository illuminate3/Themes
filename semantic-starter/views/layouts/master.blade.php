<!DOCTYPE html>
<html class="no-js" lang="">
    <head>
        <!-- Standard Meta -->
        <meta charset="utf-8"/>
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title', site_name())</title>
        <meta name="description" content="@yield('meta_description')">
        <meta name="keywords" content="@yield('meta_keywords')">
        @yield('meta')

        {{-- header stylesheets --}}
        <link rel="stylesheet" type="text/css" href="{{ Theme::asset('vendor/semantic/dist/semantic.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ Theme::asset('css/custom.css') }}">
        @yield('header-styles')

        {{-- header scripts --}}
        <script src="{{ Theme::asset('vendor/jquery/dist/jquery.min.js') }}"></script>
        <script src="{{ Theme::asset('vendor/semantic/dist/semantic.min.js') }}"></script>
        @yield('header-scripts')

    </head>
<body>

@include('semantic-starter::partials.header')

<!-- Page Contents -->
<div class="pusher">

    @yield('content')

    @include('semantic-starter::partials.footer')

</div>

{{-- footer stylesheets --}}
@yield('footer-styles')

{{-- footer scripts --}}
@yield('footer-scripts')

{{-- google analytics --}}
@yield('google_analytics', googleAnalytics())

</body>
</html>

