@extends('rzfkomputer::layouts.master')
@section('title', 'Cek Status')

@section('main')
    <!-- main-->
    <div class="main-site main-site--hide js-main-site">
        <!--title-page-->
        <div class="title-page title-page--pattern">
            <div class="title-page__particle" id="particles-js"></div>
            <div class="container">
                <div class="title-page__txt">
                    <h2 class="title-page__title">Cek Status Pemesanan</h2>
                    <p class="title-page__desc">Pantau pesanan Anda dengan fitur tracking order kami</p>
                </div>
            </div>
        </div>
        <!--Order status-->
        <div class="order">
            <div class="container">
                <h3 class="order__title">Order ID</h3>
                <form class="order__form" action="{{ route('cek-status') }}" method="get"><input class="form__input"
                        name="id" type="number" placeholder="Masukkan Order ID Anda" />
                    <p class="form__desc">Order ID dapat dilihat di e-receipt yang dikirimkan ke email Anda. Apabila
                        sudah membayar namun tidak menerima e-receipt, Anda dapat menghubungi kami di rzfkomputer@gmail.com
                        @if (Request::root() . Request::getRequestUri() != route('cek-status'))
                            @if ($order == null)
                                <div class="order__row">
                                    <p>Order ID yang Anda masukkan tidak valid. Silakan cek kembali!</p>
                                </div>
                            @endif
                        @endif
                    </p>
                    <div class="fi-row"><button class="btn btn--primary btn--payment" type="submit">Lacak Pesanan
                            Saya</button></div>
                </form>
                @if ($order != null)
                    <div class="order__box">
                        <h3 class="order__title">Status Order</h3>
                        <ul class="order__list">
                            <li class="order__item {{ $order->status == 1 ? 'active' : '' }}">Menunggu Pembayaran</li>
                            <li class="order__item {{ $order->status == 2 ? 'active' : '' }}  ">Pembayaran Diterima</li>
                            <li class="order__item {{ $order->status == 3 ? 'active' : '' }}">Produk sedang dalam
                                pengantaran</li>
                            <li class="order__item {{ $order->status == 4 ? 'active' : '' }}">Produk telah sampai</li>
                        </ul>
                    </div>
                @else
                @endif

            </div>
        </div>
    </div>
@endsection
