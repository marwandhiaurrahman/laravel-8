<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="refresh" content="1000" />
  <meta http-equiv="X-UA-Compatible" content="IE=9" />
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no,minimal-ui" />

  <!-- primary information-->
  <title>@yield('title') | RZF Komputer | Computer and Peripheral Support</title>
  <meta name="description" content=" @yield('title') | RZF Komputer merupakan sebuah usaha yang berfokus pada produk, inovasi dan layanan jasa di bidang teknologi dan informasi khususnya di bidang perangkat komputer, percetakan, jaringan, kasir dan lain-lain" />
  <meta name="keywords" content=" @yield('title'), | rzf, rzf komputer, jasa service komputer kuningan jawa barat, printer kasir, perangkat kasir kuningan jawa barat, pemasangan cctv jawa barat, pemasangan wi-fi jaringan jawa barat, jasa percetakan kuningan bandung sumedang kuningan majalengka cirebon tasikmalaya jawa barat indonesia" />


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
  <meta property="og:image" content="{{asset("assets/img/default/og-facebook.jpg")}}" />
  <meta property="og:image:type" content="{{asset("image/jpeg" )}}"/>



  <!-- ============ icon ============-->
  <!-- web favicon-->
  <link rel="shortcut icon" href="{{asset("assets/img/homescreen/favicon.ico")}}" />

  <!-- android add to home screen-->
  <link rel="manifest" href="{{asset("assets/js/data/manifest.json")}}" />
  <meta name="mobile-web-app-capable" content="yes" />
  <meta name="theme-color" content="#388e3c" />
  <link rel="icon" type="image/png" sizes="16x16" href="{{asset("assets/img/homescreen/favicon-16x16.png")}}" />
  <link rel="icon" type="image/png" sizes="32x32" href="{{asset("assets/img/homescreen/favicon-32x32.png")}}" />
  <link rel="icon" type="image/png" sizes="96x96" href="{{asset("assets/img/homescreen/favicon-96x96.png")}}" />
  <link rel="icon" type="image/png" sizes="144x144" />
  <link rel="icon" type="image/png" sizes="192x192" href="{{asset("assets/img/homescreen/android-icon-192x192.png" )}}"/>

  <!-- windows microsoft-->
  <meta name="msapplication-TileColor" content="#388e3c" />
  <meta name="msapplication-TileImage" content="{{asset("assets/img/homescreen/ms-icon-144x144.png" )}}"/>

  <!-- apple add to home screen-->
  <meta name="apple-mobile-web-app-capable" content="yes" />
  <meta name="apple-mobile-web-app-status-bar-style" content="#388e3c" />
  <link rel="apple-touch-icon" href="{{asset("assets/img/homescreen/apple-icon.png" )}}"/>
  <link rel="apple-touch-icon" sizes="57x57" href="{{asset("assets/img/homescreen/apple-icon-57x57.png" )}}"/>
  <link rel="apple-touch-icon" sizes="60x60" href="{{asset("assets/img/homescreen/apple-icon-60x60.png")}}" />
  <link rel="apple-touch-icon" sizes="72x72" href="{{asset("assets/img/homescreen/apple-icon-72x72.png" )}}"/>
  <link rel="apple-touch-icon" sizes="76x76" href="{{asset("assets/img/homescreen/apple-icon-76x76.png")}}" />
  <link rel="apple-touch-icon" sizes="114x114" href="{{asset("assets/img/homescreen/apple-icon-114x114.png" )}}"/>
  <link rel="apple-touch-icon" sizes="120x120" href="{{asset("assets/img/homescreen/apple-icon-120x120.png")}}" />
  <link rel="apple-touch-icon" sizes="144x144" href="{{asset("assets/img/homescreen/apple-icon-144x144.png" )}}"/>
  <link rel="apple-touch-icon" sizes="152x152" href="{{asset("assets/img/homescreen/apple-icon-152x152.png")}}" />
  <link rel="apple-touch-icon" sizes="180x180" href="{{asset("assets/img/homescreen/apple-icon-180x180.png")}}" />
  {{-- <link rel="apple-touch-startup-image" href"{{asset("assets/img/homescreen/apple-icon.png" )}}"/> --}}

  <!-- style-->
  <link rel="stylesheet" href="{{asset('assets/css/app.min.css')}}" />
  {{-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" /> --}}

</head>

<body class="hold-transition">

  @include('rzfkomputer::layouts.partials.header')

  @yield('main')

  @include('rzfkomputer::layouts.partials.footer')

  @include('rzfkomputer::layouts.partials.floatingchat')

  <!-- script-->
  <script src="{{asset("assets/js/vendor.min.js")}}"></script>

  <script src="{{asset("assets/js/app.min.js")}}"></script>

  {{-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
  <script type="text/javascript">
    $('.itemName').select2({
      placeholder: 'Select an item',
      ajax: {
        url: '/select2-autocomplete-ajax',
        dataType: 'json',
        delay: 250,
        processResults: function (data) {
          return {
            results:  $.map(data, function (item) {
                  return {
                      text: item.name,
                      id: item.id
                  }
              })
          };
        },
        cache: true
      }
    });
</script> --}}

</body>

</html>
