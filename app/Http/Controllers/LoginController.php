<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use Session;
use App\Social; 
use Socialite;


use Illuminate\Support\Facades\Redirect;
class LoginController extends Controller
{
	private $customer;
	public function __construct(Customer $customer){
		$this->customer=$customer;
	}
    public function index(){
    	return view('layoutLogin.register');
    }

    public function store(Request $request){
    	$this->customer->create([
    		'name'=>$request->name,
    		'email'=>$request->email,
    		'password'=>$request->password,
    		'address'=>$request->address,
    		'phone_number'=>$request->phone_number

    	]);
    	return view('layoutLogin.login');
    	
    }
    public function success(Request $request){

    	$email=$request->email;
    	$password=$request->password;
    	$result=$this->customer->where('email',$email)->where('password',$password)->first();
        $cart=Session::get('cart');
    	if($result){
    		Session::put('name',$result->name);
    	 	Session::put('id',$result->id);
            if($cart)
            {
                return Redirect::to('cart-shopping');
            }
            else{
            return Redirect::to('trang-chu');
            }
    	 	
    	}
    	else
    	{
    		return redirect()->route('dang-ky');
    	}
    }
    public function logout(){
        Session::put('id',null);
          Session::put('name',null);
          return redirect()->route('/');
    }

    public function login_facebook(){
        return Socialite::driver('facebook')->redirect();
    }

    public function callback_facebook(){
        $provider = Socialite::driver('facebook')->user();
        $account = Social::where('provider','facebook')->where('provider_user_id',$provider->getId())->first();
         $cart=Session::get('cart');
        if($account){
            //login in vao trang quan tri  
            $account_name = Customer::where('id',$account->user)->first();
            
            Session::put('name',$account_name->name);
            Session::put('id',$account_name->id);
            if($cart)
            {
                return Redirect::to('cart-shopping');
            }
            else{
            return Redirect::to('trang-chu');
            }
        }else{

            $long = new Social([
                'provider_user_id' => $provider->getId(),
                'provider' => 'facebook'
            ]);

            $orang = Customer::where('email',$provider->getEmail())->first();

            if(!$orang){
                $orang = Customer::create([
                    'name' => $provider->getName(),
                    'email' => $provider->getEmail(),
                    'password'=>'',
                    'address'=>'',
                    'phone_number'=>''

                    

                ]);
            }
            $long->login()->associate($orang);
            $long->save();

            $account_name = Customer::where('id',$account->user)->first();

            Session::put('name',$account_name->admin_name);
            Session::put('id',$account_name->admin_id);
            return redirect('gioi-thieu')->with('message', 'Đăng nhập tài khoản Facebook thành công');
        } 
    }

}
