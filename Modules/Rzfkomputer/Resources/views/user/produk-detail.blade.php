@extends('rzfkomputer::layouts.master')
@section('title', 'Detail Produk')

@section('main')
    <!-- header-->
    <div class="main-site main-site--hide js-main-site">
        <!-- product-detail-->
        <div class="pdetail">
            <div class="container">
                <div class="pdetail__wrapper">
                    <div class="pdetail__row">
                        <div class="pdetail__img">
                            <div class="pdetail__img-fill">
                                @if (!empty($product->images->first()->image))
                                    <a class="js-popup-image"
                                        href="{{ asset('storage/product-image/' . $product->images->first()->image) }}"
                                        alt="Tes"><img class="pdetail__img-el"
                                            src="{{ asset('storage/product-image/' . $product->images->first()->image) }}"
                                            alt="Tes" /></a>
                                @else
                                    <a class="js-popup-image"
                                        href="{{ asset('assets/img/dummy/placeholder-product.png') }}" alt="Tes"><img
                                            class="pdetail__img-el"
                                            src="{{ asset('assets/img/dummy/placeholder-product.png') }}" alt="Tes" /></a>
                                @endif
                            </div>
                            <div class="pdetail__img-detail">
                                @foreach ($product->images->except( $product->images->first()->id) as $item)
                                    <div class="pdetail__img-box">
                                        <div class="pdetail__img-img">

                                            <a class="js-popup-image"
                                                href="{{ asset('storage/product-image/' . $item->image) }}" alt="Tes"><img
                                                    class="pdetail__img-el-d"
                                                    src="{{ asset('storage/product-image/' . $item->image) }}"
                                                    alt="Tes" /></a>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <!--product-detail-form-->
                        <div class="pdetail__form">
                            {{-- <form action="keranjang-belanja.html" method="get" autocomplete="off"> --}}
                            <h3 class="pdetail__form__name">{{ $product->name }}</h3>
                            <div class="pdetail__form__summary">{{ $product->review }}</div>
                            <div class="pdetail__form__count-wrapper">
                                <h3 class="pdetail__form__info">Ukuran :</h3>
                                <ul class="pdetail__size">
                                    <li class="pdetail__size__item">
                                        <input class="pdetail__size__input" type="radio" name="size" value="16GB" />
                                        <span class="pdetail__size__box">16GB</span>
                                    </li>
                                    <li class="pdetail__size__item">
                                        <input class="pdetail__size__input" type="radio" name="size" value="32GB" />
                                        <span class="pdetail__size__box">32GB</span>
                                    </li>
                                    <li class="pdetail__size__item">
                                        <input class="pdetail__size__input" type="radio" name="size" value="64GB" />
                                        <span class="pdetail__size__box">64GB</span>
                                    </li>
                                    <li class="pdetail__size__item">
                                        <input class="pdetail__size__input" type="radio" name="size" value="72GB" />
                                        <span class="pdetail__size__box">72GB</span>
                                    </li>
                                </ul>
                                <h3 class="pdetail__form__info">Warna :</h3>
                                <ul class="pdetail__color">
                                    <li class="pdetail__color__item">
                                        <input class="pdetail__color__input" type="radio" name="color" value="Blue Black" />
                                        <span class="pdetail__color__box">Blue Black</span>
                                    </li>
                                    <li class="pdetail__color__item">
                                        <input class="pdetail__color__input" type="radio" name="color" value="Green" />
                                        <span class="pdetail__color__box">Green</span>
                                    </li>
                                    <li class="pdetail__color__item">
                                        <input class="pdetail__color__input" type="radio" name="color" value="Red" />
                                        <span class="pdetail__color__box">Red</span>
                                    </li>
                                    <li class="pdetail__color__item">
                                        <input class="pdetail__color__input" type="radio" name="color" value="Gold" />
                                        <span class="pdetail__color__box">Gold</span>
                                    </li>
                                </ul>
                                <h3 class="pdetail__form__info">Kategori :</h3>
                                <p>Komputer</p>
                                <h3 class="pdetail__form__info">Harga :</h3>
                                <p class="js-price">{{ money($product->price, 'IDR') }}-,</p>
                                <h3 class="pdetail__form__info">Stok Tersedia : </h3>
                                <p class="js-inventory">{{ $product->stock }}</p>
                                <form action="{{ route('cart_store', $product) }}" method="POST">
                                    @csrf
                                    <input type="hidden" value="{{ $product->id }}" name="product_id">
                                    <h3 class="pdetail__form__count">Jumlah :</h3>
                                    <div class="pdetail__form__row">
                                        <button class="pdetail__form__min btnMin" type="button">
                                            <i class="rzfkomputer-minus"></i></button>

                                        <input class="pdetail__form__quantity js-input-qty" type="number" value="1" min="1"
                                            name="quantity" />

                                        <button class="pdetail__form__max btnMax" type="button">
                                            <i class="rzfkomputer-add"></i></button>

                                        <p class="inventory-alert">Maks. pembelian barang ini 1 item, kurangi pembelianmu,
                                            ya!
                                        </p>
                                    </div>
                                    <input type="submit" class="btn btn--primary btn--cart" value="Masukkan Keranjang">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--product-detail-tabs-->
        <div class="pdetail__tab js-tabs">
            <ul class="pdetail__tab__nav-tab">
                <li class="tab-item active" data-target="tabs-1">Deskripsi</li>
                <li class="tab-item" data-target="tabs-2">Spesifikasi</li>
            </ul>
            <div class="container">
                <div class="tab-content">
                    <div class="tab-pane active" data-pane="tabs-1">
                        <h3 class="tab-pane__name">{{ $product->name }}</h3>
                        <p class="tab-pane__desc">{{ $product->description }}</p>
                    </div>
                    <div class="tab-pane" data-pane="tabs-2">
                        <table class="customers">
                            <thead></thead>
                            <tbody>
                                <tr>
                                    <td>Stok</td>
                                    <td>5</td>
                                </tr>
                                <tr>
                                    <td>Operating System</td>
                                    <td>Windows 10</td>
                                </tr>
                                <tr>
                                    <td>Prosesor</td>
                                    <td>AMD A6-6400 Dual Core (3.9 GHZ)</td>
                                </tr>
                                <tr>
                                    <td>Mainboard</td>
                                    <td>Biostar Hifi A70U3P (VGA Onboard 2GB)</td>
                                </tr>
                                <tr>
                                    <td>RAM</td>
                                    <td>V-GEN DDR3 8GB (2X4GB) PC 12800</td>
                                </tr>
                                <tr>
                                    <td>Harddisk</td>
                                    <td>SEAGATE 500GB</td>
                                </tr>
                                <tr>
                                    <td>Casing</td>
                                    <td>Powelogic Futura NEO + PSU 450 W</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- product-detail-->
        <!-- card-product-->
        <div class="card-product product">
            <div class="container">
                <div class="card-product__head">
                    <h3 class="text-title">Produk Lainnya</h3>
                </div>
                <div class="card-product__body">
                    <div class="card-product__list">
                        <!-- card-product-item-->
                        <div class="card-product__card">
                            <div class="card-product__card__box">
                                <a class="card-product__card__link" href="product-detail.html"></a>
                                <div class="card-product__card__img">
                                    <img class="card-product__card__img__el" src="assets/img/dummy/best-product-1.png"
                                        alt="Sandisk Ultra Seagate Gytex Xyren 16GB" />
                                </div>
                                <div class="card-product__card__txt">
                                    <h3 class="card-product__card__title">Sandisk Ultra Seagate Gytex Xyren 16GB</h3>
                                    <p class="card-product__card__price-product">Rp143.000</p>
                                </div>
                            </div>
                        </div>
                        <!-- card-product-item-->
                        <div class="card-product__card">
                            <div class="card-product__card__box">
                                <a class="card-product__card__link" href="product-detail.html"></a>
                                <div class="card-product__card__img">
                                    <img class="card-product__card__img__el" src="assets/img/dummy/best-product-2.png"
                                        alt="Printer Thermal" />
                                </div>
                                <div class="card-product__card__txt">
                                    <h3 class="card-product__card__title">Printer Thermal</h3>
                                    <div class="card-product__card__sale">
                                        <span class="card-product__card__percentage">20%</span>
                                        <span class="card-product__card__price-carret">Rp120.000</span>
                                    </div>
                                    <p class="card-product__card__price-product">Rp143.000</p>
                                </div>
                            </div>
                        </div>
                        <!-- card-product-item-->
                        <div class="card-product__card">
                            <div class="card-product__card__box">
                                <a class="card-product__card__link" href="product-detail.html"></a>
                                <div class="card-product__card__img">
                                    <img class="card-product__card__img__el" src="assets/img/dummy/best-product-3.png"
                                        alt="TP Link" />
                                </div>
                                <div class="card-product__card__txt">
                                    <h3 class="card-product__card__title">TP Link</h3>
                                    <p class="card-product__card__price-product">Rp143.000</p>
                                </div>
                            </div>
                        </div>
                        <!-- card-product-item-->
                        <div class="card-product__card">
                            <div class="card-product__card__box">
                                <a class="card-product__card__link" href="product-detail.html"></a>
                                <div class="card-product__card__img">
                                    <img class="card-product__card__img__el" src="assets/img/dummy/best-product-4.png"
                                        alt="Logitech Mouse" />
                                </div>
                                <div class="card-product__card__txt">
                                    <h3 class="card-product__card__title">Logitech Mouse</h3>
                                    <p class="card-product__card__price-product">Rp143.000</p>
                                </div>
                            </div>
                        </div>
                        <!-- card-product-item-->
                        <div class="card-product__card">
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
                                        <span class="card-product__card__price-carret">Rp120.000</span>
                                    </div>
                                    <p class="card-product__card__price-product">Rp143.000</p>
                                </div>
                            </div>
                        </div>
                        <!-- card-product-item-->
                        <div class="card-product__card">
                            <div class="card-product__card__box">
                                <a class="card-product__card__link" href="product-detail.html"></a>
                                <div class="card-product__card__img">
                                    <img class="card-product__card__img__el" src="assets/img/dummy/best-product-6.png"
                                        alt="Headphone Gamming Blue Black for Business and Gamming" />
                                </div>
                                <div class="card-product__card__txt">
                                    <h3 class="card-product__card__title">Headphone Gamming Blue Black for Business and
                                        Gamming</h3>
                                    <div class="card-product__card__sale">
                                        <span class="card-product__card__percentage">20%</span>
                                        <span class="card-product__card__price-carret">Rp120.000</span>
                                    </div>
                                    <p class="card-product__card__price-product">Rp143.000</p>
                                </div>
                            </div>
                        </div>
                        <!-- card-product-item-->
                        <div class="card-product__card">
                            <div class="card-product__card__box">
                                <a class="card-product__card__link" href="product-detail.html"></a>
                                <div class="card-product__card__img">
                                    <img class="card-product__card__img__el" src="assets/img/dummy/best-product-2.png"
                                        alt="Printer Thermal" />
                                </div>
                                <div class="card-product__card__txt">
                                    <h3 class="card-product__card__title">Printer Thermal</h3>
                                    <p class="card-product__card__price-product">Rp143.000</p>
                                </div>
                            </div>
                        </div>
                        <!-- card-product-item-->
                        <div class="card-product__card">
                            <div class="card-product__card__box">
                                <a class="card-product__card__link" href="product-detail.html"></a>
                                <div class="card-product__card__img">
                                    <img class="card-product__card__img__el" src="assets/img/dummy/best-product-1.png"
                                        alt="Sandisk Ultra Seagate Gytex Xyren 16GB" />
                                </div>
                                <div class="card-product__card__txt">
                                    <h3 class="card-product__card__title">Sandisk Ultra Seagate Gytex Xyren 16GB</h3>
                                    <div class="card-product__card__sale">
                                        <span class="card-product__card__percentage">20%</span>
                                        <span class="card-product__card__price-carret">Rp120.000</span>
                                    </div>
                                    <p class="card-product__card__price-product">Rp143.000</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-product__footer">
                    <a class="btn btn--secondary" href="produk.html">Lihat Penawaran Lainnya</a>
                </div>
            </div>
        </div>
        <!-- end-card-product-->
    </div>
@endsection
