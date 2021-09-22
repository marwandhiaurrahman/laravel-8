@extends('rzfkomputer::layouts.master')

@section('main')
    <!-- main-->
    <div class="main-site main-site--hide js-main-site">
        <!--title-page-->
        <div class="title-page title-page--pattern">
            <div class="title-page__particle" id="particles-js"></div>
            <div class="container">
                <div class="title-page__txt">
                    <h2 class="title-page__title">Produk</h2>
                    <p class="title-page__desc">Beberapa produk yang kami miliki. Memahami kebutuhan Anda sebagai pelaku
                        bisnis, atau untuk kebutuhan pribadi</p>
                </div>
            </div>
        </div>
        <!--product-->
        <div class="card-product product">
            <div class="container">
                <div class="product__wrapper">
                    <div class="product__sorting js-sorting-dd">
                        <div class="product__sorting-select">
                            <h3 class="product__sorting-title">Kategori</h3>
                            <div class="product__sorting-list">
                                <a class="product__sorting-link" href="komputer">Komputer</a>
                                <a class="product__sorting-link" href="laptop">Laptop</a>
                                <a class="product__sorting-link" href="printer">Printer</a>
                                <a class="product__sorting-link" href="lainnya">Lainnya</a>
                            </div>
                        </div>
                    </div>
                    <div class="product__section">
                        @foreach ($products as $item)
                            <!-- card-product-item-->
                            <div class="card-product__card">
                                <div class="card-product__card__box">
                                    <a class="card-product__card__link" href="{{ route('produk-detail', $item) }}"></a>
                                    <div class="card-product__card__img">
                                        @if (!empty($item->images->first()->image))
                                            <img class="card-product__card__img__el"
                                                src="{{ asset('storage/product-image/' . $item->images->first()->image) }}"
                                                alt="Barcode Scanner" />
                                        @else
                                            <img class="card-product__card__img__el"
                                                src="{{ asset('assets/img/dummy/placeholder-product.png') }}"
                                                alt="{{ $item->name }}" />
                                        @endif

                                    </div>
                                    <div class="card-product__card__txt">
                                        <h3 class="card-product__card__title">{{ $item->name }}</h3>
                                        <p class="card-product__card__price-product">{{ money($item->price, 'IDR') }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <!--why-choose-us-->
    </div>
@endsection
