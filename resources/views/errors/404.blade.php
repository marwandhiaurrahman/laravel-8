@extends('rzfkomputer::layouts.master')
@section('title', 'Keranjang')

@section('main')
    <div class="main-site main-site--hide js-main-site">
        <!--page-not-found-->
        <div class="page-not-found">
            <div class="container">
                <div class="page-not-found__content">
                    <div class="page-not-found__content__img">
                        <img class="page-not-found__content__img__el" src="{{asset('assets/img/dummy/404.svg')}}" alt="Page Not Found" />
                    </div>
                    <div class="page-not-found__content__txt">
                        <h3 class="page-not-found__content__txt__title">Maaf!</h3>
                        <p class="page-not-found__content__txt__desc">Halaman yang Anda cari tidak ditemukan!</p>
                    </div>
                    <div class="page-not-found__content__txt__row">
                        <a class="btn btn--primary btn--page-not-found" href="beranda.html">Kembali ke Beranda</a>
                    </div>
                </div>
            </div>
        </div>
        <!--end-page-not-found-->
    </div>
@endsection
