@extends('rzfkomputer::layouts.master')

@section('main')
    <!-- main-->
    <div class="main-site main-site--hide js-main-site">
        <!--banner-->
        <div class="banner">
            <div class="container">
                <div class="banner__content">
                    <div class="banner__promo js-banner-promo">
                        <!--banner-card-->
                        <div class="banner__card">
                            <a class="banner__card__link" href="#"></a>
                            <div class="banner__card__sale">
                                <p>On Sale </p>
                            </div>
                            <div class="banner__card__img">
                                <img class="banner__card__img__el" src="assets/img/dummy/laptop-asus-1.jpg" alt="Promo" />
                            </div>
                        </div>
                        <!--banner-card-->
                        <div class="banner__card">
                            <a class="banner__card__link" href="#"></a>
                            <div class="banner__card__sale">
                                <p>On Sale </p>
                            </div>
                            <div class="banner__card__img">
                                <img class="banner__card__img__el" src="assets/img/dummy/laptop-asus-2.jpg" alt="Promo" />
                            </div>
                        </div>
                        <!--banner-card-->
                        <div class="banner__card">
                            <a class="banner__card__link" href="#"></a>
                            <div class="banner__card__sale">
                                <p>On Sale </p>
                            </div>
                            <div class="banner__card__img">
                                <img class="banner__card__img__el" src="assets/img/dummy/laptop-asus-3.jpg" alt="Promo" />
                            </div>
                        </div>
                    </div>
                    <div class="banner__category">
                        <!--banner-card-->
                        <div class="banner__card">
                            <a class="banner__card__link" href="#"></a>
                            <div class="banner__card__img">
                                <img class="banner__card__img__el" src="assets/img/dummy/our-product-1.jpg"
                                    alt="Komputer" />
                            </div>
                            <div class="banner__card__txt"><button class="banner__card__txt__button" type="button">
                                    <p class="banner__card__txt__desc">Komputer</p>
                                </button></div>
                        </div>
                        <!--banner-card-->
                        <div class="banner__card">
                            <a class="banner__card__link" href="#"></a>
                            <div class="banner__card__img">
                                <img class="banner__card__img__el" src="assets/img/dummy/our-product-2.jpg" alt="Laptop" />
                            </div>
                            <div class="banner__card__txt"><button class="banner__card__txt__button" type="button">
                                    <p class="banner__card__txt__desc">Laptop</p>
                                </button></div>
                        </div>
                        <!--banner-card-->
                        <div class="banner__card">
                            <a class="banner__card__link" href="#"></a>
                            <div class="banner__card__img">
                                <img class="banner__card__img__el" src="assets/img/dummy/our-product-3.jpg" alt="Printer" />
                            </div>
                            <div class="banner__card__txt"><button class="banner__card__txt__button" type="button">
                                    <p class="banner__card__txt__desc">Printer</p>
                                </button></div>
                        </div>
                        <!--banner-card-->
                        <div class="banner__card">
                            <a class="banner__card__link" href="#"></a>
                            <div class="banner__card__img">
                                <img class="banner__card__img__el" src="assets/img/dummy/our-product-4.jpg"
                                    alt="Aksesoris" />
                            </div>
                            <div class="banner__card__txt"><button class="banner__card__txt__button" type="button">
                                    <p class="banner__card__txt__desc">Aksesoris</p>
                                </button></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end-banner-->
        <!--why-choose-us-->
        <div class="features">
            <div class="container">
                <h3 class="text-title">Mengapa Memilih Kami</h3>
                <div class="features__wrapper">
                    <!--why-choose-us-->
                    <div class="features__card">
                        <div class="features__card__box">
                            <div class="features__card__img">
                                <img class="features__card__img-el" src="assets/img/dummy/features-1.svg"
                                    alt="Free Ongkir" />
                            </div>
                            <div class="features__card__txt">
                                <h3 class="features__card__title">Free Ongkir</h3>
                                <p class="features__card__desc">Khusus wilayah ciayumajakuning</p>
                            </div>
                        </div>
                    </div>
                    <!--why-choose-us-->
                    <div class="features__card">
                        <div class="features__card__box">
                            <div class="features__card__img">
                                <img class="features__card__img-el" src="assets/img/dummy/features-2.svg"
                                    alt="Garansi Barang" />
                            </div>
                            <div class="features__card__txt">
                                <h3 class="features__card__title">Garansi Barang</h3>
                                <p class="features__card__desc">Selama barang masih 1 tahun</p>
                            </div>
                        </div>
                    </div>
                    <!--why-choose-us-->
                    <div class="features__card">
                        <div class="features__card__box">
                            <div class="features__card__img">
                                <img class="features__card__img-el" src="assets/img/dummy/features-3.svg"
                                    alt="Support Handal" />
                            </div>
                            <div class="features__card__txt">
                                <h3 class="features__card__title">Support Handal</h3>
                                <p class="features__card__desc">Menerima pelayanan di jam kerja</p>
                            </div>
                        </div>
                    </div>
                    <!--why-choose-us-->
                    <div class="features__card">
                        <div class="features__card__box">
                            <div class="features__card__img">
                                <img class="features__card__img-el" src="{{ asset('assets/img/dummy/features-4.svg') }}"
                                    alt="Belanja Aman" />
                            </div>
                            <div class="features__card__txt">
                                <h3 class="features__card__title">Belanja Aman</h3>
                                <p class="features__card__desc">Kami menjaga privasi Anda</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--why-choose-us-->
        <!-- category-->
        <div class="c-p c-p__tab card-product js-c-p">
            <div class="container">
                <div class="c-p__head">
                    <h2 class="text-title">Kategori</h2>
                    <div class="c-p__select js-c-p-select">
                        <p class="c-p__select__text">Printer</p>
                    </div>
                    <ul class="c-p__tab__control">
                        @foreach ($categoris as $item)
                            <li class="c-p__tab__control__item {{ $item->id == 1 ? 'c-p__tab__control__item--active' : '' }}"
                                data-target="{{ $item->name }}">{{ $item->name }}</li>
                        @endforeach
                    </ul>
                </div>
                <div class="c-p__content">
                    @foreach ($categoris as $item)
                        <div class="c-p__tab__pane {{ $item->id == 1 ? 'c-p__tab__pane--active' : '' }}"
                            data-pane="{{ $item->name }}">
                            <div class="c-p__wrapper card-product__body">
                                @foreach ($item->products as $product)
                                    <!-- card-product-item-->
                                    <div class="card-product__card">
                                        <div class="card-product__card__box">
                                            <a class="card-product__card__link"
                                                href="{{ route('produk-detail', $product) }}"></a>
                                            <div class="card-product__card__img">
                                                @if (!empty($product->images->first()->image))
                                                    <img class="card-product__card__img__el"
                                                        src="{{ asset('storage/product-image/' . $product->images->first()->image) }}"
                                                        alt="{{ $product->name }}" />
                                                @else
                                                    <img class="card-product__card__img__el"
                                                        src="{{ asset('assets/img/dummy/placeholder-product.png') }}"
                                                        alt="{{ $product->name }}" />
                                                @endif
                                            </div>
                                            <div class="card-product__card__txt">
                                                <h3 class="card-product__card__title">{{ $product->name }}</h3>
                                                <div class="card-product__card__sale">
                                                    {{-- <span class="card-product__card__percentage">20%</span> --}}
                                                    {{-- <span
                                                        class="card-product__card__price-carret">{{ money($product->price, 'IDR') }}</span> --}}
                                                </div>
                                                <p class="card-product__card__price-product">
                                                    {{ money($product->price, 'IDR') }}</p>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <div class="c-p__btn">
                                <a class="btn btn--secondary" href="{{ route('produk-list') }}">Lihat Selengkapnya</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- end-category-->
        <!-- sale-->
        <div class="sale">
            <h3 class="text-title">Promo</h3>
            <!--sale-items-->
            <div class="sale__content">
                <div class="sale__img">
                    <img class="sale__img-el" src="assets/img/dummy/sale-1.jpg" alt="Promo" />
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="sale__content__txt">
                        <h3 class="sale__content__txt__title">Promo Eksklusif menanti untuk Anda</h3>
                        <p class="sale__content__txt__desc">Dapatkan penawaran terbatas dari kami dan jangan sampai
                            ketinggalan</p>
                        <div class="sale__content__countdown">
                            <ul class="sale__content__countdown__list js-countdown-set">
                                <li class="sale__content__countdown__item">
                                    <h5 class="sale__content__countdown__item__number">29</h5>
                                    <span class="sale__content__countdown__item__title__text">Hari</span>
                                </li>
                                <li class="sale__content__countdown__item">
                                    <h5 class="sale__content__countdown__item__number">12</h5>
                                    <span class="sale__content__countdown__item__title__text">Jam</span>
                                </li>
                                <li class="sale__content__countdown__item">
                                    <h5 class="sale__content__countdown__item__number">10</h5>
                                    <span class="sale__content__countdown__item__title__text">Menit</span>
                                </li>
                                <li class="sale__content__countdown__item">
                                    <h5 class="sale__content__countdown__item__number">30</h5>
                                    <span class="sale__content__countdown__item__title__text">Detik</span>
                                </li>
                            </ul>
                            <a class="btn btn--primary js-button-sale" href="promo.html">Lihat Promo</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end sale-->
        <!-- card-product-->
        <div class="card-product product">
            <div class="container">
                <div class="card-product__head">
                    <h3 class="text-title">Produk Baru</h3>
                </div>
                <div class="card-product__body">
                    <div class="card-product__list">
                        @foreach ($products as $item)
                            <!-- card-product-item-->
                            <div class="card-product__card">
                                <div class="card-product__card__box">
                                    <a class="card-product__card__link" href="{{ route('produk-detail', $item) }}"></a>
                                    <div class="card-product__card__img">
                                        @if (!empty($item->images->first()->image))
                                            <img class="card-product__card__img__el"
                                                src="{{ asset('storage/product-image/' . $item->images->first()->image) }}"
                                                alt="{{ $item->name }}r" />
                                        @else
                                            <img class="card-product__card__img__el"
                                                src="{{ asset('assets/img/dummy/placeholder-product.png') }}"
                                                alt="Printer Thermal Epson 1234" />
                                        @endif

                                    </div>
                                    <div class="card-product__card__txt">
                                        <h3 class="card-product__card__title">{{ $item->name }}</h3>
                                        <p class="card-product__card__price-product">{{ money($item->price, 'IDR') }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="card-product__footer">
                    <a class="btn btn--secondary" href="produk.html">Lihat Selengkapnya</a>
                </div>
            </div>
        </div>
        <!-- card-prosuct-->
        <!-- persuasive-->
        <div class="persuasive">
            <div class="container">
                <div class="persuasive__wrapper">
                    <div class="persuasive__img">
                        <img class="persuasive__img-el" src="assets/img/dummy/man.png" />
                    </div>
                    <div class="persuasive__txt">
                        <h3 class="persuasive__txt-title">Siap bermitra dengan Kami?</h3>
                        <p class="persuasive__txt-desc">Dapatkan penawaran berkualitas dengan harga pantas</p>
                        <div class="persuasive__txt-btn">
                            <a class="btn btn--primary" href="produk.html">Langganan Sekarang</a>
                        </div>
                    </div>
                    <div class="persuasive__vertical-txt">
                        <span>RZF Komputer</span>
                    </div>
                </div>
            </div>
        </div>
        <!-- end-persuasive-->
    </div>
@endsection
