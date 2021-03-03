<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slider;
use App\Menu;
use App\Payment;
use App\Order;
use App\OrderDetail;
use App\Shipping;
use Session;
use App\Customer;
use PayPal\Api\PaymentExecution;

class CheckoutController extends Controller
{


    public function index(){
    	$sliders =Slider::latest()->get();
        $menuLimit=Menu::where('parent_id',0)->get();
        $user_id=Session::get('id');
        
        if($user_id){
        	$infor_user=Customer::find($user_id);
        	return view('content.checkout.checkout',compact('sliders','menuLimit','infor_user'));
        }
        else{
        	return view('layoutLogin.login');
        }
    	
    }
    public function save_checkout(Request $request){
    	//insert method payment
        $node_order=$request->node_order;
    	$datapayment=array();
    	$datapayment['method']=$request->payment;
    	$datapayment['status']=1;

    	$dataCustomerUpdate=[
            'phone_number'=>$request->phone_number,
            'address'=>$request->address,
           
        ];
        Customer::find(Session::get('id'))->update($dataCustomerUpdate);

    	$payment_id=Payment::insertGetId($datapayment);
    	//insert order

    	$cart_result =Session::get('cart');
    	$total=0;
    	foreach($cart_result as $cart){
        	$subtotal=$cart['product_price']*$cart['product_qty'];
        	$total+=$subtotal;
    	}
    	
    	$order_data=array();
          if( $node_order!=null){
                $order_data['created_at'] =new \DateTime();
                $order_data['customer_id']=Session::get('id');
                $order_data['shipping_id']=1;
                $order_data['payment_id']=$payment_id;
                $order_data['order_total']=$total;
                $order_data['order_status']=1;
                $order_data['node_order']=$node_order ;  
                
                $order_id=Order::insertGetId($order_data);
          }
          else{
                $order_data['created_at'] =new \DateTime();
                $order_data['customer_id']=Session::get('id');
                $order_data['shipping_id']=1;
                $order_data['payment_id']=$payment_id;
                $order_data['order_total']=$total;
                $order_data['order_status']=1;
                $order_data['node_order']='';  
                
                $order_id=Order::insertGetId($order_data);
          }
    

    	//insert order detail
    	foreach($cart_result as $row ){
    	 	
    	 	$order_detail_order['order_id']=$order_id;
    	 	$order_detail_order['product_id']=   $row['product_id'];
    	 	$order_detail_order['product_name']=$row['product_name'];
    	 	$order_detail_order['product_price']=$row['product_price'];
    	 	$order_detail_order['product_quantity']=$row['product_qty'];
    	 	$thanhcong=OrderDetail::insert($order_detail_order);
    	
	}
    if($thanhcong){
        Session::put('cart',null);
    }
    return redirect()->route('gioi-thieu');


    }






