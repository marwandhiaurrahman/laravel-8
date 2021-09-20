@extends('layouts.master')

@section('main')
    <!-- main-->
    <div class="main-site main-site--hide js-main-site">
        <!-- hero-banner-->
        <div class="hero-banner js-hero-banner">
            <!--hero-banner__item-->
            <div class="hero-banner__item">
                <div class="hero-banner__img">
                    <img class="hero-banner__img__el" src="assets/img/dummy/hero-banner.png"
                        alt="Nyari perangkat komputer terjangkau? Di sini tempatnya..." />
                </div>
                <div class="hero-banner__txt">
                    <div class="hero-banner__middle-align">
                        <div class="container">
                            <div class="hero-banner__txt__wrapper">
                                <h2 class="hero-banner__title">Nyari perangkat komputer terjangkau? Di sini tempatnya...</h2>
                                <p class="hero-banner__desc">Dengan produk yang kami miliki diharapkan bisa memenuhi
                                    kebutuhan Anda. Dapatkan penawaran berkualitas dengan harga yang pantas</p>
                            </div>
                            <div class="hero-banner__btn">
                                <a class="btn btn--primary" href="produk.html">Lihat Produk</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--hero-banner__item-->
            <div class="hero-banner__item">
                <div class="hero-banner__img">
                    <img class="hero-banner__img__el" src="assets/img/dummy/hero-banner-2.png"
                        alt="Saya ingin hardware spek tinggi" />
                </div>
                <div class="hero-banner__txt">
                    <div class="hero-banner__middle-align">
                        <div class="container">
                            <div class="hero-banner__txt__wrapper">
                                <h2 class="hero-banner__title">Saya ingin hardware spek tinggi</h2>
                                <p class="hero-banner__desc">Dengan produk yang kami miliki diharapkan bisa memenuhi
                                    kebutuhan Anda. Dapatkan penawaran berkualitas dengan harga yang pantas</p>
                            </div>
                            <div class="hero-banner__btn">
                                <a class="btn btn--primary" href="produk.html">Lihat Produk</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--hero-banner__item-->
            <div class="hero-banner__item">
                <div class="hero-banner__img">
                    <img class="hero-banner__img__el" src="assets/img/dummy/hero-banner-3.png"
                        alt="Tak perlu khawatir lagi soal originalitas barang" />
                </div>
                <div class="hero-banner__txt">
                    <div class="hero-banner__middle-align">
                        <div class="container">
                            <div class="hero-banner__txt__wrapper">
                                <h2 class="hero-banner__title">Tak perlu khawatir lagi soal originalitas barang</h2>
                                <p class="hero-banner__desc">Dengan produk yang kami miliki diharapkan bisa memenuhi
                                    kebutuhan Anda. Dapatkan penawaran berkualitas dengan harga yang pantas</p>
                            </div>
                            <div class="hero-banner__btn">
                                <a class="btn btn--primary" href="produk.html">Lihat Produk</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- hero-banner-->
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
                                <img class="features__card__img-el" src="assets/img/dummy/features-4.svg"
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
        <!--our-product-->
        <div class="our-product">
            <div class="container">
                <h3 class="text-title">Produk Kami</h3>
                <div class="our-product__wrapper">
                    <!--our-product-items-->
                    <div class="our-product__card">
                        <div class="our-product__card__box">
                            <div class="our-product__card__img-wrapper">
                                <a class="our-product__card__img-link" href="komputer.html">
                                    <img class="our-product__card__img-el" src="assets/img/dummy/our-product-1.jpg"
                                        alt="Komputer Kasir" /></a>
                                <div class="our-product__card__img-detail">
                                    <h3 class="our-product__card__img-name">Komputer Kasir</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--our-product-items-->
                    <div class="our-product__card">
                        <div class="our-product__card__box">
                            <div class="our-product__card__img-wrapper">
                                <a class="our-product__card__img-link" href="laptop.html">
                                    <img class="our-product__card__img-el" src="assets/img/dummy/our-product-2.jpg"
                                        alt="Laptop" /></a>
                                <div class="our-product__card__img-detail">
                                    <h3 class="our-product__card__img-name">Laptop</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--our-product-items-->
                    <div class="our-product__card">
                        <div class="our-product__card__box">
                            <div class="our-product__card__img-wrapper">
                                <a class="our-product__card__img-link" href="product-detail.html">
                                    <img class="our-product__card__img-el" src="assets/img/dummy/our-product-3.jpg"
                                        alt="Printer" /></a>
                                <div class="our-product__card__img-detail">
                                    <h3 class="our-product__card__img-name">Printer</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--our-product-items-->
                    <div class="our-product__card">
                        <div class="our-product__card__box">
                            <div class="our-product__card__img-wrapper">
                                <a class="our-product__card__img-link" href="aksesoris-dan-lainnya.html">
                                    <img class="our-product__card__img-el" src="assets/img/dummy/our-product-4.jpg"
                                        alt="Aksesoris dan Lainnya" /></a>
                                <div class="our-product__card__img-detail">
                                    <h3 class="our-product__card__img-name">Aksesoris dan Lainnya</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end-product-->
        <!-- category-->
        <div class="c-p c-p__tab card-product js-c-p">
            <div class="container">
                <div class="c-p__head">
                    <h2 class="text-title">Kategori</h2>
                    <div class="c-p__select js-c-p-select">
                        <p class="c-p__select__text">Komputer</p>
                    </div>
                    <ul class="c-p__tab__control">
                        <li class="c-p__tab__control__item c-p__tab__control__item--active" data-target="komputer">Komputer
                        </li>
                        <li class="c-p__tab__control__item" data-target="printer">Printer</li>
                        <li class="c-p__tab__control__item" data-target="laptop">Laptop</li>
                        <li class="c-p__tab__control__item" data-target="lain-lain">Lain-lain</li>
                    </ul>
                </div>
                <div class="c-p__content">
                    <div class="c-p__tab__pane c-p__tab__pane--active" data-pane="komputer">
                        <div class="c-p__wrapper card-product__body">
                            <!-- card-product-item-->
                            <div class="card-product__card">
                                <div class="card-product__card__box">
                                    <a class="card-product__card__link" href="product-detail.html"></a>
                                    <div class="card-product__card__img">
                                        <img class="card-product__card__img__el" src="assets/img/dummy/lenovo-1.png"
                                            alt="Lenovo PC Core i3 Spek Gamming Ultra Ryzen" />
                                    </div>
                                    <div class="card-product__card__txt">
                                        <h3 class="card-product__card__title">Lenovo PC Core i3 Spek Gamming Ultra Ryzen
                                        </h3>
                                        <p class="card-product__card__price-product">Rp120.000</p>
                                    </div>
                                </div>
                            </div>
                            <!-- card-product-item-->
                            <div class="card-product__card">
                                <div class="card-product__card__box">
                                    <a class="card-product__card__link" href="product-detail.html"></a>
                                    <div class="card-product__card__img">
                                        <img class="card-product__card__img__el" src="assets/img/dummy/lenovo-1.png"
                                            alt="Lenovo PC Core i3 Spek Gamming Ultra Ryzen" />
                                    </div>
                                    <div class="card-product__card__txt">
                                        <h3 class="card-product__card__title">Lenovo PC Core i3 Spek Gamming Ultra Ryzen
                                        </h3>
                                        <p class="card-product__card__price-product">Rp120.000</p>
                                    </div>
                                </div>
                            </div>
                            <!-- card-product-item-->
                            <div class="card-product__card">
                                <div class="card-product__card__box">
                                    <a class="card-product__card__link" href="product-detail.html"></a>
                                    <div class="card-product__card__img">
                                        <img class="card-product__card__img__el" src="assets/img/dummy/lenovo-1.png"
                                            alt="Lenovo PC Core i3 Spek Gamming Ultra Ryzen" />
                                    </div>
                                    <div class="card-product__card__txt">
                                        <h3 class="card-product__card__title">Lenovo PC Core i3 Spek Gamming Ultra Ryzen
                                        </h3>
                                        <div class="card-product__card__sale">
                                            <span class="card-product__card__percentage">20%</span>
                                            <span class="card-product__card__price-carret">Rp143.0000</span>
                                        </div>
                                        <p class="card-product__card__price-product">Rp120.000</p>
                                    </div>
                                </div>
                            </div>
                            <!-- card-product-item-->
                            <div class="card-product__card">
                                <div class="card-product__card__box">
                                    <a class="card-product__card__link" href="product-detail.html"></a>
                                    <div class="card-product__card__img">
                                        <img class="card-product__card__img__el" src="assets/img/dummy/lenovo-1.png"
                                            alt="Lenovo PC Core i3 Spek Gamming Ultra Ryzen" />
                                    </div>
                                    <div class="card-product__card__txt">
                                        <h3 class="card-product__card__title">Lenovo PC Core i3 Spek Gamming Ultra Ryzen
                                        </h3>
                                        <div class="card-product__card__sale">
                                            <span class="card-product__card__percentage">20%</span>
                                            <span class="card-product__card__price-carret">Rp143.0000</span>
                                        </div>
                                        <p class="card-product__card__price-product">Rp120.000</p>
                                    </div>
                                </div>
                            </div>
                            <!-- card-product-item-->
                            <div class="card-product__card">
                                <div class="card-product__card__box">
                                    <a class="card-product__card__link" href="product-detail.html"></a>
                                    <div class="card-product__card__img">
                                        <img class="card-product__card__img__el" src="assets/img/dummy/lenovo-1.png"
                                            alt="Lenovo PC Core i3 Spek Gamming Ultra Ryzen" />
                                    </div>
                                    <div class="card-product__card__txt">
                                        <h3 class="card-product__card__title">Lenovo PC Core i3 Spek Gamming Ultra Ryzen
                                        </h3>
                                        <div class="card-product__card__sale">
                                            <span class="card-product__card__percentage">20%</span>
                                            <span class="card-product__card__price-carret">Rp143.0000</span>
                                        </div>
                                        <p class="card-product__card__price-product">Rp120.000</p>
                                    </div>
                                </div>
                            </div>
                            <!-- card-product-item-->
                            <div class="card-product__card">
                                <div class="card-product__card__box">
                                    <a class="card-product__card__link" href="product-detail.html"></a>
                                    <div class="card-product__card__img">
                                        <img class="card-product__card__img__el" src="assets/img/dummy/lenovo-1.png"
                                            alt="Lenovo PC Core i3 Spek Gamming Ultra Ryzen" />
                                    </div>
                                    <div class="card-product__card__txt">
                                        <h3 class="card-product__card__title">Lenovo PC Core i3 Spek Gamming Ultra Ryzen
                                        </h3>
                                        <div class="card-product__card__sale">
                                            <span class="card-product__card__percentage">20%</span>
                                            <span class="card-product__card__price-carret">Rp143.0000</span>
                                        </div>
                                        <p class="card-product__card__price-product">Rp120.000</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="c-p__btn">
                            <a class="btn btn--secondary" href="produk.html">Lihat Selengkapnya</a>
                        </div>
                    </div>
                    <div class="c-p__tab__pane" data-pane="printer">
                        <div class="c-p__wrapper card-product__body">
                            <!-- card-product-item-->
                            <div class="card-product__card">
                                <div class="card-product__card__box">
                                    <a class="card-product__card__link" href="product-detail.html"></a>
                                    <div class="card-product__card__img">
                                        <img class="card-product__card__img__el"
                                            src="assets/img/dummy/printer-thermal.jpeg" alt="Printer Thermal Epson 1234" />
                                    </div>
                                    <div class="card-product__card__txt">
                                        <h3 class="card-product__card__title">Printer Thermal Epson 1234</h3>
                                        <p class="card-product__card__price-product">Rp120.000</p>
                                    </div>
                                </div>
                            </div>
                            <!-- card-product-item-->
                            <div class="card-product__card">
                                <div class="card-product__card__box">
                                    <a class="card-product__card__link" href="product-detail.html"></a>
                                    <div class="card-product__card__img">
                                        <img class="card-product__card__img__el"
                                            src="assets/img/dummy/printer-thermal.jpeg" alt="Printer Thermal Epson 1234" />
                                    </div>
                                    <div class="card-product__card__txt">
                                        <h3 class="card-product__card__title">Printer Thermal Epson 1234</h3>
                                        <div class="card-product__card__sale">
                                            <span class="card-product__card__percentage">20%</span>
                                            <span class="card-product__card__price-carret">Rp143.0000</span>
                                        </div>
                                        <p class="card-product__card__price-product">Rp120.000</p>
                                    </div>
                                </div>
                            </div>
                            <!-- card-product-item-->
                            <div class="card-product__card">
                                <div class="card-product__card__box">
                                    <a class="card-product__card__link" href="product-detail.html"></a>
                                    <div class="card-product__card__img">
                                        <img class="card-product__card__img__el"
                                            src="assets/img/dummy/printer-thermal.jpeg" alt="Printer Thermal Epson 1234" />
                                    </div>
                                    <div class="card-product__card__txt">
                                        <h3 class="card-product__card__title">Printer Thermal Epson 1234</h3>
                                        <p class="card-product__card__price-product">Rp120.000</p>
                                    </div>
                                </div>
                            </div>
                            <!-- card-product-item-->
                            <div class="card-product__card">
                                <div class="card-product__card__box">
                                    <a class="card-product__card__link" href="product-detail.html"></a>
                                    <div class="card-product__card__img">
                                        <img class="card-product__card__img__el"
                                            src="assets/img/dummy/printer-thermal.jpeg" alt="Printer Thermal Epson 1234" />
                                    </div>
                                    <div class="card-product__card__txt">
                                        <h3 class="card-product__card__title">Printer Thermal Epson 1234</h3>
                                        <p class="card-product__card__price-product">Rp120.000</p>
                                    </div>
                                </div>
                            </div>
                            <!-- card-product-item-->
                            <div class="card-product__card">
                                <div class="card-product__card__box">
                                    <a class="card-product__card__link" href="product-detail.html"></a>
                                    <div class="card-product__card__img">
                                        <img class="card-product__card__img__el"
                                            src="assets/img/dummy/printer-thermal.jpeg" alt="Printer Thermal Epson 1234" />
                                    </div>
                                    <div class="card-product__card__txt">
                                        <h3 class="card-product__card__title">Printer Thermal Epson 1234</h3>
                                        <div class="card-product__card__sale">
                                            <span class="card-product__card__percentage">20%</span>
                                            <span class="card-product__card__price-carret">Rp143.0000</span>
                                        </div>
                                        <p class="card-product__card__price-product">Rp120.000</p>
                                    </div>
                                </div>
                            </div>
                            <!-- card-product-item-->
                            <div class="card-product__card">
                                <div class="card-product__card__box">
                                    <a class="card-product__card__link" href="product-detail.html"></a>
                                    <div class="card-product__card__img">
                                        <img class="card-product__card__img__el"
                                            src="assets/img/dummy/printer-thermal.jpeg" alt="Printer Thermal Epson 1234" />
                                    </div>
                                    <div class="card-product__card__txt">
                                        <h3 class="card-product__card__title">Printer Thermal Epson 1234</h3>
                                        <div class="card-product__card__sale">
                                            <span class="card-product__card__percentage">20%</span>
                                            <span class="card-product__card__price-carret">Rp143.0000</span>
                                        </div>
                                        <p class="card-product__card__price-product">Rp120.000</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="c-p__btn">
                            <a class="btn btn--secondary" href="produk.html">Lihat Selengkapnya</a>
                        </div>
                    </div>
                    <div class="c-p__tab__pane" data-pane="laptop">
                        <div class="c-p__wrapper card-product__body">
                            <!-- card-product-item-->
                            <div class="card-product__card">
                                <div class="card-product__card__box">
                                    <a class="card-product__card__link" href="product-detail.html"></a>
                                    <div class="card-product__card__img">
                                        <img class="card-product__card__img__el" src="assets/img/dummy/laptop-hp.png"
                                            alt="HP Ryzen 3 AMD Core i3 Ultra pHD" />
                                    </div>
                                    <div class="card-product__card__txt">
                                        <h3 class="card-product__card__title">HP Ryzen 3 AMD Core i3 Ultra pHD</h3>
                                        <p class="card-product__card__price-product">Rp7.99.000</p>
                                    </div>
                                </div>
                            </div>
                            <!-- card-product-item-->
                            <div class="card-product__card">
                                <div class="card-product__card__box">
                                    <a class="card-product__card__link" href="product-detail.html"></a>
                                    <div class="card-product__card__img">
                                        <img class="card-product__card__img__el" src="assets/img/dummy/laptop-hp.png"
                                            alt="HP Ryzen 3 AMD Core i3 Ultra pHD" />
                                    </div>
                                    <div class="card-product__card__txt">
                                        <h3 class="card-product__card__title">HP Ryzen 3 AMD Core i3 Ultra pHD</h3>
                                        <div class="card-product__card__sale">
                                            <span class="card-product__card__percentage">20%</span>
                                            <span class="card-product__card__price-carret">Rp143.0000</span>
                                        </div>
                                        <p class="card-product__card__price-product">Rp7.99.000</p>
                                    </div>
                                </div>
                            </div>
                            <!-- card-product-item-->
                            <div class="card-product__card">
                                <div class="card-product__card__box">
                                    <a class="card-product__card__link" href="product-detail.html"></a>
                                    <div class="card-product__card__img">
                                        <img class="card-product__card__img__el" src="assets/img/dummy/laptop-hp.png"
                                            alt="HP Ryzen 3 AMD Core i3 Ultra pHD" />
                                    </div>
                                    <div class="card-product__card__txt">
                                        <h3 class="card-product__card__title">HP Ryzen 3 AMD Core i3 Ultra pHD</h3>
                                        <p class="card-product__card__price-product">Rp7.99.000</p>
                                    </div>
                                </div>
                            </div>
                            <!-- card-product-item-->
                            <div class="card-product__card">
                                <div class="card-product__card__box">
                                    <a class="card-product__card__link" href="product-detail.html"></a>
                                    <div class="card-product__card__img">
                                        <img class="card-product__card__img__el" src="assets/img/dummy/laptop-hp.png"
                                            alt="HP Ryzen 3 AMD Core i3 Ultra pHD" />
                                    </div>
                                    <div class="card-product__card__txt">
                                        <h3 class="card-product__card__title">HP Ryzen 3 AMD Core i3 Ultra pHD</h3>
                                        <p class="card-product__card__price-product">Rp7.99.000</p>
                                    </div>
                                </div>
                            </div>
                            <!-- card-product-item-->
                            <div class="card-product__card">
                                <div class="card-product__card__box">
                                    <a class="card-product__card__link" href="product-detail.html"></a>
                                    <div class="card-product__card__img">
                                        <img class="card-product__card__img__el" src="assets/img/dummy/laptop-hp.png"
                                            alt="HP Ryzen 3 AMD Core i3 Ultra pHD" />
                                    </div>
                                    <div class="card-product__card__txt">
                                        <h3 class="card-product__card__title">HP Ryzen 3 AMD Core i3 Ultra pHD</h3>
                                        <div class="card-product__card__sale">
                                            <span class="card-product__card__percentage">20%</span>
                                            <span class="card-product__card__price-carret">Rp143.0000</span>
                                        </div>
                                        <p class="card-product__card__price-product">Rp7.99.000</p>
                                    </div>
                                </div>
                            </div>
                            <!-- card-product-item-->
                            <div class="card-product__card">
                                <div class="card-product__card__box">
                                    <a class="card-product__card__link" href="product-detail.html"></a>
                                    <div class="card-product__card__img">
                                        <img class="card-product__card__img__el" src="assets/img/dummy/laptop-hp.png"
                                            alt="HP Ryzen 3 AMD Core i3 Ultra pHD" />
                                    </div>
                                    <div class="card-product__card__txt">
                                        <h3 class="card-product__card__title">HP Ryzen 3 AMD Core i3 Ultra pHD</h3>
                                        <div class="card-product__card__sale">
                                            <span class="card-product__card__percentage">20%</span>
                                            <span class="card-product__card__price-carret">Rp143.0000</span>
                                        </div>
                                        <p class="card-product__card__price-product">Rp7.99.000</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="c-p__btn">
                            <a class="btn btn--secondary" href="produk.html">Lihat Selengkapnya</a>
                        </div>
                    </div>
                    <div class="c-p__tab__pane" data-pane="lain-lain">
                        <div class="c-p__wrapper card-product__body">
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
                                        <p class="card-product__card__price-product">Rp120.000</p>
                                    </div>
                                </div>
                            </div>
                            <!-- card-product-item-->
                            <div class="card-product__card">
                                <div class="card-product__card__box">
                                    <a class="card-product__card__link" href="product-detail.html"></a>
                                    <div class="card-product__card__img">
                                        <img class="card-product__card__img__el" src="assets/img/dummy/kertas-thermal.jpg"
                                            alt="Kertas Thermal" />
                                    </div>
                                    <div class="card-product__card__txt">
                                        <h3 class="card-product__card__title">Kertas Thermal</h3>
                                        <div class="card-product__card__sale">
                                            <span class="card-product__card__percentage">20%</span>
                                            <span class="card-product__card__price-carret">Rp143.0000</span>
                                        </div>
                                        <p class="card-product__card__price-product">Rp120.000</p>
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
                                        <p class="card-product__card__price-product">Rp120.000</p>
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
                                        <p class="card-product__card__price-product">Rp120.000</p>
                                    </div>
                                </div>
                            </div>
                            <!-- card-product-item-->
                            <div class="card-product__card">
                                <div class="card-product__card__box">
                                    <a class="card-product__card__link" href="product-detail.html"></a>
                                    <div class="card-product__card__img">
                                        <img class="card-product__card__img__el" src="assets/img/dummy/scanner-barcode.jpg"
                                            alt="Barcode Scanner" />
                                    </div>
                                    <div class="card-product__card__txt">
                                        <h3 class="card-product__card__title">Barcode Scanner</h3>
                                        <div class="card-product__card__sale">
                                            <span class="card-product__card__percentage">20%</span>
                                            <span class="card-product__card__price-carret">Rp143.0000</span>
                                        </div>
                                        <p class="card-product__card__price-product">Rp120.000</p>
                                    </div>
                                </div>
                            </div>
                            <!-- card-product-item-->
                            <div class="card-product__card">
                                <div class="card-product__card__box">
                                    <a class="card-product__card__link" href="product-detail.html"></a>
                                    <div class="card-product__card__img">
                                        <img class="card-product__card__img__el" src="assets/img/dummy/headphone.jpg"
                                            alt="Headphone Gamming Red Black for Business and Gamming" />
                                    </div>
                                    <div class="card-product__card__txt">
                                        <h3 class="card-product__card__title">Headphone Gamming Red Black for Business and
                                            Gamming</h3>
                                        <div class="card-product__card__sale">
                                            <span class="card-product__card__percentage">20%</span>
                                            <span class="card-product__card__price-carret">Rp143.0000</span>
                                        </div>
                                        <p class="card-product__card__price-product">Rp120.000</p>
                                    </div>
                                </div>
                            </div>
                            <!-- card-product-item-->
                            <div class="card-product__card">
                                <div class="card-product__card__box">
                                    <a class="card-product__card__link" href="product-detail.html"></a>
                                    <div class="card-product__card__img">
                                        <img class="card-product__card__img__el" src="assets/img/dummy/cctv.jpg"
                                            alt="CCTV" />
                                    </div>
                                    <div class="card-product__card__txt">
                                        <h3 class="card-product__card__title">CCTV</h3>
                                        <div class="card-product__card__sale">
                                            <span class="card-product__card__percentage">20%</span>
                                            <span class="card-product__card__price-carret">Rp143.0000</span>
                                        </div>
                                        <p class="card-product__card__price-product">Rp120.000</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="c-p__btn">
                            <a class="btn btn--secondary" href="produk.html">Lihat Selengkapnya</a>
                        </div>
                    </div>
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
                                    <p class="card-product__card__price-product">Rp120.000</p>
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
                                        <span class="card-product__card__price-carret">Rp143.000</span>
                                    </div>
                                    <p class="card-product__card__price-product">Rp120.000</p>
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
                                    <p class="card-product__card__price-product">Rp120.000</p>
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
                                    <p class="card-product__card__price-product">Rp120.000</p>
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
                                        <span class="card-product__card__price-carret">Rp143.000</span>
                                    </div>
                                    <p class="card-product__card__price-product">Rp120.000</p>
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
                                        <span class="card-product__card__price-carret">Rp143.000</span>
                                    </div>
                                    <p class="card-product__card__price-product">Rp120.000</p>
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
                                    <p class="card-product__card__price-product">Rp120.000</p>
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
                                        <span class="card-product__card__price-carret">Rp143.000</span>
                                    </div>
                                    <p class="card-product__card__price-product">Rp120.000</p>
                                </div>
                            </div>
                        </div>
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
