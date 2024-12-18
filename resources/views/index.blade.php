@extends('layouts.app')
@section('content')
<main>

<section class="swiper-container js-swiper-slider swiper-number-pagination slideshow" data-settings='{
    "autoplay": {
      "delay": 5000
    },
    "slidesPerView": 1,
    "effect": "fade",
    "loop": true
  }'>
  <div class="swiper-wrapper">
    <div class="swiper-slide">
      <div class="overflow-hidden position-relative h-100">
        <div class="slideshow-character position-absolute bottom-0 pos_right-center">
          <img loading="lazy" src="{{ ('assets/images/home/demo3/slideshow-character1.png') }}" width="542" height="733"
            alt="Woman Fashion 1"
            class="slideshow-character__img animate animate_fade animate_btt animate_delay-9 w-auto h-auto" />
          <div class="character_markup type2">
            <p
              class="text-uppercase font-sofia mark-grey-color animate animate_fade animate_btt animate_delay-10 mb-0">
              Edukasi</p>
          </div>
        </div>
        <div class="slideshow-text container position-absolute start-50 top-50 translate-middle">
          <h6 class="text_dash text-uppercase fs-base fw-medium animate animate_fade animate_btt animate_delay-3">
            YukBelajar.id</h6>
          <h2 class="h1 fw-normal mb-0 animate animate_fade animate_btt animate_delay-5"></h2>
          <h2 class="h1 fw-bold animate animate_fade animate_btt animate_delay-5">Halo Sobat</h2>
          <a href="#"
            class="btn-link btn-link_lg default-underline fw-medium animate animate_fade animate_btt animate_delay-7">Enroll me</a>
        </div>
      </div>
    </div>

    <div class="swiper-slide">
      <div class="overflow-hidden position-relative h-100">
        <div class="slideshow-character position-absolute bottom-0 pos_right-center">
          <img loading="lazy" src="{{ ('assets/images/slideshow-character1.png') }}" width="400" height="733"
            alt="Woman Fashion 1"
            class="slideshow-character__img animate animate_fade animate_btt animate_delay-9 w-auto h-auto" />
          <div class="character_markup">
            <p class="text-uppercase font-sofia fw-bold animate animate_fade animate_rtl animate_delay-10">Belajar
            </p>
          </div>
        </div>
        <div class="slideshow-text container position-absolute start-50 top-50 translate-middle">
          <h6 class="text_dash text-uppercase fs-base fw-medium animate animate_fade animate_btt animate_delay-3">
            YukBelajar.id</h6>
          <h2 class="h1 fw-normal mb-0 animate animate_fade animate_btt animate_delay-5">Ayo Mulai</h2>
          <h2 class="h1 fw-bold animate animate_fade animate_btt animate_delay-5">Belajar</h2>
          <a href="#"
            class="btn-link btn-link_lg default-underline fw-medium animate animate_fade animate_btt animate_delay-7">Enroll me</a>
        </div>
      </div>
    </div>

    <div class="swiper-slide">
      <div class="overflow-hidden position-relative h-100">
        <div class="slideshow-character position-absolute bottom-0 pos_right-center">
          <img loading="lazy" src="{{ ('assets/images/slideshow-character2.png') }}" width="400" height="690"
            alt="Woman Fashion 2"
            class="slideshow-character__img animate animate_fade animate_rtl animate_delay-10 w-auto h-auto" />
        </div>
        <div class="slideshow-text container position-absolute start-50 top-50 translate-middle">
          <h6 class="text_dash text-uppercase fs-base fw-medium animate animate_fade animate_btt animate_delay-3">
            YukBelajar.id</h6>
          <h2 class="h1 fw-normal mb-0 animate animate_fade animate_btt animate_delay-5">Sejak Dini</h2>
          <h2 class="h1 fw-bold animate animate_fade animate_btt animate_delay-5">Belajar Mandiri</h2>
          <a href="#"
            class="btn-link btn-link_lg default-underline fw-medium animate animate_fade animate_btt animate_delay-7">Enroll me</a>
        </div>
      </div>
    </div>
  </div>

  <div class="container">
    <div
      class="slideshow-pagination slideshow-number-pagination d-flex align-items-center position-absolute bottom-0 mb-5">
    </div>
  </div>
