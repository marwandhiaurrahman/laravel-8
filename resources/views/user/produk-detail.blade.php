@extends('layouts.master')

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
                <a class="js-popup-image" href="assets/img/dummy/our-product-1.png" alt="Tes"><img class="pdetail__img-el" src="assets/img/dummy/our-product-1.png" alt="Tes" /></a>
              </div>
              <div class="pdetail__img-detail">
                <div class="pdetail__img-box">
                  <div class="pdetail__img-img">
                    <a class="js-popup-image" href="assets/img/dummy/best-product-2.png" alt="Tes"><img class="pdetail__img-el" src="assets/img/dummy/best-product-2.png" alt="Tes" /></a>
                  </div>
                </div>
                <div class="pdetail__img-box">
                  <div class="pdetail__img-img">
                    <a class="js-popup-image" href="assets/img/dummy/best-product-3.png" alt="Tes"><img class="pdetail__img-el" src="assets/img/dummy/best-product-3.png" alt="Tes" /></a>
                  </div>
                </div>
                <div class="pdetail__img-box">
                  <div class="pdetail__img-img">
                    <a class="js-popup-image" href="assets/img/dummy/best-product-4.png" alt="Tes"><img class="pdetail__img-el" src="assets/img/dummy/best-product-4.png" alt="Tes" /></a>
                  </div>
                </div>
              </div>
            </div>
            <!--product-detail-form-->
            <div class="pdetail__form">
              <form action="keranjang-belanja.html" method="get" autocomplete="off">
                <h3 class="pdetail__form__name">Asus Ryzen 3 AMD</h3>
                <div class="pdetail__form__summary">Cocok untuk Anda yang suka bermain komputer</div>
                <div class="pdetail__form__count-wrapper">
                  <h3 class="pdetail__form__price">Harga :</h3>
                  <p class="js-price">Rp 4.500.000-,</p>
                  <h3 class="pdetail__form__category">Kategori :</h3>
                  <p>Komputer</p>
                  <h3 class="pdetail__form__inventory">Stok : </h3>
                  <p>15</p>
                  <h3 class="pdetail__form__count">Jumlah :</h3><button class="pdetail__form__min btnMin" type="button">
                    <i class="rzfkomputer-minus"></i></button><input class="pdetail__form__quantity js-input-qty" type="number" value="1" min="1" name="qty" /><button class="pdetail__form__max btnMax" type="button">
                    <i class="rzfkomputer-add"></i></button>
                </div>
                <div class="pdetail__form__row"><a class="btn btn--primary btn--cart" href="keranjang-belanja.html">
                    <i class="rzfkomputer-cart"></i>Masukkan Keranjang</a></div>
              </form>
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
            <h3 class="tab-pane__name">Asus Ryzen 3 AMD Ultra Logic Gamming Super G-1850-MS</h3>
            <p class="tab-pane__desc">Dengan bangga ASUS Indonesia kembali mengeluarkan produk terbaru di awal 2020. All-in-One MyPC U23 dengan tampilan disign yang sangat elegan ringan dan ramping, body nya yang sangat slim hanya dengan ketebalan 0.7 cm. Ditambah lagi dengan layar slim-bezel sebesar 21.5” FHD IPS yang sangat luas membuat aktivitas semakin bersemangat, memanjakan mata anda dengan kualitas grafik yang bagus. PC ini sangat cocok untuk semua kalangan baik untuk pemula, pelajar mahasiswa gamer bahkan disign grafis dengan di tunjang dengan spesifikasi hebat sbb:</p>
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
                  <img class="card-product__card__img__el" src="assets/img/dummy/best-product-1.png" alt="Sandisk Ultra Seagate Gytex Xyren 16GB" />
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
                  <img class="card-product__card__img__el" src="assets/img/dummy/best-product-2.png" alt="Printer Thermal" />
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
                  <img class="card-product__card__img__el" src="assets/img/dummy/best-product-3.png" alt="TP Link" />
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
                  <img class="card-product__card__img__el" src="assets/img/dummy/best-product-4.png" alt="Logitech Mouse" />
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
                  <img class="card-product__card__img__el" src="assets/img/dummy/best-product-5.png" alt="Barcode Scanner" />
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
                  <img class="card-product__card__img__el" src="assets/img/dummy/best-product-6.png" alt="Headphone Gamming Blue Black for Business and Gamming" />
                </div>
                <div class="card-product__card__txt">
                  <h3 class="card-product__card__title">Headphone Gamming Blue Black for Business and Gamming</h3>
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
                  <img class="card-product__card__img__el" src="assets/img/dummy/best-product-2.png" alt="Printer Thermal" />
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
                  <img class="card-product__card__img__el" src="assets/img/dummy/best-product-1.png" alt="Sandisk Ultra Seagate Gytex Xyren 16GB" />
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
