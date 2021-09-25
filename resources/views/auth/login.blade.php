{{-- @extends('adminlte::auth.login') --}}
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="refresh" content="1000" />
    <meta http-equiv="X-UA-Compatible" content="IE=9" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no,minimal-ui" />

    <!-- primary information-->
    <title>Login System | RZF Komputer | Computer and Peripheral Support</title>
    <meta name="description"
        content="Login System | RZF Komputer merupakan sebuah usaha yang berfokus pada produk, inovasi dan layanan jasa di bidang teknologi dan informasi khususnya di bidang perangkat komputer, percetakan, jaringan, kasir dan lain-lain" />
    <meta name="keywords"
        content="Login System, | jasa service komputer, printer, perangkat kasir, pemasangan cctv, pemasangan wi-fi atau jaringan, rzf, rzf komputer, percetakan, bandung, sumedang, kuningan, majalengka, cirebon, tasikmalaya, jawa barat indonesia" />

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
    <meta property="og:title" content="Login System | RZF Komputer | Computer and Peripheral Support" />
    <meta property="og:description"
        content="Login System | RZF Komputer merupakan sebuah usaha yang berfokus pada produk, inovasi dan layanan jasa di bidang teknologi dan informasi khususnya di bidang perangkat komputer, percetakan, jaringan, kasir dan lain-lain" />
    <meta property="og:url" content="https://www.rzfkomputer.com" />
    <meta property="og:site_name" content="rzfkomputer.com" />
    <meta property="og:image" content="{{ asset('assets/img/default/og-facebook.jpg') }}" />
    <meta property="og:image:type" content="image/jpeg" />



    <!-- ============ icon ============-->
    <!-- web favicon-->
    <link rel="shortcut icon" href="{{ asset('assets/img/homescreen/favicon.ico') }}" />

    <!-- android add to home screen-->
    <link rel="manifest" href="{{ asset('assets/js/data/manifest.json') }}" />
    <meta name="mobile-web-app-capable" content="yes" />
    <meta name="theme-color" content="#388e3c" />
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/img/homescreen/favicon-16x16.png') }}" />
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/img/homescreen/favicon-32x32.png') }}" />
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('assets/img/homescreen/favicon-96x96.png') }}" />
    <link rel="icon" type="image/png" sizes="144x144" />
    <link rel="icon" type="image/png" sizes="192x192"
        href="{{ asset('assets/img/homescreen/android-icon-192x192.png') }}" />

    <!-- windows microsoft-->
    <meta name="msapplication-TileColor" content="#388e3c" />
    <meta name="msapplication-TileImage" content="{{ asset('assets/img/homescreen/ms-icon-144x144.png') }}" />

    <!-- apple add to home screen-->
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="#388e3c" />
    <link rel="apple-touch-icon" href="{{ asset('assets/img/homescreen/apple-icon.png') }}" />
    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('assets/img/homescreen/apple-icon-57x57.png') }}" />
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('assets/img/homescreen/apple-icon-60x60.png') }}" />
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('assets/img/homescreen/apple-icon-72x72.png') }}" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/img/homescreen/apple-icon-76x76.png') }}" />
    <link rel="apple-touch-icon" sizes="114x114"
        href="{{ asset('assets/img/homescreen/apple-icon-114x114.png') }}" />
    <link rel="apple-touch-icon" sizes="120x120"
        href="{{ asset('assets/img/homescreen/apple-icon-120x120.png') }}" />
    <link rel="apple-touch-icon" sizes="144x144"
        href="{{ asset('assets/img/homescreen/apple-icon-144x144.png') }}" />
    <link rel="apple-touch-icon" sizes="152x152"
        href="{{ asset('assets/img/homescreen/apple-icon-152x152.png') }}" />
    <link rel="apple-touch-icon" sizes="180x180"
        href="{{ asset('assets/img/homescreen/apple-icon-180x180.png') }}" />
    <link rel="apple-touch-startup-image" href="{{ asset('assets/img/homescreen/apple-icon.png') }}" />

    <!-- style-->
    <link rel="stylesheet" href="{{ asset('assets/css/app.min.css') }}" />

</head>

<body class="hold-transition">
    <div class="main-site main-site--hide js-main-site">
        <!-- login-wallpaper-->
        <div class="login-bg"></div>
        <!-- login-container-->
        <div class="login-container">
            <div class="login-wrapper">
                <div class="login-form">
                    <a class="logo-brand" href="{{ route('admin.home') }}">
                        <img src="{{ asset('assets/img/logo/login-logo.svg') }}" />
                    </a>
                    <div class="login-head">
                        <h1 class="login-title">Welcome</h1>
                        <p class="login-description">Login to access your <br> Content Management System account</p>
                    </div>
                    <!-- login-form-->
                    <form action="{{ route('login') }}" method="post">
                        {{ csrf_field() }}

                        @if ($errors->any())
                            <div class="invalid-feedback-error">
                                <p>Authentication that you've entered is incorrect!</p>
                            </div>
                        @endif

                        <div class="login-input">
                            <label class="input-label">Email</label>
                            <input class="form-control input-block" name="username" type="text" placeholder="Enter Here"
                                autofocus="on" autocomplete="off" />
                            @if ($errors->has('username'))
                                <div class="invalid-feedback">
                                    <p>Username is required!</p>
                                </div>
                            @endif
                        </div>
                        <div class="login-input">
                            <label class="input-label">Password</label>
                            <input class="form-control input-block" name="password" type="password" autofocus="on"
                                placeholder="Enter Here" />
                            @if ($errors->has('password'))
                                <div class="invalid-feedback">
                                    <p>Password is required!</p>
                                </div>
                            @endif
                        </div>
                        <div class="login-input mt-4">
                            <button class="login-button btn-block btn-success" type="submit">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!--end-login-->
    </div>

    <!-- script-->
    <script src="{{ asset('assets/js/vendor.min.js') }}"></script>
    <script src="{{ asset('assets/js/app.min.js') }}"></script>

</body>

</html>

{{-- Email field --}}
{{-- <div class="input-group mb-3">
    <input type="email" name="email" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}"
        value="{{ old('email') }}" placeholder="{{ __('adminlte::adminlte.email') }}" autofocus>
    <div class="input-group-append">
        <div class="input-group-text">
            <span class="fas fa-envelope {{ config('adminlte.classes_auth_icon', '') }}"></span>
        </div>
    </div>
    @if ($errors->has('email'))
        <div class="invalid-feedback">
            <strong>{{ $errors->first('email') }}</strong>
        </div>
    @endif
</div> --}}

{{-- Password field --}}
{{-- <div class="input-group mb-3">
    <input type="password" name="password" class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}"
        placeholder="{{ __('adminlte::adminlte.password') }}">
    <div class="input-group-append">
        <div class="input-group-text">
            <span class="fas fa-lock {{ config('adminlte.classes_auth_icon', '') }}"></span>
        </div>
    </div>
    @if ($errors->has('password'))
        <div class="invalid-feedback">
            <strong>{{ $errors->first('password') }}</strong>
        </div>
    @endif
</div> --}}

{{-- Login field --}}
{{-- <div class="row">
    <div class="col-7">
        <div class="icheck-primary">
            <input type="checkbox" name="remember" id="remember">
            <label for="remember">{{ __('adminlte::adminlte.remember_me') }}</label>
        </div>
    </div>
    <div class="col-5">
        <button type=submit class="btn btn-block {{ config('adminlte.classes_auth_btn', 'btn-flat btn-primary') }}">
            <span class="fas fa-sign-in-alt"></span>
            {{ __('adminlte::adminlte.sign_in') }}
        </button>
    </div>
</div> --}}
