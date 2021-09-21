@extends('layouts.master')

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
                                    <a class="card-product__card__link" href="produkdetail"></a>
                                    <div class="card-product__card__img">
                                        @if (!empty($item->images->first()->image))
                                            <img class="card-product__card__img__el"
                                                src="{{ asset('storage/product-image/' . $item->images->first()->image) }}"
                                                alt="Barcode Scanner" />
                                        @else
                                            {{-- <img class="card-product__card__img__el"
                                                        src="assets/img/dummy/printer-thermal.jpeg"
                                                        alt="Printer Thermal Epson 1234" /> --}}
                                        @endif

                                    </div>
                                    <div class="card-product__card__txt">
                                        <h3 class="card-product__card__title">Barcode Scanner</h3>
                                        <p class="card-product__card__price-product">Rp143.000</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        {{-- <div>
                            <!-- card-product-item-->
                            <div class="card-product__card">
                                <div class="card-product__card__box">
                                    <a class="card-product__card__link" href="produkdetail"></a>
                                    <div class="card-product__card__img">
                                        <img class="card-product__card__img__el" src="assets/img/dummy/best-product-2.png"
                                            alt="Printer Thermal" />
                                    </div>
                                    <div class="card-product__card__txt">
                                        <h3 class="card-product__card__title">Printer Thermal</h3>
                                        <div class="card-product__card__sale">
                                            <span class="card-product__card__percentage">20%</span>
                                            <span class="card-product__card__price-carret">Rp120.0000</span>
                                        </div>
                                        <p class="card-product__card__price-product">Rp143.000</p>
                                    </div>
                                </div>
                            </div>
                            <!-- card-product-item-->
                            <div class="card-product__card">
                                <div class="card-product__card__box">
                                    <a class="card-product__card__link" href="produkdetail"></a>
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
                                    <a class="card-product__card__link" href="produkdetail"></a>
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
                                    <a class="card-product__card__link" href="produkdetail"></a>
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
                            </div>
                            <!-- card-product-item-->
                            <div class="card-product__card">
                                <div class="card-product__card__box">
                                    <a class="card-product__card__link" href="produkdetail"></a>
                                    <div class="card-product__card__img">
                                        <img class="card-product__card__img__el" src="assets/img/dummy/best-product-6.png"
                                            alt="Headphone Gamming Blue Black for Business and Gamming" />
                                    </div>
                                    <div class="card-product__card__txt">
                                        <h3 class="card-product__card__title">Headphone Gamming Blue Black for Business and
                                            Gamming</h3>
                                        <div class="card-product__card__sale">
                                            <span class="card-product__card__percentage">20%</span>
                                            <span class="card-product__card__price-carret">Rp120.0000</span>
                                        </div>
                                        <p class="card-product__card__price-product">Rp143.000</p>
                                    </div>
                                </div>
                            </div>
                            <!-- card-product-item-->
                            <div class="card-product__card">
                                <div class="card-product__card__box">
                                    <a class="card-product__card__link" href="produkdetail"></a>
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
                                    <a class="card-product__card__link" href="produkdetail"></a>
                                    <div class="card-product__card__img">
                                        <img class="card-product__card__img__el" src="assets/img/dummy/best-product-4.png"
                                            alt="Mouse Logitech" />
                                    </div>
                                    <div class="card-product__card__txt">
                                        <h3 class="card-product__card__title">Mouse Logitech</h3>
                                        <div class="card-product__card__sale">
                                            <span class="card-product__card__percentage">20%</span>
                                            <span class="card-product__card__price-carret">Rp120.0000</span>
                                        </div>
                                        <p class="card-product__card__price-product">Rp143.000</p>
                                    </div>
                                </div>
                            </div>
                            <!-- card-product-item-->
                            <div class="card-product__card">
                                <div class="card-product__card__box">
                                    <a class="card-product__card__link" href="produkdetail"></a>
                                    <div class="card-product__card__img">
                                        <img class="card-product__card__img__el" src="assets/img/dummy/best-product-1.png"
                                            alt="Sandisk Ultra Seagate Gytex Xyren 16GB" />
                                    </div>
                                    <div class="card-product__card__txt">
                                        <h3 class="card-product__card__title">Sandisk Ultra Seagate Gytex Xyren 16GB</h3>
                                        <div class="card-product__card__sale">
                                            <span class="card-product__card__percentage">20%</span>
                                            <span class="card-product__card__price-carret">Rp120.0000</span>
                                        </div>
                                        <p class="card-product__card__price-product">Rp143.000</p>
                                    </div>
                                </div>
                            </div>
                            <!-- card-product-item-->
                            <div class="card-product__card">
                                <div class="card-product__card__box">
                                    <a class="card-product__card__link" href="produkdetail"></a>
                                    <div class="card-product__card__img">
                                        <img class="card-product__card__img__el" src="assets/img/dummy/best-product-6.png"
                                            alt="Headphone Ultra XD Blue Black" />
                                    </div>
                                    <div class="card-product__card__txt">
                                        <h3 class="card-product__card__title">Headphone Ultra XD Blue Black</h3>
                                        <div class="card-product__card__sale">
                                            <span class="card-product__card__percentage">20%</span>
                                            <span class="card-product__card__price-carret">Rp120.0000</span>
                                        </div>
                                        <p class="card-product__card__price-product">Rp143.000</p>
                                    </div>
                                </div>
                            </div>
                            <!-- card-product-item-->
                            <div class="card-product__card">
                                <div class="card-product__card__box">
                                    <a class="card-product__card__link" href="produkdetail"></a>
                                    <div class="card-product__card__img">
                                        <img class="card-product__card__img__el" src="assets/img/dummy/best-product-3.png"
                                            alt="TP-Link" />
                                    </div>
                                    <div class="card-product__card__txt">
                                        <h3 class="card-product__card__title">TP-Link</h3>
                                        <div class="card-product__card__sale">
                                            <span class="card-product__card__percentage">20%</span>
                                            <span class="card-product__card__price-carret">Rp120.0000</span>
                                        </div>
                                        <p class="card-product__card__price-product">Rp143.000</p>
                                    </div>
                                </div>
                            </div>
                            <!-- card-product-item-->
                            <div class="card-product__card">
                                <div class="card-product__card__box">
                                    <a class="card-product__card__link" href="produkdetail"></a>
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
                            </div>
                            <!-- card-product-item-->
                            <div class="card-product__card">
                                <div class="card-product__card__box">
                                    <a class="card-product__card__link" href="produkdetail"></a>
                                    <div class="card-product__card__img">
                                        <img class="card-product__card__img__el" src="assets/img/dummy/best-product-2.png"
                                            alt="Printer Thermal" />
                                    </div>
                                    <div class="card-product__card__txt">
                                        <h3 class="card-product__card__title">Printer Thermal</h3>
                                        <div class="card-product__card__sale">
                                            <span class="card-product__card__percentage">20%</span>
                                            <span class="card-product__card__price-carret">Rp120.0000</span>
                                        </div>
                                        <p class="card-product__card__price-product">Rp143.000</p>
                                    </div>
                                </div>
                            </div>
                            <!-- card-product-item-->
                            <div class="card-product__card">
                                <div class="card-product__card__box">
                                    <a class="card-product__card__link" href="produkdetail"></a>
                                    <div class="card-product__card__img">
                                        <img class="card-product__card__img__el" src="assets/img/dummy/best-product-6.png"
                                            alt="Headphone Ultra XD Blue Black" />
                                    </div>
                                    <div class="card-product__card__txt">
                                        <h3 class="card-product__card__title">Headphone Ultra XD Blue Black</h3>
                                        <div class="card-product__card__sale">
                                            <span class="card-product__card__percentage">20%</span>
                                            <span class="card-product__card__price-carret">Rp120.0000</span>
                                        </div>
                                        <p class="card-product__card__price-product">Rp143.000</p>
                                    </div>
                                </div>
                            </div>
                            <!-- card-product-item-->
                            <div class="card-product__card">
                                <div class="card-product__card__box">
                                    <a class="card-product__card__link" href="produkdetail"></a>
                                    <div class="card-product__card__img">
                                        <img class="card-product__card__img__el" src="assets/img/dummy/best-product-4.png"
                                            alt="Mouse Logitech" />
                                    </div>
                                    <div class="card-product__card__txt">
                                        <h3 class="card-product__card__title">Mouse Logitech</h3>
                                        <div class="card-product__card__sale">
                                            <span class="card-product__card__percentage">20%</span>
                                            <span class="card-product__card__price-carret">Rp120.0000</span>
                                        </div>
                                        <p class="card-product__card__price-product">Rp143.000</p>
                                    </div>
                                </div>
                            </div>
                            <!-- card-product-item-->
                            <div class="card-product__card">
                                <div class="card-product__card__box">
                                    <a class="card-product__card__link" href="produkdetail"></a>
                                    <div class="card-product__card__img">
                                        <img class="card-product__card__img__el" src="assets/img/dummy/best-product-2.png"
                                            alt="Printer Thermal" />
                                    </div>
                                    <div class="card-product__card__txt">
                                        <h3 class="card-product__card__title">Printer Thermal</h3>
                                        <div class="card-product__card__sale">
                                            <span class="card-product__card__percentage">20%</span>
                                            <span class="card-product__card__price-carret">Rp120.0000</span>
                                        </div>
                                        <p class="card-product__card__price-product">Rp143.000</p>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
        <!--why-choose-us-->
    </div>
@endsection
