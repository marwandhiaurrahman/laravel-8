@extends('rzfkomputer::layouts.master')
@section('title', 'Produk')
@section('main')
    <div class="main-site main-site--hide js-main-site">
        <!--title-page-->
        <div class="title-page title-page--pattern">
            <div class="title-page__particle" id="particles-js"></div>
            <div class="container">
                <div class="title-page__txt">
                    <h2 class="title-page__title">Hasil Pencarian :</h2>
                </div>
            </div>
        </div>
        <!--no-result-page-->
        <div class="no-result-page">
            <div class="container">
                <div class="no-result-page__content">
                    <div class="no-result-page__img"><img class="no-result-page__img__el"
                            src="{{asset('assets/img/dummy/no-result.svg')}}" alt="Tidak DItemukan" /></div>
                    <div class="no-result-page__txt">
                        <p class="no-result-page__txt__caption">Pencarian Anda dengan kata kunci <strong>{{Request::get('search')}}</strong>
                            tidak ditemukan!</p>
                    </div>
                </div>
            </div>
        </div>
        <!--end-no-result-page-->
    </div>
@endsection
