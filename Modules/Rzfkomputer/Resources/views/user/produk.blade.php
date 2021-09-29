@extends('rzfkomputer::layouts.master')
@section('title', 'Produk')
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
                    <div class="product__sorting js-sorting-dd js-sticky">
                        <div class="product__sorting-select">
                            {{-- {!! Form::open(array('route' => 'jurnal-umum.index','method'=>'GET')) !!} --}}

                            <h3 class="product__sorting-title">Kategori</h3>
                            <div class="product__sorting-list">
                                <a class="product__sorting-link" href="{{ route('produk-list') }}">Semua</a>
                                @foreach ($categoris as $item)
                                    <a class="product__sorting-link"
                                        href="{{ route('produk-list', 'category=' . $item->name) }}">{{ $item->name }}</a>
                                @endforeach
                                {{-- <a class="product__sorting-link" href="{{route('produk-list','category=laptop')}}">Laptop</a> --}}
                                {{-- <a class="product__sorting-link" href="{{route('produk-list','category=printer')}}">Printer</a> --}}
                                {{-- <a class="product__sorting-link" href="{{route('produk-list','category=lainnya')}}">Lainnya</a> --}}
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
                                        @if ($item->promo >= 1)
                                            <div class="card-product__card__sale">
                                                <span class="card-product__card__percentage">{{ $item->promo }} %</span>
                                                <span
                                                    class="card-product__card__price-carret">{{ money($item->price, 'IDR') }}</span>
                                            </div>
                                            <p class="card-product__card__price-product">
                                                {{ money($item->price - ($item->price * $item->promo) / 100, 'IDR') }}
                                            </p>
                                        @else
                                            <p class="card-product__card__price-product">{{ money($item->price, 'IDR') }}
                                            </p>
                                        @endif
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
