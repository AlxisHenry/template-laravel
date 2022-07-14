<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inconsolata:wght@300&family=Libre+Franklin:wght@200&family=Poppins:wght@200&display=swap" rel="stylesheet">
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="description" content=""/>
    <meta name="keywords" content=""/>
    <meta name="googlebot" content="index,follow,nosnippet"/>
    <meta name="robots" content="index, follow"/>
    <meta name="copyright" content="" />
    <meta property="og:type" content="portfolio"/>
    <meta property="og:title" content=""/>
    <meta property="og:image" content=""/>
    <meta property="og:url" content="{{ Request::url() }}"/>
    <meta property="og:site_name" content="">
    <meta property="og:description" content=""/>
    <meta property="og:video" content="">
    <meta property="og:locale" content="en_US">
    <meta property="og:locale:alternate" content="fr_FR">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"/>
    <link rel="mask-icon" href="{{ url('assets/icons/safari-pinned-tab.svg') }}" color="#5bbad5">
    <link rel="shortcut icon" href="{{ url('assets/icons/favicon.ico') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ url('assets/icons/favicon-16x16.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ url('assets/icons/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="180x180" href="{{ url('assets/icons/mstile-150x150.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ url('assets/icons/apple-touch-icon-180x180.png') }}">
    <meta name="msapplication-config" content="{{ url('assets/icons/browserconfig.xml') }}">
    <link rel="manifest" href="{{ url('assets/icons/site.webmanifest') }}">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    @vite('resources/scss/app.scss')
</head>
<body>

    @include('layouts.navbar')

    @yield('body')

    @include('layouts.footer')

    @vite('resources/js/app.js')
    @yield('scripts')

</body>
</html>
