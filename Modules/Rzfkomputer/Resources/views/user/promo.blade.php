@extends('rzfkomputer::layouts.master')

@section('main')
    <!-- main-->
    <div class="main-site main-site--hide js-main-site">
        <!--title-page-->
        <div class="title-page title-page--pattern">
            <div class="title-page__particle" id="particles-js"></div>
            <div class="container">
                <div class="title-page__txt">
                    <h2 class="title-page__title">Promo</h2>
                </div>
            </div>
        </div>
        <!--sale-->
        <div class="card-product Promo">
            <div class="container">
                <div class="product__wrapper">
                    <!-- card-product-item-->
                    {{-- <div class="card-product__card">
                        <div class="card-product__card__box">
                            <a class="card-product__card__link" href="product-detail.html"></a>
                            <div class="card-product__card__img">
                                <img class="card-product__card__img__el" src="assets/img/dummy/best-product-5.png"
                                    alt="Barcode Scanner" />
                            </div>
                            <div class="card-product__card__txt">
                                <h3 class="card-product__card__title">Barcode Scanner</h3>
                                <div class="card-product__card__sale">
                                    <span class="card-product__card__percentage">20%</span>
                                    <span class="card-product__card__price-carret">Rp120.0000</span>
                                </div>
                                <p class="card-product__card__price-product">Rp143.000</p>
                            </div>
                        </div>
                    </div> --}}
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
        <!--sale-->
    </div>
@endsection
