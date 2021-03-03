  
 @extends('mainlayout.mainlayout')
@section('tittle')
<title>Product Listing</title>
@endsection
@section('css')
  <link rel="stylesheet" href="{{asset('sort/plugins/jquery-bar-rating/dist/themes/fontawesome-stars.css')}}">
    <link rel="stylesheet" href="{{asset('sort/plugins/slick/slick/slick.css')}}">
    <link rel="stylesheet" href="{{asset('sort/plugins/bootstrap-select/dist/css/bootstrap-select.min.css')}}">
    <link rel="stylesheet" href="{{asset('sort/plugins/Magnific-Popup/dist/magnific-popup.css')}}">
<link rel="stylesheet" href="{{asset('sort/css/style.css')}}" />
@endsection
@section('content')
   <div class="ps-products-wrap pt-80 pb-80">
        <div class="ps-products" data-mh="product-listing">
          <div class="ps-product-action">
            <div class="ps-product__filter">
              <select class="ps-select selectpicker">
                <option value="1">Shortby</option>
                <option value="2">Name</option>
                <option value="3">Price (Low to High)</option>
                <option value="3">Price (High to Low)</option>
              </select>
            </div>
           
          </div>
           
          <div class="ps-product__columns">
           <div id="content" style=" background: #ddd;">
            @foreach($products as $pro)
            
              <div class="ps-product__column">
              <div class="ps-shoe mb-30">
                <div class="ps-shoe__thumbnail">
                  <div class="ps-badge"><span>New</span></div>
                  <img src="http://localhost/CtyCPseed/{{$pro->feature_image_path}}" alt=""><a class="ps-shoe__overlay" href="<?php echo url('/chi-tiet-san-pham/'.$pro->id) ?>"></a>
                </div>
                <div class="ps-shoe__content">
                  
                  <div class="ps-shoe__detail"><a class="ps-shoe__name" href="#">{{$pro->name}}</a>
                    <p class="ps-shoe__categories"><a href="#">Men shoes</a>,<a href="#"> Nike</a>,<a href="#"> Jordan</a></p><span class="ps-shoe__price">
                      <del>£220</del>{{$pro->price}}</span>
                  </div>
                </div>
              </div>
            
            </div>
            
            @endforeach
        </div>
            <div id="getsanphammoi"></div>
          </div>
          
         
          <div class="ps-product-action">
            <div class="ps-product__filter">
              <select class="ps-select selectpicker">
                <option value="1">Shortby</option>
                <option value="2">Name</option>
                <option value="3">Price (Low to High)</option>
                <option value="3">Price (High to Low)</option>
              </select>
            </div>
            <div class="ps-pagination">
              <ul class="pagination">
                <li><a href="#"><i class="fa fa-angle-left"></i></a></li>
                <li class="active"><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">...</a></li>
                <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
              </ul>
            </div>
          </div>
        </div>

         <div class="ps-sidebar" data-mh="product-listing">
          <aside class="ps-widget--sidebar ps-widget--category">
            <div class="ps-widget__header">
              <h3>Category</h3>
            </div>
            <div class="ps-widget__content">
              <ul class="ps-list--checked">
                @foreach($categorylist as $cateItem)
                <li><label class="container">{{$cateItem->name}}
                  <input type="checkbox" value="{{$cateItem->id}}" id="btn1" class="cate">
                  <span class="checkmark"></span>
                </label></li>
                @endforeach

                
              </ul>
            </div>
          </aside>
          <aside class="ps-widget--sidebar ps-widget--category">
            <div class="ps-widget__header">
              <h3>BRANDS</h3>
            </div>
            <div class="ps-widget__content">
              <ul class="ps-list--checked">
               @foreach($brands as $brandItem)
                <li><label class="container">{{$brandItem->name}}
                  <input id="btn2" type="checkbox" value="{{$brandItem->id}}" class="brand">
                  <span class="checkmark"></span>
                </label></li>
                @endforeach

                
              </ul>
            </div>
          </aside>
          <aside class="ps-widget--sidebar ps-widget--filter">
            <div class="ps-widget__header">
              <h3>Price</h3>
            </div>
              <div class="ps-widget__content">
              <ul class="ps-list--checked">
                
                <li><label class="container">Tất cả giá
                  <input type="radio" checked="checked" value="0-1000000" id="btn3" class="price" name="radio">
                  <span class="checkmark"></span>
                </label></li>
                <li><label class="container">0-100000
                  <input type="radio" value="0-100000" id="btn3"class="price" name="radio">
                  <span class="checkmark"></span>
                </label></li>
                <li><label class="container">100000-200000
                  <input type="radio" value="100000-200000" id="btn3" class="price" name="radio">
                  <span class="checkmark"></span>
                </label></li>
                
                <li><label class="container">200000-300000
                  <input type="radio" value="200000-300000" id="btn3" class="price" name="radio">
                  <span class="checkmark"></span>
                </label></li>
                <li><label class="container"> lớn hơn 300000
                  <input type="radio"  value="300000-1000000" id="btn3" class="price" name="radio">
                  <span class="checkmark"></span>
                </label></li>


                
              </ul>
            </div>
          
          </aside>

           
          
          
        
          
        </div>
      </div>
@endsection
@section('js')
 <script language="javascript">
 
            document.getElementById("btn1").onclick = function () {
              
                    document.getElementById("content").style.display = 'none';
                
                
            };
             document.getElementById("btn2").onclick = function () {
                
                    document.getElementById("content").style.display = 'none';
                
            };
             document.getElementById("btn3").onclick = function () {
                
                    document.getElementById("content").style.display = 'none';
                
            };
 
            document.getElementById("btn6").onclick = function () {
                document.getElementById("content").style.display = 'block';
            };
 
        </script>
 <script  type="text/javascript">
        $('.ps-sidebar').click(function(){
            var price=[];
            $('.price').each(function(){
                if($(this).is(":checked")){
                    price.push($(this).val());
                }
            });
            
            price1=price.toString();
             wOprice=price1.split('-',2);

            var first = wOprice.pop();   
            var last = wOprice.shift();     

            console.log(first);
            console.log(last);
             
            var pro=[];
            $('.cate').each(function(){
                if($(this).is(":checked")){
                    pro.push($(this).val());
                }
            });

        Finalpro=pro.toString();
        console.log(Finalpro);

         var brands=[];
            $('.brand').each(function(){
                if($(this).is(":checked")){
                    brands.push($(this).val());
                }
            });

        Finalbrand=brands.toString();
        console.log(Finalbrand);

        $.ajax({
            method:'get',
            dataType:'html',
            url:'{{url('/sort-di')}}',
             data:{ brand: Finalpro,category:Finalbrand,first:first,last:last},

                    success: function (response) {
                       
                       
                        $('#getsanphammoi').html(response);
                    }

        })
        });
    </script>

@endsection