     public function paypal(Request $request){
        $apiContext = new \PayPal\Rest\ApiContext(
            new \PayPal\Auth\OAuthTokenCredential(
                'AakOHX9nznvv-oVrYjz7jh7Q2Jowa7YxVhif_g_YezfbuDESpaDgapg6wpRm3c5VHzmAeP9SG0onsGVq',     // ClientID
                'EFIKwElgjQIYj_ihRvQ7xCL4hEHC9PsRpm0osc-_rIF0Tl8QPud9UYNQZUGzO58bLFrOP8iRvnJ2Um2x'      // ClientSecret
            )
        );
        // After Step 2
        $payer = new \PayPal\Api\Payer();
        $payer->setPaymentMethod('paypal');

        $amount = new \PayPal\Api\Amount();
        $amount->setTotal($request->vnd_to_usd);
        $amount->setCurrency('USD');

        $transaction = new \PayPal\Api\Transaction();
        $transaction->setAmount($amount);
        $node_order=$request->node_order;
        $payment_method=$request->payment;
        $phone_number=$request->phone_number;
        $address=$request->address;
        $redirectUrls = new \PayPal\Api\RedirectUrls();
        $redirectUrls->setReturnUrl(route('paypal_return',compact('node_order','payment_method','address','phone_number')))
            ->setCancelUrl(route('paypal_cancel'));

        $payment = new \PayPal\Api\Payment();
        $payment->setIntent('sale')
            ->setPayer($payer)
            ->setTransactions(array($transaction))
            ->setRedirectUrls($redirectUrls);
        // After Step 3
        try {
            $payment->create($apiContext);
            echo $payment;
            echo "\n\nRedirect user to approval_url: " . $payment->getApprovalLink() . "\n";
            return redirect($payment->getApprovalLink());
        }
        catch (\PayPal\Exception\PayPalConnectionException $ex) {
            // This will print the detailed information on the exception.
            //REALLY HELPFUL FOR DEBUGGING
            echo $ex->getData();
        }
    }
    public function paypalReturn(){
        $apiContext = new \PayPal\Rest\ApiContext(
            new \PayPal\Auth\OAuthTokenCredential(
                'AakOHX9nznvv-oVrYjz7jh7Q2Jowa7YxVhif_g_YezfbuDESpaDgapg6wpRm3c5VHzmAeP9SG0onsGVq',     // ClientID
                'EFIKwElgjQIYj_ihRvQ7xCL4hEHC9PsRpm0osc-_rIF0Tl8QPud9UYNQZUGzO58bLFrOP8iRvnJ2Um2x'      // ClientSecret
            )
        );
        //dd(\request()->all());
        //Get payment object by passing paymentId
        $paymentId = $_GET['paymentId'];
        $payment = \PayPal\Api\Payment::get($paymentId, $apiContext);
        $payerId = $_GET['PayerID'];
       


// Execute payment with payer ID
        $execution = new PaymentExecution();
        $execution->setPayerId($payerId);

        try {
            // Execute payment
            $result = $payment->execute($execution, $apiContext);
             $phone_number= $_GET['phone_number'];
             $payment_method= $_GET['payment_method'];
             
             $address= $_GET['address'];
             
             $datapayment=array();
            $datapayment['method']=$payment_method;
            $datapayment['status']=1;

            $dataCustomerUpdate=[
                'phone_number'=>$phone_number,
                'address'=>$address,
               
            ];
            Customer::find(Session::get('id'))->update($dataCustomerUpdate);

            $payment_id=Payment::insertGetId($datapayment);
           
            //insert order

        $cart_result =Session::get('cart');
        $total=0;
        foreach($cart_result as $cart){
            $subtotal=$cart['product_price']*$cart['product_qty'];
            $total+=$subtotal;
        }
        
        $order_data=array();
          if(isset($_GET['node_order'])){
                $order_data['created_at'] =new \DateTime();
                $order_data['customer_id']=Session::get('id');
                $order_data['shipping_id']=1;
                $order_data['payment_id']=$payment_id;
                $order_data['order_total']=$total;
                $order_data['order_status']=1;
                $order_data['node_order']=$_GET['node_order'] ;  
                
                $order_id=Order::insertGetId($order_data);
          }
          else{
                $order_data['created_at'] =new \DateTime();
                $order_data['customer_id']=Session::get('id');
                $order_data['shipping_id']=1;
                $order_data['payment_id']=$payment_id;
                $order_data['order_total']=$total;
                $order_data['order_status']=1;
                $order_data['node_order']='';  
                
                $order_id=Order::insertGetId($order_data);
          }

          //insert order detail
        foreach($cart_result as $row ){
            
            $order_detail_order['order_id']=$order_id;
            $order_detail_order['product_id']=   $row['product_id'];
            $order_detail_order['product_name']=$row['product_name'];
            $order_detail_order['product_price']=$row['product_price'];
            $order_detail_order['product_quantity']=$row['product_qty'];
            $thanhcong=OrderDetail::insert($order_detail_order);
        
            }
            if($thanhcong){
                Session::put('cart',null);
            }
            return redirect()->route('gioi-thieu');


        } catch (\PayPal\Exception\PayPalConnectionException $ex) {
            echo $ex->getCode();
            echo $ex->getData();
            die($ex);
        }
    }
    public function paypalCancel(){
        return redirect()->route('/checkout');
    }

}
