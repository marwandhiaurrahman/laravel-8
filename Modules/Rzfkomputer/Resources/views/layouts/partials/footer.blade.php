  <!-- footer-->
  <div class="footer">
      <div class="container">
          <div class="footer__wrapper">
              <div class="footer__menu js-footer-accordion">
                  <div class="footer__menu__item">
                      <h3 class="footer__title">Navigasi</h3>
                      <ul class="footer__nav">
                          <li class="footer__nav__item">
                              <a class="footer__nav__link" href="index.html">Beranda</a>
                          </li>
                          <li class="footer__nav__item">
                              <a class="footer__nav__link" href="produk.html">Produk</a>
                          </li>
                          <li class="footer__nav__item">
                              <a class="footer__nav__link" href="promo.html">Promo</a>
                          </li>
                          <li class="footer__nav__item">
                              <a class="footer__nav__link" href="kontak-kami.html">Kontak Kami</a>
                          </li>
                      </ul>
                  </div>
                  <div class="footer__menu__item">
                      <h3 class="footer__title">Produk</h3>
                      <ul class="footer__nav">
                          <li class="footer__nav__item">
                              <a class="footer__nav__link" href="komputer.html">Komputer</a>
                          </li>
                          <li class="footer__nav__item">
                              <a class="footer__nav__link" href="printer.html">Printer</a>
                          </li>
                          <li class="footer__nav__item">
                              <a class="footer__nav__link" href="laptop.html">Laptop</a>
                          </li>
                          <li class="footer__nav__item">
                              <a class="footer__nav__link" href="lainnya.html">Lainnya</a>
                          </li>
                      </ul>
                  </div>
                  <div class="footer__menu__item">
                      <h3 class="footer__title">Sosial Media Kami</h3>
                      <ul class="footer__nav">
                          <li class="footer__nav__item">
                              <a class="footer__nav__icon__link facebook"
                                  href="{{ Modules\Rzfkomputer\Entities\Office::first()->facebook }}">
                                  <i class="footer__nav__icon rzfkomputer-facebook"></i>
                                  <span>Facebook</span>
                              </a>
                          </li>
                          <li class="footer__nav__item">
                              <a class="footer__nav__icon__link instagram"
                                  href="{{ Modules\Rzfkomputer\Entities\Office::first()->instagram }}">
                                  <i class="footer__nav__icon rzfkomputer-instagram"></i>
                                  <span>Instagram</span>
                              </a>
                          </li>
                          <li class="footer__nav__item">
                              <a class="footer__nav__icon__link youtube"
                                  href="{{ Modules\Rzfkomputer\Entities\Office::first()->youtube }}">
                                  <i class="footer__nav__icon rzfkomputer-youtube"></i>
                                  <span>Youtube</span>
                              </a>
                          </li>
                      </ul>
                  </div>
              </div>
              <div class="footer__about">
                  <a class="footer__logo" href="index.html">
                      <img class="footer__logo__img" src="{{ asset('assets/img/logo/rzf-komputer-white.svg') }}"
                          alt="RZF Komputer" />
                  </a>
                  <p class="footer__description">{{ Modules\Rzfkomputer\Entities\Office::first()->address }}</p>
              </div>
          </div>
          <div class="footer__bottom">
              <p class="footer__bottom__copyright">Copyright &copy;
                  {{ Illuminate\Support\Carbon::createFromFormat('Y-m-d H:i:s', now())->year }} RZF Komputer. All
                  Rights
                  Reserved</p>
          </div>
      </div>
  </div>
  <!-- end-footer-->
