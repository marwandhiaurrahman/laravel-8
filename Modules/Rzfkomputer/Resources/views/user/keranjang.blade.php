@extends('rzfkomputer::layouts.master')

@section('main')
    <!-- main-->
    <div class="main-site main-site--hide js-main-site">
        <!--title-page-->
        <div class="title-page title-page--pattern">
            <div class="title-page__particle" id="particles-js"></div>
            <div class="container">
                <div class="title-page__txt">
                    <h2 class="title-page__title">Keranjang Belanja</h2>
                </div>
            </div>
        </div><!-- cart-->
        <div class="cart">
            <div class="container">
                <div class="cart__wrapper">
                    {{-- <form action="order-success.html" method="POST"> --}}
                    <table class="cart__table">
                        <thead>
                            <tr>
                                <th class="cart__table-title" scope="col">Produk</th>
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

                                                <form action="{{ route('cart.destroy', $item->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="cart__media__delete-btn" type="submit" title="Delete">
                                                        <i class="rzfkomputer-trashcan"></i>
                                                    </button>
                                                </form>
                                                <div class="cart__media__img-wrapper">
                                                    <img class="cart__media__img-el"
                                                        src="{{ asset($item->attributes->image) }}" alt="Image" />
                                                </div>
                                                <p class="cart__media__name">{{ $item->name }}</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="cart__media__price js-cart-price">
                                            {{ money($item->price * $item->quantity, 'IDR') }},-
                                        </p>
                                    </td>
                                    <td>
                                        <div class="cart__media__product-count">
                                            {{-- <button class="cart__media__btn-chevron-down js-cart-minus" type="button">
                                                <i class="rzfkomputer-minus"></i>
                                            </button>
                                            <input class="cart__media__input-qty js-cart-quantity" type="number" name="cart"
                                                id="quantity{{ $item->id }}" max-length="12" title="quantity"
                                                value="{{ $item->quantity }}" min="1" />
                                            <button class="cart__media__btn-chevron-up js-cart-plus" type="button">
                                                <i class="rzfkomputer-add"></i>
                                            </button> --}}
                                            <form action="{{ route('cart.update', $item->id) }}" method="POST">
                                                @csrf
                                                @method('PATCH')
                                                <input type="number" name="quantity" min="0" value="{{ $item->quantity }}"
                                                    class="form-control form-control-sm col-3"
                                                    onchange="this.form.submit()" />
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{-- </form> --}}
                </div>
            </div>
        </div><!-- end-cart-->
        <!--checkout-form-->
        <div class="checkout">
            <div class="container">
                <div class="checkout__wrapper">
                    <div class="checkout__form">
                        {!! Form::open(['route' => 'store_order', 'method' => 'POST']) !!}
                        <h3 class="checkout__form-title">Form Checkout</h3>
                        <div class="form__control">
                            <label class="form__label" for="name">Nama</label>
                            <input class="form__input" type="text" id="name" name="name" placeholder="Masukkan Nama"
                                data-target="alertName" required />
                            <p class="form__alert" id="alertName" data-req="Nama tidak boleh kosong!"></p>
                        </div>
                        <div class="form__control">
                            <label class="form__label" for="email">Email</label>
                            <input class="form__input" type="text" id="email" name="email" placeholder="Masukkan Email"
                                data-target="alertEmail" required />
                            <p class="form__alert" id="alertEmail" data-req="Email tidak boleh kosong!"
                                data-invalid-email="Masukkan email yang valid!"></p>
                        </div>
                        <div class="form__control">
                            <label class="form__label" for="phone">Nomor Telepon</label>
                            <input class="form__input" id="phone" name="phone" placeholder="Masukkan Nomor"
                                data-target="alertPhone" required>
                            <p class="form__alert" id="alertPhone" data-req="Nomor tidak boleh kosong!"
                                data-invalid-phone="Masukkan nomor yang valid!"></p>
                        </div>
                        <div class="form__control">
                            <label class="form__label" for="address">Alamat Rumah/Kantor</label>
                            <textarea class="form__input" id="address" name="address" placeholder="Masukkan Alamat"
                                data-target="alertAddress" rows="5" required></textarea>
                            <p class="form__alert" id="alertAddress" data-req="Alamat tidak boleh kosong!"></p>
                        </div>
                        {{-- <button class="btn btn--block btn--primary" id="js-submit" type="submit">
                            Pesan Sekarang</button> --}}
                        <input type="submit" class="btn btn--block btn--primary" value="Pesan Sekarang">
                        {!! Form::close() !!}
                    </div>
                    <div class="checkout__summary">
                        <div class="checkout__box">
                            <h3 class="checkout__title">Pesanan Anda</h3>
                            <table class="checkout__table">
                                <thead>
                                    <tr class="checkout__table-list">
                                        <th scope="col">Produk</th>
                                        <th scope="col">Jumlah</th>
                                        <th scope="col">Harga</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach (Cart::getContent() as $item)
                                        <tr>
                                            <th class="checkout__table-name">{{ $item->name }}</th>
                                            <td class="checkout__table-count js-cart-count">{{ $item->quantity }}</td>
                                            <td class="checkout__table-price js-cart-price">
                                                {{ money($item->price * $item->quantity, 'IDR') }},-</td>
                                        </tr>
                                    @endforeach
                                    <tr>
                                        <th>Total :</th>
                                        <td class="checkout__table-count"></td>
                                        <td class="checkout__table-price js-cart-total">
                                            {{ money(Cart::getTotal(), 'IDR') }},-</td>
                                    </tr>
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--checkout-form-->
    @endsection
