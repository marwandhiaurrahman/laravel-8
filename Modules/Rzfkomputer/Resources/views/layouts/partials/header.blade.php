  <!-- header-->
  <div class="header">
      <div class="container">
          <div class="header__content">
              <a class="header__logo" href="/">
                  <img class="header__logo__el" src="{{ asset('assets/img/logo/rzf-komputer.svg') }}"
                      alt="RZF Komputer" />
              </a>
              <button class="burger-menu js-nav" type="button">
                  <span class="burger-menu__bar"></span>
                  <span class="burger-menu__bar"></span>
                  <span class="burger-menu__bar"></span>
              </button>
              <div class="header__mobile js-mobile-menu">
                  <div class="header__menu">
                      <ul class="header__nav">
                          <li
                              class="header__nav__item js-nav-items {{ Request::routeIs('welcome') ? ' header__nav__item--active' : '' }}">
                              <a class="header__nav__link" href="/">Beranda</a>
                          </li>
                          <li
                              class="header__nav__item js-nav-items {{ Request::routeIs('produk-list') ? ' header__nav__item--active' : '' }}">
                              <a class="header__nav__link" href="/produk">Produk</a>
                          </li>
                          <li
                              class="header__nav__item js-nav-items {{ Request::routeIs('promo') ? ' header__nav__item--active' : '' }}">
                              <a class="header__nav__link" href="/promo">Promo</a>
                          </li>
                          <li
                              class="header__nav__item js-nav-items {{ Request::routeIs('kontak') ? ' header__nav__item--active' : '' }}">
                              <a class="header__nav__link" href="{{ route('kontak') }}">Kontak Kami</a>
                          </li>
                      </ul>
                  </div>
              </div>
              <button class="search js-button-search" type="button">
                  <i class="rzfkomputer-search"></i>
              </button>
              <button class="cart js-cart" type="button">
                  <span class="cart__count">{{ Cart::getTotalQuantity() }}</span><i class="rzfkomputer-cart"></i>
              </button>
              <div class="cart-list js-cart-list" dataEmpty="{{ Cart::getTotalQuantity() }}">
                  <div class="cart-list__items js-cart-list__items">
                      @if (Cart::getTotalQuantity() == 0)
                          <div class="cart-list__alert-empty-img">
                              <img class="cart-list__alert-empty-img-el" src="{{asset('assets/img/dummy/empty-cart.svg')}}"
                                  alt="Saat ini, Keranjang Anda kosong" />
                          </div>
                          <div class="cart-list__alert-empty">
                              <p>Saat ini, Keranjang Anda kosong</p>
                          </div>
                      @endif
                      <div class="cart-list__table__wrapper">
                          <table class="cart-list__table">
                              <tbody class="jsTbody">
                                  @foreach (Cart::getContent() as $item)
                                      <tr class="cart-list__row">
                                          <td class="cart-list__img-wrapper">
                                              <img class="cart-list__img-el"
                                                  src="{{ asset($item->attributes->image) }}" alt="Lenovo" />
                                          </td>
                                          <td class="cart-list__product">
                                              <h6 class="cart-list__product-name">{{ $item->name }}</h6>
                                              <p class="cart-list__product-price">{{ money($item->price, 'IDR') }}
                                              </p>
                                              <p class="cart-list__product-count">Total : {{ $item->quantity }} pcs
                                              </p>
                                          </td>
                                          <td class="cart-list__delete">
                                              <form action="{{ route('cart_destroy', $item->id) }}" method="POST">
                                                  @csrf
                                                  @method('DELETE')
                                                  <button type="submit">
                                                      <i class="rzfkomputer-trashcan"></i>
                                                  </button>
                                                  {{-- <button class="cart-list__delete-btn js-cart-list-delete"
                                                      type="submit">
                                                      <i class="rzfkomputer-trashcan"></i>
                                                  </button> --}}
                                              </form>
                                          </td>
                                      </tr>
                                  @endforeach

                                  {{-- <tr class="cart-list__row">
                                      <td class="cart-list__img-wrapper">
                                          <img class="cart-list__img-el" src="assets/img/dummy/lenovo-1.png"
                                              alt="Lenovo" />
                                      </td>
                                      <td class="cart-list__product">
                                          <h6 class="cart-list__product-name">Asus Ryzen 5</h6>
                                          <p class="cart-list__product-price">Rp 4.500.000</p>
                                          <p class="cart-list__product-count">Total : 1</p>
                                      </td>
                                      <td class="cart-list__delete">
                                          <button class="cart-list__delete-btn js-cart-list-delete" type="submit">
                                              <i class="rzfkomputer-trashcan"></i>
                                          </button>
                                      </td>
                                  </tr> --}}

                              </tbody>
                          </table>
                          <div class="cart-list__total">
                              <span class="cart-list__total-name">Total:</span>
                              <h5 class="cart-list__total-price">{{ money(Cart::getTotal(), 'IDR') }}</h5>
                              <div class="cart-list__button">
                                  <div class="cart-list__button--row">
                                      <a class="btn btn--primary btn--views" href="{{ route('keranjang') }}">Lihat
                                          Keranjang</a>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="header__search-section">
              <div class="header__search-section__form-wrapper">
                  <form class="header-search-section__form js-search-form" action="#" method="POST" autocomplete="off">
                      <button class="header-search-section__submit" type="submit">
                          <i class="rzfkomputer-search"></i>
                      </button>
                      <input class="header-search__input js-search-input" type="text" name="search" id="search"
                          placeholder="Cari Produk" />
                      <button class="header-search-section__close js-header-search-section__close" type="button">
                          <i class="rzfkomputer-clear"></i>
                      </button>
                  </form>
                  <div class="header__search-section__result js-search-result">
                      <div class="header__search-section__result-notif js-notif-show">
                          <div class="header__search-section__result-img-wrapper">
                              <img src="{{ asset('assets/img/dummy/not-found.svg') }}">
                              <p>Maaf, produk yang Anda cari tidak tersedia</p>
                          </div>
                      </div>
                      <h3 class="header__search-section-title show">Produk Pilihan</h3>
                      <ul class="header__search-section__list js-search-popup-input">
                          <li class="header__search-section__item">
                              <a class="header__search-section__link" href="#">Asus Ryzen AMD 3</a>
                          </li>
                          <li class="header__search-section__item">
                              <a class="header__search-section__link" href="#">Printer Thermal</a>
                          </li>
                          <li class="header__search-section__item">
                              <a class="header__search-section__link" href="#">TP-Link</a>
                          </li>
                      </ul>
                  </div>
              </div>
          </div>
          <div class="overlay"></div>
      </div>
  </div>
