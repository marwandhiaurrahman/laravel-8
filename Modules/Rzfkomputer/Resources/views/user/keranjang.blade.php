@extends('rzfkomputer::layouts.master')
@section('title', 'Keranjang')
@section('main')
    <div class="main-site main-site--hide js-main-site">
        <!--title-page-->
        <div class="title-page title-page--pattern">
            <div class="title-page__particle" id="particles-js"></div>
            <div class="container">
                <div class="title-page__txt">
                    <h2 class="title-page__title">Keranjang Belanja</h2>
                </div>
            </div>
        </div>
        <!-- cart-->
        <div class="cart__empty">
            @if (Cart::getTotalQuantity() == 0)
                <div class="cart__empty__content">
                    <div class="container">
                        <p>Ups, Keranjang Anda masih kosong!</p>
                        <div class="cart__empty__row"><a class="btn btn--primary btn--backshop"
                                href="{{ route('produk-list') }}">Kembali Belanja</a>
                        </div>
                    </div>
                </div>
            @endif
            <div class="cart js-cart-wrapper">
                <div class="container">
                    <div class="cart__wrapper">
                        {{-- <form action="pesanan-berhasil.html" method="POST"> --}}
                        <table class="cart__table">
                            <thead>
                                <tr>
                                    <th class="cart__table-title" scope="col">Gambar</th>
                                    <th class="cart__table-title" scope="col">Nama</th>
                                    <th class="cart__table-title" scope="col">Harga</th>
                                    <th class="cart__table-title" scope="col">Jumlah</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach (Cart::getContent() as $item)
                                    <tr>
                                        <td>
                                            <div class="cart__media">
                                                <div class="cart__media__content">
                                                    <form action="{{ route('cart_destroy', $item->id) }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="cart__media__delete-btn js-delete" type="submit"
                                                            title="Delete">
                                                            <i class="rzfkomputer-trashcan"></i>
                                                        </button>
                                                    </form>
                                                    <div class="cart__media__img-wrapper">
                                                        <img class="cart__media__img-el"
                                                            src="{{ asset($item->attributes->image) }}" alt="Image">
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="cart__media__name"> {{ $item->name }}</p>
                                        </td>
                                        <td>
                                            <p class="cart__media__price">
                                                {{ money($item->price * $item->quantity, 'IDR') }}
                                            </p>
                                        </td>
                                        <td>
                                            <div class="cart__media__product-count">
                                                <button class="cart__media__btn-chevron-down" type="button"
                                                    onclick="handleChangeTotal(1, 'decrement')">
                                                    <i class="rzfkomputer-minus"></i>
                                                </button>
                                                <input onchange="handleChangeInput(this)" type="number"
                                                    class="cart__media__input-qty" id="quantity" name="cart" max-length="12"
                                                    title="Quantity" min="1" value="{{ $item->quantity }}">
                                                <button type="button" onclick="handleChangeTotal(1, 'increment')"
                                                    class="cart__media__btn-chevron-down js-cart-minus">
                                                    <i class="rzfkomputer-add"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                        {{-- </form> --}}
                    </div>
                </div>
                <!-- end-cart-->
                <!--checkout-form-->
                <div class="checkout">
                    <div class="container">
                        <div class="checkout__wrapper">
                            <div class="checkout__form">
                                <form action="#" method="POST" autocomplete="off">
                                    <h3 class="checkout__form-title">Form Checkout</h3>
                                    <div class="form__control">
                                        <label class="form__label" for="name">Nama</label>
                                        <input class="form__input" type="text" id="name" name="name"
                                            placeholder="Masukkan Nama" data-target="alertName" />
                                        <p class="form__alert" id="alertName" data-req="Nama tidak boleh kosong!"></p>
                                    </div>
                                    <div class="form__control">
                                        <label class="form__label" for="email">Email</label>
                                        <input class="form__input" type="text" id="email" name="email"
                                            placeholder="Masukkan Email" data-target="alertEmail" />
                                        <p class="form__alert" id="alertEmail" data-req="Email tidak boleh kosong!"
                                            data-invalid-email="Masukkan email yang valid!"></p>
                                    </div>
                                    <div class="form__control">
                                        <label class="form__label" for="phone">Nomor Telepon</label>
                                        <input class="form__input" id="phone" name="phone" placeholder="Masukkan Nomor"
                                            data-target="alertPhone">
                                        <p class="form__alert" id="alertPhone" data-req="Nomor tidak boleh kosong!"
                                            data-invalid-phone="Masukkan nomor yang valid!"></p>
                                    </div>
                                    <div class="form__control">
                                        <label class="form__label" for="address">Alamat Rumah/Kantor</label>
                                        <textarea class="form__input" id="address" name="address"
                                            placeholder="Masukkan Alamat" data-target="alertAddress" rows="5"></textarea>
                                        <p class="form__alert" id="alertAddress" data-req="Alamat tidak boleh kosong!">
                                        </p>
                                    </div><button class="btn btn--block btn--primary" id="js-submit" type="submit">
                                        Pesan Sekarang</button>
                                </form>
                            </div>
                            <div class="checkout__summary">
                                <div class="checkout__box">
                                    <h3 class="checkout__title">Pesanan Anda</h3>
                                    <table class="checkout__table">
                                        <thead>
                                            <tr class="checkout__table-list">
                                                <th scope="col">Produk</th>
                                                <th scope="col">Jumlah</th>
                                                <th scope="col">Subtotal</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach (Cart::getContent() as $item)
                                                <tr>
                                                    <td class="checkout__table-name">{{ $item->name }} </td>
                                                    <td class="checkout__table-count js-cart-count">{{ $item->quantity }}
                                                    </td>
                                                    <td class="checkout__table-price js-cart-price">
                                                        {{ money($item->price * $item->quantity, 'IDR') }}</td>
                                                </tr>
                                            @endforeach
                                            <tr>
                                                <th>Grand Total :</th>
                                                <td></td>
                                                <td class="checkout__table-price js-cart-total">{{ money(Cart::getTotal(), 'IDR') }}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
