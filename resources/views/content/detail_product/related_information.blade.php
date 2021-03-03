  <!-- <div class="container sptt" style="margin-top: 30px !important">
      <p>SẢN PHẨM TƯƠNG TỰ</p>
      <div class="d-flex flex-row flex-wrap bd-highlight">
        @foreach($related as $relatedItem)
        <div class="p-2 bd-highlight slider-2 d-flex flex-column shadow">
          <div class="bd-highlight slider-2__1">
            <img
              src="http://localhost/CtyCPseed/{{$relatedItem->feature_image_path}}"
              alt="test"
            />
          </div>
          <div class="bd-highlight slider-2__2">
            <p>Giống lúa thuần chất lượng Thiên ưu 8</p>
          </div>

          <div class="bd-highlight slider-2__3">
            <a href="{{URL::to('chi-tiet-san-pham',['id'=>$relatedItem->id])}}">Thương hiệu giống cây trồng</a>
          </div>
        </div>
        @endforeach -->
      
       <div class="container mt-5">
      <p class="sptt-title">Các Sản Phẩm Tương Tư</p>
      <div class="d-flex flex-row bd-highlight mb-3">
        @foreach($related as $relatedItem)
        <div class="p-2 bd-highlight">
          <div class="d-flex flex-column bd-highlight mb-3 card-2">
            <div class="bd-highlight card-2__wrapper-img">
              <img
                src="http://localhost/CtyCPseed/{{$relatedItem->feature_image_path}}"
              alt="test"
                alt="logo"
              />
            </div>
            <div class="bd-highlight card-2__title">{{$relatedItem->name}}</div>
             
          </div>
        </div>
        @endforeach

      </div>
    </div>
       
      </div>
    </div>