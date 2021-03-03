  
 @extends('mainlayout.mainlayout')
@section('tittle')
<title>Checkout</title>
@endsection
@section('css')
  <link rel="stylesheet" href="{{asset('sort/plugins/jquery-bar-rating/dist/themes/fontawesome-stars.css')}}">
    <link rel="stylesheet" href="{{asset('sort/plugins/slick/slick/slick.css')}}">
    <link rel="stylesheet" href="{{asset('sort/plugins/bootstrap-select/dist/css/bootstrap-select.min.css')}}">
    <link rel="stylesheet" href="{{asset('sort/plugins/Magnific-Popup/dist/magnific-popup.css')}}">
<link rel="stylesheet" href="{{asset('sort/css/style.css')}}" />
@endsection
@section('content')

<div class="ps-checkout pt-80 pb-80">
        <div class="ps-container">
          <form  class="ps-checkout__form" action="" id="button" method="post">
            @csrf
            <div class="row">
                  <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 ">
                    <div class="ps-checkout__billing">
                      <h3>Thông tin gửi hàng</h3>

                            <div class="form-group form-group--inline">
                              <label>UserName<span></span>
                              </label>
                              <input class="form-control" value="{{$infor_user->name}}" type="text">
                            </div>
                            
                            
                            <div class="form-group form-group--inline">
                              <label>Email Address<span></span>
                              </label>
                              <input value="{{$infor_user->email}}" class="form-control" type="email">
                            </div>
                            
                            <div class="form-group form-group--inline">
                              <label>Phone<span></span>
                              </label>
                              <input class="form-control" name="phone_number" value="{{$infor_user->phone_number}}" type="text">
                            </div>
                            <div class="form-group form-group--inline">
                              <label>Address<span></span>
                              </label>
                              <input name="address" value="{{$infor_user->address}}" class="form-control" type="text">
                            </div>
                      <div class="form-group">
                        <div class="ps-checkbox">
                          <input class="form-control" type="checkbox" id="cb01">
                          <label for="cb01">Sửa thông tin ?</label>
                        </div>
                      </div>
                      <h3 class="mt-40"> Thông tin bổ sung</h3>
                      <div class="form-group form-group--inline textarea">
                        <label>Ghi chú cho đơn hàng</label>
                        <textarea class="form-control" name="node_order" rows="5" placeholder="Ghi chú cho đơn hàng của bạn:ví dụ về những lưu ý khi giao hàng"></textarea>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 ">
                    <div class="ps-checkout__order">
                      <header>
                        <h3>Đơn Hàng Của Bạn</h3>
                      </header>
                      @php
                        $total=0;
                      @endphp
                      
                      @foreach(Session::get('cart') as $key=>$cart)
                        @php
                          $subtotal=$cart['product_price']*$cart['product_qty'];
                          $total+=$subtotal;
                        @endphp
                      @endforeach
                       @php
                          $vnd_to_usd = $total/23083;
                      @endphp
                      <div class="content">
                        <table class="table ps-checkout__products">
                          <thead>
                            <tr>
                             
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>Tạm tính</td>
                              <td>{{number_format($total)}}VNĐ</td>
                            </tr>
                             <tr>
                              <td>Giảm giá</td>
                              <td>0VNĐ</td>
                            </tr>
                            <tr>
                              <td>Tổng tiền</td>
                              <td>{{number_format($total)}}VNĐ</td>
                            </tr>
                            <tr>
                              <td>Thanh toán quốc tế</td>
                              <td>{{round($vnd_to_usd,2)}}USD</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                      <footer>
                        <h3>Phương thức thanh toán</h3>
                                                
                          <div class="form-group paypal">
                          <div class="ps-radio ps-radio--inline">
                            <input class="form-control" type="radio" id="rdo02" value="2" name="payment"  >
                            <label for="rdo02">Paypal</label>
                             
                           
                            
                          
                          <ul  class="ps-payment-method">
                            <input type="hidden"  value="{{round($vnd_to_usd,2)}}" name="vnd_to_usd" >
                           
                          
                           
                          </ul>
                            <button  style="display:none;" id="btn_paypal" class="ps-btn ps-btn--fullwidth">Thanh Toán Bằng Paypal<i class="ps-icon-next"></i></button>
                         
                        </div>
                      </div>
                          <div  class="form-group cheque">
                          <div class="ps-radio">
                            <input class="form-control" type="radio" id="rdo01" value="1" name="payment" >
                            <label for="rdo01">Thanh toán khi nhận hàng</label>
                            <p>Vui lòng kiểm tra thông tin bao gồm tên,địa chỉ ,số điện thoại một cách chính xác</p>
                          </div>

                           <button  id="btn_dathang" style="display:none;" class="ps-btn ps-btn--fullwidth">Đặt Hàng<i class="ps-icon-next"></i></button>
                        </div>
                        
                        
                        
                        
                      </footer>
                    </div>
                    <div class="ps-shipping">
                      
                    </div>
                  </div>
            </div>
          </form>
        </div>
      </div>
@endsection
@section('js')
<script language="javascript">
 
            document.getElementById("rdo01").onclick = function () {
                    document.getElementById("btn_dathang").style.display = 'block';
                     document.getElementById("btn_paypal").style.display = 'none';
                    document.getElementById("button").action = '{{URL::to('/save-checkout')}}';
                
                
            };
             document.getElementById("rdo02").onclick = function () {
                document.getElementById("btn_paypal").style.display = 'block';
                 document.getElementById("btn_dathang").style.display = 'none';
                document.getElementById("button").action = '{{URL::to('/paypal')}}';
            };
        
 
        </script>

<script src="https://www.paypalobjects.com/api/checkout.js"></script>


@endsection