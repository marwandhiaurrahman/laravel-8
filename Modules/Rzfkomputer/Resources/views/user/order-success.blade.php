@extends('layouts.master')

@section('main')
  <!-- main-->
  <div class="main-site main-site--hide js-main-site">
    <!--title-page-->
    <div class="title-page title-page--pattern">
      <div class="title-page__particle" id="particles-js"></div>
      <div class="container">
        <div class="title-page__txt">
          <h2 class="title-page__title">Order Success!</h2>
        </div>
      </div>
    </div>
    <!--order-success-->
    <div class="order-success">
      <div class="container">
        <div class="order-success__invoice">
          <h3 class="order-success__invoice-heading">Terima kasih telah berbelanja di RZF Komputer. Pesanan Anda akan kami proses.</h3>
          <div class="order-success__invoice-info">
            <div class="order-success__invoice-list">
              <h3 class="order-success__invoice-title">Dari</h3>
              <p>RZF Komputer</p>
              <hr>
              <p>Alamat: Jl. Raya Darma KM. 11 Dusun Gunungluhur Desa/Kec. Darma Kab. Kuningan</p>
              <p>No. Telepon: +62 8586 4772 039</p>
              <p>Email: rzfkomputer@gmail.com</p>
            </div>
            <div class="order-success__invoice-list">
              <h3 class="order-success__invoice-title">Tujuan</h3>
              <p>Customer</p>
              <hr>
              <p>Alamat: Jl. Raya Suci Desa Cidulang No. 01 Cikijing Kabupaten Majalengka 45466</p>
              <p>No. Telepon: +62 8572 1557 240</p>
              <p>Email: budidendi1234@@gmail.com</p>
            </div>
            <div class="order-success__invoice-list">
              <h3 class="order-success__invoice-title">Detail Pesanan</h3><br>
              <hr>
              <p>Order ID : 00002121</p>
              <p>Waktu Pemesanan: 2021-08-28</p>
              <p>Jumlah yang harus dibayar: Rp 5.400.000-,</p>
            </div>
          </div>
        </div>
        <div class="order-success__action">
          <p>Untuk menyelesaikan proses pemesanan, silakan transfer sesuai jumlah yang tertera di atas</p>
          <div class="order-success__action-transfer">
            <div class="order-success__action-img">
              <img class="order-success__action-el" src="assets/img/dummy/bri.png" alt="BRI Logo" />
            </div>
            <div class="order-success__action-txt">
              <p>No. Rek: 427301006692531</p>
              <p>Atas Nama: Yudhi Heriyadi</p>
            </div>
          </div>
        </div>
        <div class="order-success__confirmation">
          <p>Jika telah melakukan transaksi pembayaran, klik tombol di bawah untuk konfirmasi pembayaran</p>
          <a class="btn btn--primary btn--confirmation" href="https://api.whatsapp.com/send?phone=6285864772042&amp;text=Saya%20mau%20melakukan%20konfirmasi%20pembayaran.%0A%0ANama%20%3A%20Dendi Budiansyah%0ANama%20Usaha%20%3A%20Dendi Komputer%0AEmail%20%3A%20budidendi1234@gmail.com%0AAlamat%20%3A%20Jl. Raya Suci Desa Cidulang No. 01 Cikijing Kabupaten Majalengka 45466" target="_blank"> Konfirmasi Pembayaran</a>
        </div>
      </div>
    </div>
    <!-- end-order-success-->
  </div>
@endsection
