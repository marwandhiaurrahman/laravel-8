<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="refresh" content="1000" />
  <meta http-equiv="X-UA-Compatible" content="IE=9" />
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no,minimal-ui" />

  <!-- primary information-->
  <title>Beranda | RZF Komputer | Computer and Peripheral Support</title>
  <meta name="description" content="Beranda | rzfkomputer" />
  <meta name="keywords" content="Beranda, rzfkomputer, indonesia" />

  <!-- ie fix for html5 tags-->
  <!--[if lt IE 9]><script src='http://html5shiv.googlecode.com/svn/trunk/html5.js'></script><![endif]-->

  <!-- author-->
  <meta name="author" content="RZF Komputer" />
  <meta name="copyright" content="2021 RZF Komputer. All Rights Reserved" />

  <!-- user agent crawler-->
  <meta name="robots" content="index, follow" />
  <meta name="googlebot" content="index, follow" />
  <meta name="googlebot-news" content="index, follow" />
  <meta name="msnbot" content="index, follow" />
  <meta name="webcrawlers" content="index, follow" />
  <meta name="spiders" content="index, follow" />

  <!-- canonical-->
  <link rel="canonical" href="https://www.rzfkomputer.com" />

  <!-- og facebook general-->
  <meta property="og:locale" content="en_US" />
  <meta property="og:type" content="website" />
  <meta property="og:title" content="Beranda | RZF Komputer | Computer and Peripheral Support" />
  <meta property="og:description" content="Beranda | rzfkomputer" />
  <meta property="og:url" content="https://www.rzfkomputer.com" />
  <meta property="og:site_name" content="rzfkomputer.com" />
  <meta property="og:image" content="assets/img/default/og-facebook.jpg" />
  <meta property="og:image:type" content="image/jpeg" />



  <!-- ============ icon ============-->
  <!-- web favicon-->
  <link rel="shortcut icon" href="assets/img/homescreen/favicon.ico" />

  <!-- android add to home screen-->
  <link rel="manifest" href="assets/js/data/manifest.json" />
  <meta name="mobile-web-app-capable" content="yes" />
  <meta name="theme-color" content="#388e3c" />
  <link rel="icon" type="image/png" sizes="16x16" href="assets/img/homescreen/favicon-16x16.png" />
  <link rel="icon" type="image/png" sizes="32x32" href="assets/img/homescreen/favicon-32x32.png" />
  <link rel="icon" type="image/png" sizes="96x96" href="assets/img/homescreen/favicon-96x96.png" />
  <link rel="icon" type="image/png" sizes="144x144" />
  <link rel="icon" type="image/png" sizes="192x192" href="assets/img/homescreen/android-icon-192x192.png" />

  <!-- windows microsoft-->
  <meta name="msapplication-TileColor" content="#388e3c" />
  <meta name="msapplication-TileImage" content="assets/img/homescreen/ms-icon-144x144.png" />

  <!-- apple add to home screen-->
  <meta name="apple-mobile-web-app-capable" content="yes" />
  <meta name="apple-mobile-web-app-status-bar-style" content="#388e3c" />
  <link rel="apple-touch-icon" href="assets/img/homescreen/apple-icon.png" />
  <link rel="apple-touch-icon" sizes="57x57" href="assets/img/homescreen/apple-icon-57x57.png" />
  <link rel="apple-touch-icon" sizes="60x60" href="assets/img/homescreen/apple-icon-60x60.png" />
  <link rel="apple-touch-icon" sizes="72x72" href="assets/img/homescreen/apple-icon-72x72.png" />
  <link rel="apple-touch-icon" sizes="76x76" href="assets/img/homescreen/apple-icon-76x76.png" />
  <link rel="apple-touch-icon" sizes="114x114" href="assets/img/homescreen/apple-icon-114x114.png" />
  <link rel="apple-touch-icon" sizes="120x120" href="assets/img/homescreen/apple-icon-120x120.png" />
  <link rel="apple-touch-icon" sizes="144x144" href="assets/img/homescreen/apple-icon-144x144.png" />
  <link rel="apple-touch-icon" sizes="152x152" href="assets/img/homescreen/apple-icon-152x152.png" />
  <link rel="apple-touch-icon" sizes="180x180" href="assets/img/homescreen/apple-icon-180x180.png" />
  <link rel="apple-touch-startup-image" href="assets/img/homescreen/apple-icon.png" />

  <!-- style-->
  <link rel="stylesheet" href="{{asset('assets/css/app.min.css')}}" />

</head>

<body class="hold-transition">

  @include('layouts.partials.header')

  @yield('main')

  @include('layouts.partials.footer')

  @include('layouts.partials.floatingchat')

  <!-- script-->
  <script src="assets/js/vendor.min.js"></script>
  <script src="{{asset("")}}"></script>

  <script src="assets/js/app.min.js"></script>

</body>

</html>