</section>
<div class="container mw-1620 bg-white border-radius-10">
  <div class="mb-3 mb-xl-5 pt-1 pb-4"></div>
  <section class="category-carousel container">
    <h2 class="section-title text-center mb-3 pb-xl-2 mb-xl-4">Mata Pelajaran</h2>

    <div class="position-relative">
      <div class="swiper-container js-swiper-slider" data-settings='{
          "autoplay": {
            "delay": 5000
          },
          "slidesPerView": 8,
          "slidesPerGroup": 1,
          "effect": "none",
          "loop": true,
          "navigation": {
            "nextEl": ".products-carousel__next-1",
            "prevEl": ".products-carousel__prev-1"
          },
          "breakpoints": {
            "320": {
              "slidesPerView": 2,
              "slidesPerGroup": 2,
              "spaceBetween": 15
            },
            "768": {
              "slidesPerView": 4,
              "slidesPerGroup": 4,
              "spaceBetween": 30
            },
            "992": {
              "slidesPerView": 6,
              "slidesPerGroup": 1,
              "spaceBetween": 45,
              "pagination": false
            },
            "1200": {
              "slidesPerView": 8,
              "slidesPerGroup": 1,
              "spaceBetween": 60,
              "pagination": false
            }
          }
        }'>
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <img loading="lazy" class="w-100 h-auto mb-3" src="{{ ('assets/images/home/demo3/category_1.png') }}" width="124"
              height="124" alt="" />
            <div class="text-center">
              <a href="#" class="menu-link fw-medium">Matematika<br />Dasar</a>
            </div>
          </div>
          <div class="swiper-slide">
            <img loading="lazy" class="w-100 h-auto mb-3" src="{{ ('assets/images/home/demo3/category_2.png') }}" width="124"
              height="124" alt="" />
            <div class="text-center">
              <a href="#" class="menu-link fw-medium">Sains<br />Biologi</a>
            </div>
          </div>
          <div class="swiper-slide">
            <img loading="lazy" class="w-100 h-auto mb-3" src="{{ ('assets/images/home/demo3/category_3.png') }}" width="124"
              height="124" alt="" />
            <div class="text-center">
              <a href="#" class="menu-link fw-medium">Sains<br />Fisika</a>
            </div>
          </div>
          <div class="swiper-slide">
            <img loading="lazy" class="w-100 h-auto mb-3" src="{{ ('assets/images/home/demo3/category_4.png') }}" width="124"
              height="124" alt="" />
            <div class="text-center">
              <a href="#" class="menu-link fw-medium">Bahasa<br />Inggris</a>
            </div>
          </div>
          <div class="swiper-slide">
            <img loading="lazy" class="w-100 h-auto mb-3" src="{{ ('assets/images/home/demo3/category_5.png') }}" width="124"
              height="124" alt="" />
            <div class="text-center">
              <a href="#" class="menu-link fw-medium">Bahasa<br />Mandarin</a>
            </div>
          </div>
          <div class="swiper-slide">
            <img loading="lazy" class="w-100 h-auto mb-3" src="{{ ('assets/images/home/demo3/category_6.png') }}" width="124"
              height="124" alt="" />
            <div class="text-center">
              <a href="#" class="menu-link fw-medium">Ilmu<br />Sejarah</a>
            </div>
          </div>
          <div class="swiper-slide">
            <img loading="lazy" class="w-100 h-auto mb-3" src="{{ ('assets/images/home/demo3/category_7.png') }}" width="124"
              height="124" alt="" />
            <div class="text-center">
              <a href="#" class="menu-link fw-medium">Ilmu<br />PPKN</a>
            </div>
          </div>
          <div class="swiper-slide">
            <img loading="lazy" class="w-100 h-auto mb-3" src="{{ ('assets/images/home/demo3/category_8.png') }}" width="124"
              height="124" alt="" />
            <div class="text-center">
              <a href="#" class="menu-link fw-medium">Spiritual<br />Agama</a>
            </div>
          </div>
        </div>
      </div>

      <div
        class="products-carousel__prev products-carousel__prev-1 position-absolute top-50 d-flex align-items-center justify-content-center">
        <svg width="25" height="25" viewBox="0 0 25 25" xmlns="http://www.w3.org/2000/svg">
          <use href="#icon_prev_md" />
        </svg>
      </div>
      <div
        class="products-carousel__next products-carousel__next-1 position-absolute top-50 d-flex align-items-center justify-content-center">
        <svg width="25" height="25" viewBox="0 0 25 25" xmlns="http://www.w3.org/2000/svg">
          <use href="#icon_next_md" />
        </svg>
      </div>
    </div>
  </section>

  <div class="mb-3 mb-xl-5 pt-1 pb-4"></div>

  <section class="products-grid container">
    <h2 class="section-title text-center mb-3 pb-xl-3 mb-xl-4">Featured Products</h2>

    <div class="row">
      @foreach ($fproducts as $fproduct)

      <div class="col-6 col-md-4 col-lg-3">
        <div class="product-card product-card_style3 mb-3 mb-md-4 mb-xxl-5">
          <div class="pc__img-wrapper">
            <a href="{{route('shop.product.details',['product_slug'=>$fproduct->slug])}}">
              <img loading="lazy" src="{{ ('uploads/products') }}/{{$fproduct->image}}" width="330" height="400"
                alt="{{$fproduct->name}}" class="pc__img">
            </a>
          </div>

          <div class="pc__info position-relative">
            <h6 class="pc__title"><a href="details.html">{{$fproduct->name}}</a></h6>
            <div class="product-card__price d-flex align-items-center">
              <span class="money price text-secondary">
                @if($fproduct->sale_price)
                  <s>Rp.{{$fproduct->regular_price}}</s> Rp.{{$fproduct->sale_price}}
                @else
                  Rp.{{$fproduct->regular_price}}
                @endif  
              </span>
            </div>
          </div>
        </div>
      </div>

      @endforeach
      
    </div><!-- /.row -->

    <div class="text-center mt-2">
      <a class="btn-link btn-link_lg default-underline text-uppercase fw-medium" href="#">Load More</a>
    </div>
  </section>
</div>

<div class="mb-3 mb-xl-5 pt-1 pb-4"></div>

</main>
@endsection
