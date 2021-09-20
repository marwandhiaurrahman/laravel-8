@extends('layouts.master')

@section('main')
    <!-- main-->
    <div class="main-site main-site--hide js-main-site">
        <!--title-page-->
        <div class="title-page title-page--pattern">
            <div class="title-page__particle" id="particles-js"></div>
            <div class="container">
                <div class="title-page__txt">
                    <h2 class="title-page__title">Kontak Kami</h2>
                    <p class="title-page__desc">Hubungi kami jika ada pertanyaan mengenai produk dan lainnya</p>
                </div>
            </div>
        </div><!-- contact-us-->
        <div class="contact">
            <div class="contact__wrapper">
                <div class="contact__map">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1251.2255115116825!2d108.40804199284523!3d-7.003046634087358!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6f3f75577f0109%3A0xdad2695f5b1b8fe2!2sRZF%20Software!5e0!3m2!1sid!2sid!4v1629180802542!5m2!1sid!2sid"
                        width="100%" height="380" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
                        tabindex="0"></iframe>
                </div>
                <div class="container">
                    <div class="contact__form">
                        <h2 class="contact__title">Apa yang ingin Anda tanyakan?</h2>
                        <form class="form" action="contact.html" method="GET" autocomplete="off">
                            <div class="form__control">
                                <label class="form__label" for="name">Nama</label>
                                <input class="form__input" type="text" id="name" name="name" placeholder="Masukkan Nama"
                                    data-target="alertName" required />
                                <p class="form__alert" id="alertName" data-req="Nama tidak boleh kosong!"></p>
                            </div>
                            <div class="form__control">
                                <label class="form__label" for="email">Email</label>
                                <input class="form__input" type="text" id="email" name="email"
                                    placeholder="Masukkan Email" data-target="alertEmail" required />
                                <p class="form__alert" id="alertEmail" data-req="Email tidak boleh kosong!"
                                    data-invalid-email="Masukkan email yang valid!"></p>
                            </div>
                            <div class="form__control">
                                <label class="form__label" for="message">Pesan</label>
                                <textarea class="form__input" id="message" name="message" placeholder="Masukkan Pesan"
                                    data-target="alertMessage" required></textarea>
                                <p class="form__alert" id="alertMessage" data-req="Pesan tidak boleh kosong!"></p>
                            </div>
                            <div class="form__control">
                                <button class="btn btn--block btn--primary" type="submit">
                                    <i class="rzfkomputer-paper-plane"> </i>Kirim</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- end-contact-us-->
    </div>
@endsection
