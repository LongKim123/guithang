<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slider;
use App\Menu;
use App\Category;
use App\Product;
use App\Product_Tag;
use App\Tag;
use App\Brand;
use App\ProductImage;
use DB;
class ProductController extends Controller
{
        private $category;
        private $brand;
        public function __construct(Brand $brand,Category $category)
        {
            $this->brand=$brand;
            $this->category=$category;
        }
     public function detail_product(Request $request, $id){
        $sliders =Slider::latest()->get();
        $menuLimit=Menu::where('parent_id',0)->get();
       // $product =Product::where('id',$id)->get();
        $product=Product::find($id);
        $productImages=ProductImage::where('product_id',$id)->get();
        $related=Product::where('category_id',$product->category_id)->get();
        $url_pro=$request->url();

       return view('content.detail_product.detail_product',compact('sliders','menuLimit','product','productImages','related','url_pro'));
    }
    public function product_listing(){
        $brands=Brand::latest()->get();
        $products=DB::table('products')->get();
        $categorylist=Category::where('parent_id',11)->get();
        $tag_name= DB::table('products')->join('categories','categories.id','=','products.category_id')
        ->join('product_tags','product_tags.product_id','=','products.id')
        ->join('tags','product_tags.tag_id','=','tags.id')
        ->where('parent_id',11)->get();
        $sliders =Slider::latest()->get();
        $menuLimit=Menu::where('parent_id',0)->get();
        
         return view('content.sort.sort',compact('sliders','menuLimit','categorylist','tag_name','products','brands'));
    }
    public function sort_di(Request $request){
        $category= $request->category;
        $brand=$request->brand;
        $first =$request->first;
        $last=$request->last;
          if($first==null ){
            if($brand==null){
                 $products1 = DB::table('products')->whereIN('brand_id',explode( ',', $category ))->paginate(20);
            response()->json($products1);
        foreach($products1 as $pro)
          {
            ?>
            
            
            
            <div class="ps-product__column">
              <div class="ps-shoe mb-30">
                <div class="ps-shoe__thumbnail">
                  <div class="ps-badge"><span>New</span></div>
                  <img src="http://localhost/CtyCPseed/<?php echo $pro->feature_image_path?>" alt=""><a class="ps-shoe__overlay" href="<?php echo url('/chi-tiet-san-pham/'.$pro->id) ?>"></a>
                </div>
                <div class="ps-shoe__content">
                  
                  <div class="ps-shoe__detail"><a class="ps-shoe__name" href="#"><?php echo $pro->name  ?></a>
                    <p class="ps-shoe__categories"><a href="#">Men shoes</a>,<a href="#"> Nike</a>,<a href="#"> Jordan</a></p><span class="ps-shoe__price">
                      <del>£220</del> <?php echo $pro->price  ?></span>
                  </div>
                </div>
              </div>
            </div>
          
         

                        
                        <?php  
                } 
         }

                

        elseif( $category==null ){
                 $products1 = DB::table('products')->whereIN('category_id',explode( ',', $brand ))->paginate(20);
            response()->json($products1);
        foreach($products1 as $pro)
          {
            ?>
            
            
            
            <div class="ps-product__column">
              <div class="ps-shoe mb-30">
                <div class="ps-shoe__thumbnail">
                  <div class="ps-badge"><span>New</span></div>
                  <img src="http://localhost/CtyCPseed/<?php echo $pro->feature_image_path?>" alt=""><a class="ps-shoe__overlay" href="<?php echo url('/chi-tiet-san-pham/'.$pro->id) ?>"></a>
                </div>
                <div class="ps-shoe__content">
                  
                  <div class="ps-shoe__detail"><a class="ps-shoe__name" href="#"><?php echo $pro->name  ?></a>
                    <p class="ps-shoe__categories"><a href="#">Men shoes</a>,<a href="#"> Nike</a>,<a href="#"> Jordan</a></p><span class="ps-shoe__price">
                      <del>£220</del> <?php echo $pro->price  ?></span>
                  </div>
                </div>
              </div>
            </div>
          
         

                        
                        <?php  
                } 
         }
          
         else{
           $products1 = DB::table('products')->whereIN('category_id',explode( ',', $brand ))->whereIN('brand_id',explode( ',', $category ))->paginate(20);
            response()->json($products1);
        foreach($products1 as $pro)
          {
            ?>
            
            
            
            <div class="ps-product__column">
              <div class="ps-shoe mb-30">
                <div class="ps-shoe__thumbnail">
                  <div class="ps-badge"><span>New</span></div>
                  <img src="http://localhost/CtyCPseed/<?php echo $pro->feature_image_path?>" alt=""><a class="ps-shoe__overlay" href="<?php echo url('/chi-tiet-san-pham/'.$pro->id) ?>"></a>
                </div>
                <div class="ps-shoe__content">
                  
                  <div class="ps-shoe__detail"><a class="ps-shoe__name" href="#"><?php echo $pro->name  ?></a>
                    <p class="ps-shoe__categories"><a href="#">Men shoes</a>,<a href="#"> Nike</a>,<a href="#"> Jordan</a></p><span class="ps-shoe__price">
                      <del>£220</del> <?php echo $pro->price  ?></span>
                  </div>
                </div>
              </div>
            </div>
          
         

                        
                        <?php  
                } 
         }
      }
          else if($category==null ){
                
              if($brand==null){
                 $products1 = DB::table('products')->where('price', '>=',$last)->where('price', '<=',$first)->paginate(20);
            response()->json($products1);
        foreach($products1 as $pro)
          {
            ?>
            
            
            
            <div class="ps-product__column">
              <div class="ps-shoe mb-30">
                <div class="ps-shoe__thumbnail">
                  <div class="ps-badge"><span>New</span></div>
                  <img src="http://localhost/CtyCPseed/<?php echo $pro->feature_image_path?>" alt=""><a class="ps-shoe__overlay" href="<?php echo url('/chi-tiet-san-pham/'.$pro->id) ?>"></a>
                </div>
                <div class="ps-shoe__content">
                  
                  <div class="ps-shoe__detail"><a class="ps-shoe__name" href=""><?php echo $pro->name  ?></a>
                    <p class="ps-shoe__categories"><a href="#">Men shoes</a>,<a href="#"> Nike</a>,<a href="#"> Jordan</a></p><span class="ps-shoe__price">
                      <del>£220</del> <?php echo $pro->price  ?></span>
                  </div>
                </div>
              </div>

              
            </div>
          
         

                        
                        <?php  
                } 

              }
              else{
                  $products1 = DB::table('products')->whereIN('category_id',explode( ',', $brand ))->where('price', '>=',$last)->where('price', '<=',$first)->paginate(20);
            response()->json($products1);
        foreach($products1 as $pro)
          {
            ?>
            
            
            
            <div class="ps-product__column">
              <div class="ps-shoe mb-30">
                <div class="ps-shoe__thumbnail">
                  <div class="ps-badge"><span>New</span></div>
                  <img src="http://localhost/CtyCPseed/<?php echo $pro->feature_image_path?>" alt=""><a class="ps-shoe__overlay" href="<?php echo url('/chi-tiet-san-pham/'.$pro->id) ?>"></a>
                </div>
                <div class="ps-shoe__content">
                  
                  <div class="ps-shoe__detail"><a class="ps-shoe__name" href=""><?php echo $pro->name  ?></a>
                    <p class="ps-shoe__categories"><a href="#">Men shoes</a>,<a href="#"> Nike</a>,<a href="#"> Jordan</a></p><span class="ps-shoe__price">
                      <del>£220</del> <?php echo $pro->price  ?></span>
                  </div>
                </div>
              </div>

              
            </div>
          
         

                        
                        <?php  
                } 
              }
         }
         if($brand ==null ){
          if($last ==null){
              $products1 = DB::table('products')->whereIN('brand_id',explode( ',', $category ))->paginate(20);
            response()->json($products1);
        foreach($products1 as $pro)
          {
            ?>
            
            
            
            <div class="ps-product__column">
              <div class="ps-shoe mb-30">
                <div class="ps-shoe__thumbnail">
                  <div class="ps-badge"><span>New</span></div>
                  <img src="http://localhost/CtyCPseed/<?php echo $pro->feature_image_path?>" alt=""><a class="ps-shoe__overlay" href="<?php echo url('/chi-tiet-san-pham/'.$pro->id) ?>"></a>
                </div>
                <div class="ps-shoe__content">
                  
                  <div class="ps-shoe__detail"><a class="ps-shoe__name" href="#"><?php echo $pro->name  ?></a>
                    <p class="ps-shoe__categories"><a href="#">Men shoes</a>,<a href="#"> Nike</a>,<a href="#"> Jordan</a></p><span class="ps-shoe__price">
                      <del>£220</del> <?php echo $pro->price  ?></span>
                  </div>
                </div>
              </div>
            </div>
          
         

                        
                        <?php  
                } 
          }
          else if($category==null){
             $products1 = DB::table('products')->where('price', '>=',$last)->where('price', '<=',$first)->paginate(20);
            response()->json($products1);
        foreach($products1 as $pro)
          {
            ?>
            
            
            
            <div class="ps-product__column">
              <div class="ps-shoe mb-30">
                <div class="ps-shoe__thumbnail">
                  <div class="ps-badge"><span>New</span></div>
                  <img src="http://localhost/CtyCPseed/<?php echo $pro->feature_image_path?>" alt=""><a class="ps-shoe__overlay" href="<?php echo url('/chi-tiet-san-pham/'.$pro->id) ?>"></a>
                </div>
                <div class="ps-shoe__content">
                  
                  <div class="ps-shoe__detail"><a class="ps-shoe__name" href="#"><?php echo $pro->name  ?></a>
                    <p class="ps-shoe__categories"><a href="#">Men shoes</a>,<a href="#"> Nike</a>,<a href="#"> Jordan</a></p><span class="ps-shoe__price">
                      <del>£220</del> <?php echo $pro->price  ?></span>
                  </div>
                </div>
              </div>
            </div>
          
         

                        
                        <?php  
                } 


          }
          else{
              $products1 = DB::table('products')->whereIN('brand_id',explode( ',', $category ))->where('price','>=',$last)->where('price','<=',$first)->paginate(20);
            response()->json($products1);
        foreach($products1 as $pro)
          {
            ?>
            
            
            
            <div class="ps-product__column">
              <div class="ps-shoe mb-30">
                <div class="ps-shoe__thumbnail">
                  <div class="ps-badge"><span>New</span></div>
                  <img src="http://localhost/CtyCPseed/<?php echo $pro->feature_image_path?>" alt=""><a class="ps-shoe__overlay" href="<?php echo url('/chi-tiet-san-pham/'.$pro->id) ?>"></a>
                </div>
                <div class="ps-shoe__content">
                  
                  <div class="ps-shoe__detail"><a class="ps-shoe__name" href="#"><?php echo $pro->name  ?></a>
                    <p class="ps-shoe__categories"><a href="#">Men shoes</a>,<a href="#"> Nike</a>,<a href="#"> Jordan</a></p><span class="ps-shoe__price">
                      <del>£220</del> <?php echo $pro->price  ?></span>
                  </div>
                </div>
              </div>
            </div>
          
         

                        
                        <?php  
                } 

          }
         }

         
          else{
                 $products1 = DB::table('products')->whereIN('brand_id',explode( ',', $category ))->whereIN('category_id',explode( ',', $brand ))->where('price','>=',$last)->where('price','<=',$first)->paginate(20);
            response()->json($products1);
        foreach($products1 as $pro)
          {
            ?>
            
            
            
            <div class="ps-product__column">
              <div class="ps-shoe mb-30">
                <div class="ps-shoe__thumbnail">
                  <div class="ps-badge"><span>New</span></div>
                  <img src="http://localhost/CtyCPseed/<?php echo $pro->feature_image_path?>" alt=""><a class="ps-shoe__overlay" href="<?php echo url('/chi-tiet-san-pham/'.$pro->id) ?>"></a>
                </div>
                <div class="ps-shoe__content">
                  
                  <div class="ps-shoe__detail"><a class="ps-shoe__name" href="#"><?php echo $pro->name  ?></a>
                    <p class="ps-shoe__categories"><a href="#">Men shoes</a>,<a href="#"> Nike</a>,<a href="#"> Jordan</a></p><span class="ps-shoe__price">
                      <del>£220</del> <?php echo $pro->price  ?></span>
                  </div>
                </div>
              </div>
            </div>
          
         

                        
                        <?php  
                } 
         }


    }
}
