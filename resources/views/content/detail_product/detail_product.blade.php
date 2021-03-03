@extends('mainlayout.category_layout.menu_layout')
@section('tittle')
<title>Detail_product</title>
@endsection
@section('css')
 <link
      rel="stylesheet"
      href="{{asset('swiper/thumbs-gallery/thumbs-gallery.css')}}"
    />
<link rel="stylesheet" href="{{asset('swiper/navigation-per-view.css')}}" />
<link rel="stylesheet" href="{{asset('bussiness_area/css/business-area.css')}}" />
<link rel="stylesheet" href="{{asset('detail_product/css/business-detail.css')}}" />
@endsection
@section('page_con')

     <div
      class="container d-flex flex-row bd-highlight mb-3"
      style="margin-top: 100px"
    >
      <div class="p-2 bd-highlight" style="width: 50%; height: auto">
        <div class="container" style="height: 600px">
          <div class="swiper-container gallery-top">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <img
                  src="http://localhost/CtyCPseed/{{$product->feature_image_path}}"
                  alt=""
                  srcset=""
                />
              </div>
               @foreach($productImages as $image_item )
              <div class="swiper-slide">
                <img
                  src="http://localhost/CtyCPseed/{{$image_item->image_path}}"
                  alt=""
                  srcset=""
                />
              </div>
              @endforeach
            </div>
            <!-- Add Arrows -->
            <div class="swiper-button-next swiper-button-white"></div>
            <div class="swiper-button-prev swiper-button-white"></div>
          </div>
          <div class="swiper-container gallery-thumbs">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <img
                  src="http://localhost/CtyCPseed/{{$product->feature_image_path}}"
                  alt=""
                  srcset=""
                />
              </div>
              @foreach($productImages as $image_item )
              <div class="swiper-slide">
                <img
                  src="http://localhost/CtyCPseed/{{$image_item->image_path}}"
                  alt=""
                  srcset=""
                />
              </div>
              @endforeach
              
            </div>
          </div>
        </div>
      </div>
      <div class="p-2 bd-highlight" style="width: 50%">
        <span class="badge rounded-pill bg-light detail-rounded-pill shadow-sm"
          >{{$product->name}}
        </span>
        
        
        <div class="d-flex flex-column bd-highlight mb-3">
          <div class="bd-highlight">
            <a
              data-autoplay="true"
              data-vbtype="video"
              href="https://www.youtube.com/watch?v=De5Lz3QzzWI"
              class="btn btn-success detail-btn-success venobox shadow-sm"
            >
              video hướng dẫn
            </a>
          </div>
          <div class="bd-highlight mt-2">
            <button
              type="button"
              class="btn btn-outline-success detail-btn-outline-success shadow-sm"
            >
              tài liệu hướng dẫn
            </button>
          </div>
        </div>
      </div>
    </div>
    @include('content.detail_product.related_information')

@endsection
@section('js')
 <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script src="{{asset('swiper/thumbs-gallery/thumbs-gallery.js')}}"></script>
    <script>
      var galleryThumbs = new Swiper(".gallery-thumbs", {
        spaceBetween: 20,
        slidesPerView: 3,
        loop: true,
        freeMode: true,
        watchSlidesVisibility: true,
        watchSlidesProgress: true,
      });
      var galleryTop = new Swiper(".gallery-top", {
        spaceBetween: 10,
        loop: true,

        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
        thumbs: {
          swiper: galleryThumbs,
        },
      });
    </script>

@endsection