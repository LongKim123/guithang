@extends('mainlayout.mainlayout')
@section('tittle')
<title>Introduce</title>
@endsection
@section('css')
<link rel="stylesheet" href="{{asset('swiper/navigation-per-view.css')}}" />
<link rel="stylesheet" href="{{asset('bussiness_area/css/business-area.css')}}" />
@endsection
@section('content')


 <div class="container-fluid">
      <!-- Swiper -->
      <div class="swiper-container">
        <div class="swiper-wrapper swiper-wrapper-2" style="margin-left: 50px">
      
       
         
         @foreach($products as $productItem)
         
          <div class="swiper-slide slider-2">
            <div class="bd-highlight d-flex flex-column shadow">
              <div class="bd-highlight slider-2__1">
                <img
                  src="http://localhost/CtyCPseed/{{$productItem->feature_image_path}}"
                  alt="test"
                />
              </div>
              <div class="bd-highlight slider-2__2">
                <p>{{$productItem->name}}</p>
              </div>


              <div class="bd-highlight slider-2__3">
                <form>
                    @csrf
                    <input type="hidden" name="" value="{{$productItem->id}}" class="cart_product_id_{{$productItem->id}}">

                    <input type="hidden" name="" value="{{$productItem->name}}" class="cart_product_name_{{$productItem->id}}">

                    <input type="hidden" name="" value="{{$productItem->feature_image_path}}" class="cart_product_image_{{$productItem->id}}">

                    <input type="hidden" name="" value="{{$productItem->price}}" class="cart_product_price_{{$productItem->id}}">

                    <input type="hidden" name="" value="1" class="cart_product_qty_{{$productItem->id}}">
                                                      
                    <button type="button" data-id="{{$productItem->id}}" class="btn btn-default add-to-cart" name="add-to-cart">Thêm giỏ hàng</button>                                     
                    </form>
                <a href="{{URL::to('chi-tiet-san-pham',['id'=>$productItem->id])}}">{{$productItem->name}}</a>
              </div>
            </div>
          </div>
          @endforeach
        
         
        </div>
        <!-- Add Arrows -->
        <div class="swiper-button-next swiper-button-next-2"></div>
        <div class="swiper-button-prev swiper-button-prev-2"></div>
      </div>
    </div>

  <div class="container tech">
      <div class="d-flex flex-column bd-highlight mb-3 p-4">
        <div class="p-2 bd-highlight">
          <div class="d-flex flex-column bd-highlight mb-3 my-card-2 shadow">
            <div class="p-2 bd-highlight">
              <p class="my-card-2__number text-end">01</p>
            </div>
            <div class="p-2 bd-highlight my-card-2-crop">
              <div class="crop">
                <img
                  class="my-card-2__img"
                  src="https://storage.vinaseed.com.vn/Data/2020/01/11/106923787-m-637143360648399069.jpg"
                  alt="logo"
                />
              </div>
            </div>
            <div class="p-2 bd-highlight my-card-2__crop-card">
              <div class="card my-card-2__card shadow border-0">
                <div class="card-body">
                  <h5 class="card-title main-title-1">
                    NGHIÊN CỨU, CHỌN TẠO, SẢN XUẤT KINH DOANH GIỐNG CÂY TRỒNG
                  </h5>
                  <p class="test-1__hidden">
                    Mọi thành viên trong Tập đoàn phải tuân thủ đầy đủ các quy
                    định của pháp luật và các quy định của Tập đoàn một cách tự
                    giác và coi đó là một trong những chuẩn mực bắt buộc đối với
                    mọi thành viên của VINASEED.
                  </p>
                  <a class="show-more"
                    >Show more<svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="16"
                      height="16"
                      viewBox="0 0 24 24"
                    >
                      <path
                        d="M0 7.33l2.829-2.83 9.175 9.339 9.167-9.339 2.829 2.83-11.996 12.17z"
                      /></svg
                  ></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection