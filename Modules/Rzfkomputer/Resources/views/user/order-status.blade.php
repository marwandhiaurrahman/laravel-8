@extends('rzfkomputer::layouts.master')

@section('main')
    <!-- main-->
    <div class="main-site main-site--hide js-main-site">
        <!--title-page-->
        <div class="title-page title-page--pattern">
          <div class="title-page__particle" id="particles-js"></div>
          <div class="container">
            <div class="title-page__txt">
              <h2 class="title-page__title">Cek Status Pemesanan</h2>
            </div>
          </div>
        </div>
        <!--Order status-->
        <div class="order">
          <div class="container">
            <h3 class="order__title">Nomor Order</h3>
            <div class="order__form" action="#" method="get"><input class="form__input" type="number" placeholder="Masukkan Nomor Order" />
              <p class="form__alert" id="alertPhone" data-req="Nomor tidak boleh kosong!" data-invalid-phone="Masukkan nomor yang valid!"></p>
              <p class="form__desc">Nomor dapat dilihat di e-receipt yang dikirimkan ke email Anda. Apabila sudah membayar namun tidak menerima e-receipt, Anda dapat menghubungi kami di rzfkomputer@gmail.com</p>
              <div class="fi-row"><button class="btn btn--primary btn--payment js-show-order" type="submit">Lacak Pesanan Saya</button></div>
            </div>
            <div class="order__box">
              <h3 class="order__title">Status Order</h3>
              <ul class="order__list">
                <li class="order__item active">Menunggu Pembayaran</li>
                <li class="order__item">Pembayaran Diterima</li>
                <li class="order__item">Produk sedang dalam pengantaran</li>
                <li class="order__item">Produk telah sampai</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
@endsection
