<div class="container d-flex justify-content-center mt-5">
   @foreach($sliders as $slider)
      <div class="my-banner d-flex flex-column">
        <div>
          <nav aria-label="breadcrumb my-banner__breadcrumb">
            <ol class="breadcrumb">
              <li>#</li>
              <li class="breadcrumb-item"><a href="#">Giới thiệu</a></li>
              <li class="breadcrumb-item active" aria-current="page">
                Văn Hóa Công Ty
              </li>
            </ol>
          </nav>
        </div>

        <div>
          <p class="my-banner__title">Văn Hóa</p>
        </div>

        <div class="my-banner__crop">
         
          <img src="http://localhost/CtyCPseed/{{$slider->image_path}}" alt="" />
        </div>
        
      </div>
      @endforeach
    </div>