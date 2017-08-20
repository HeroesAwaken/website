<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" /> 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('pageTitle')HeroesAwaken</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Luckiest+Guy|Bitter:700|Open+Sans:400,600,600italic">
    <link href="{{ asset('/css/app.css') }}?v1" rel="stylesheet"/>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}?v49">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    @yield('styles')

    <script type="text/javascript" src="{{ asset('js/js-3.js') }}?v4"></script>
    <script type="text/javascript" src="{{ asset('js/js-2.js') }}?v4"></script>
    <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('css/custom.css') }}?v6" />

    <!-- THIS MUST BE LOADED HERE! DO NOT REMOVE -->
    <script src="//cdn.ckeditor.com/4.7.1/standard/ckeditor.js"></script>
    <!-- THIS MUST BE LOADED HERE! DO NOT REMOVE -->

    <link href="{{ asset('css/sweetalert.css') }}" rel="stylesheet" type="text/css">
    <script src="{{ asset('js/sweetalert.min.js') }}"></script>
    <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}" />
    <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-101852132-1', 'auto');
  ga('send', 'pageview');

</script>
@if( ! Request::is('login') && ! Request::is('register'))
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
    (adsbygoogle = window.adsbygoogle || []).push({
        google_ad_client: "ca-pub-8715450313943907",
        enable_page_level_ads: true
    });
</script>
@endif
</head>
<body>