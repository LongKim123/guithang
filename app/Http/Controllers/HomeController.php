<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Slider;
use App\Menu;
use App\Product;
use App\ProductImage;

class HomeController extends Controller
{
    public function index(){
    	$sliders =Slider::latest()->get();
    	$menuLimit=Menu::where('parent_id',0)->get();
    	return view('content.all_product',compact('sliders','menuLimit'));
    }
    public function introduction(){
        $products=Product::latest()->take(4)->get();
    	$sliders =Slider::latest()->take(1)->get();
    	$menuLimit=Menu::where('parent_id',0)->get();
    	return view('content.introducton.category_page.category_page',compact('sliders','menuLimit','products'));
    }
	public function gioi_thieu(){
        $sliders =Slider::latest()->get();
        $menuLimit=Menu::where('parent_id',0)->get();
		return view('content.introducton.general_introduction',compact('sliders','menuLimit'));
	}
   
}
