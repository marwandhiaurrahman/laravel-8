  <!-- floating-chat-->
  <div class="floating-chat js-floating-chat-dd">
      <div class="floating-chat__wrapper">
          <button class="floating-chat__btn">
              <i class="rzfkomputer-whatsapp"></i></button>
          <div class="floating-chat__box">
              <div class="floating-chat__head">
                  <div class="floating-chat__img">
                      <i class="rzfkomputer-whatsapp"></i>
                  </div>
                  <div class="floating-chat__txt">
                      <h3 class="floating-chat__txt-title">Mulai Chat</h3>
                  </div>
              </div>
              <div class="floating-chat__body">
                  <ul class="floating-chat__menu">

                      @foreach (Modules\Rzfkomputer\Entities\Contact::get() as $item)
                          <li class="floating-chat__item">
                              <a class="floating-chat__link"
                                  href="https://api.whatsapp.com/send?phone={{$item->phone}}&amp;text=Hi%20RZF Komputer"
                                  target="_blank">({{ $item->label }}) {{ $item->name }}</a>
                          </li>
                      @endforeach

                      {{-- <li class="floating-chat__item">
              <a class="floating-chat__link" href="https://api.whatsapp.com/send?phone=6285864772039&amp;text=Hi%20RZF Komputer" target="_blank">(CS 2) Nopitasari</a>
            </li> --}}
                  </ul>
              </div>
          </div>
      </div>
  </div><!-- floating-chat-->
