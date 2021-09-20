  <!-- header-->
  <div class="header">
    <div class="container">
      <div class="header__content">
        <a class="header__logo" href="/">
          <img class="header__logo__el" src="assets/img/logo/rzf-komputer.svg" alt="RZF Komputer" />
        </a>
        <button class="burger-menu js-nav" type="button">
          <span class="burger-menu__bar"></span>
          <span class="burger-menu__bar"></span>
          <span class="burger-menu__bar"></span>
        </button>
        <div class="header__mobile js-mobile-menu">
          <div class="header__menu">
            <ul class="header__nav">
              <li class="header__nav__item js-nav-items header__nav__item--active">
                <a class="header__nav__link" href="/">Beranda</a>
              </li>
              <li class="header__nav__item js-nav-items">
                <a class="header__nav__link" href="/produk">Produk</a>
              </li>
              <li class="header__nav__item js-nav-items">
                <a class="header__nav__link" href="/promo">Promo</a>
              </li>
              <li class="header__nav__item js-nav-items">
                <a class="header__nav__link" href="/kontak">Kontak Kami</a>
              </li>
            </ul>
          </div>
        </div>
        <button class="search js-button-search" type="button">
          <i class="rzfkomputer-search"></i>
        </button>
        <button class="cart js-cart" type="button">
          <i class="rzfkomputer-cart"></i>
        </button>
        <div class="cart-list js-cart-list">
          <div class="cart-list__items">
            <table class="cart-list__table">
              <tbody>
                <tr class="cart-list__row">
                  <td class="cart-list__img-wrapper">
                    <img class="cart-list__img-el" src="assets/img/dummy/lenovo-1.png" alt="Lenovo" />
                  </td>
                  <td class="cart-list__product">
                    <h6 class="cart-list__product-name">Lenovo Ultra Made 1500mx Ease Super</h6>
                    <p class="cart-list__product-price">Rp 4.500.000</p>
                    <p class="cart-list__product-count">Total : 1</p>
                  </td>
                  <td class="cart-list__delete">
                    <button class="cart-list__delete-btn" type="button">
                      <i class="rzfkomputer-trashcan"></i>
                    </button>
                  </td>
                </tr>
                <tr class="cart-list__row">
                  <td class="cart-list__img-wrapper">
                    <img class="cart-list__img-el" src="assets/img/dummy/printer.png" alt="Lenovo" />
                  </td>
                  <td class="cart-list__product">
                    <h6 class="cart-list__product-name">Printer Epson</h6>
                    <p class="cart-list__product-price">Rp 2.500.000</p>
                    <p class="cart-list__product-count">Total : 1</p>
                  </td>
                  <td class="cart-list__delete">
                    <button class="cart-list__delete-btn" type="button">
                      <i class="rzfkomputer-trashcan"></i>
                    </button>
                  </td>
                </tr>
                <tr class="cart-list__row">
                  <td class="cart-list__img-wrapper">
                    <img class="cart-list__img-el" src="assets/img/dummy/lenovo-1.png" alt="Lenovo" />
                  </td>
                  <td class="cart-list__product">
                    <h6 class="cart-list__product-name">PC Fullset</h6>
                    <p class="cart-list__product-price">Rp 4.500.000</p>
                    <p class="cart-list__product-count">Total : 1</p>
                  </td>
                  <td class="cart-list__delete">
                    <button class="cart-list__delete-btn" type="button">
                      <i class="rzfkomputer-trashcan"></i>
                    </button>
                  </td>
                </tr>
                <tr class="cart-list__row">
                  <td class="cart-list__img-wrapper">
                    <img class="cart-list__img-el" src="assets/img/dummy/lenovo-1.png" alt="Lenovo" />
                  </td>
                  <td class="cart-list__product">
                    <h6 class="cart-list__product-name">Asus Ryzen 5</h6>
                    <p class="cart-list__product-price">Rp 4.500.000</p>
                    <p class="cart-list__product-count">Total : 1</p>
                  </td>
                  <td class="cart-list__delete">
                    <button class="cart-list__delete-btn" type="button">
                      <i class="rzfkomputer-trashcan"></i>
                    </button>
                  </td>
                </tr>
              </tbody>
            </table>
            <div class="cart-list__total">
              <span class="cart-list__total-name">Total:</span>
              <h5 class="cart-list__total-price">Rp. 4.500.000</h5>
            </div>
            <div class="cart-list__button">
              <div class="cart-list__button--row">
                <a class="btn btn--primary btn--views" href="keranjang">Lihat Keranjang</a>
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
            <input class="header-search__input js-search-input" type="text" name="search" id="search" placeholder="Cari Produk" />
            <button class="header-search-section__close js-header-search-section__close" type="button">
              <i class="rzfkomputer-clear"></i>
            </button>
          </form>
          <div class="header__search-section__result js-search-result">
            <div class="header__search-section__result-notif">
              <p>Data Not Found</p>
            </div>
            <h3>Produk Pilihan</h3>
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
