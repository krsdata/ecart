<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests;
use Illuminate\Http\Request;
use Modules\Admin\Http\Requests\ProductRequest;
use Modules\Admin\Models\User;
use Modules\Admin\Models\Category;
use Modules\Admin\Models\Product;
use Input;
use Validator;
use Auth;
use Paginate;
use Grids;
use HTML;
use Form;
use Hash;
use View;
use URL;
use Lang;
use Session;
use Route;
use Crypt;
use App\Http\Controllers\Controller;
use Illuminate\Http\Dispatcher; 
use App\Helpers\Helper;
use Response;
use Cart;

/**
 * Class AdminController
 */
class ProductController extends Controller {
    /**
     * @var  Repository
     */

    /**
     * Displays all admin.
     *
     * @return \Illuminate\View\View
     */
    public function __construct(Request $request) {

        View::share('category_name', $request->segment(1));
        View::share('total_item',Cart::content()->count());
        View::share('sub_total',Cart::subtotal()); 
    }

    protected $categories;

    /*
     * Dashboard
     * */

    public function index(Request $request) 
    {  
        $cart = Cart::content();  
        $pid = [];
        foreach ($cart as $key => $value) {
            $pid[] = $value->id;
        }
        $product_photo =   Product::whereIn('id',$pid)->get(['photo','id'])->toArray();
         
        return view('cart', compact('cart','product_photo'));
    }


    public function checkout(Request $request) 
    {  
        $cart = Cart::content();  
        $pid = [];
        foreach ($cart as $key => $value) {
            $pid[] = $value->id;
        }
        $product_photo =   Product::whereIn('id',$pid)->get(['photo','id'])->toArray();
       // dd($product_photo);
       // dd($cart);
        $products = Product::with('category')->whereIn('id',$pid)->orderBy('id','asc')->get();
        $categories = Category::nested()->get(); 

        return view('end-user.checkout',compact('categories','products','category','cart','product_photo'));  
    }


    public function addToCart(Request $request, $id) 
    { 
        
         $item =  $request->get('item'); 
         if($item ){
            $qty = substr($item,-1);
         } else{
            $qty = 1;
         } 
        if ($request->isMethod('get')) {
            $product_id = $request->get('id');
            $product = Product::find($id);   
            Cart::add(array('id' => $product->id, 'name' => $product->product_title, 'qty' => $qty, 'price' => $product->price,'photo'=>$product->photo));
        }
        $cart = Cart::content();  
       // $request->session()->put('key', 'value');
         return Redirect::to(url()->previous());
         
    }

    public function buyNow(Request $request, $id) 
    { 
         $item =  $request->get('item'); 
         if($item ){
            $qty = substr($item,-1);
         } else{
            $qty = 1;
         } 
         $is_item_exist = 0;
        foreach(Cart::content() as $row) {
            if($row->id==$id)
            {
                $is_item_exist++;
                break;
            }
        }
        if($is_item_exist==0){
            if ($request->isMethod('get')) {
                $product_id = $request->get('id');
                $product = Product::find($id);   
                Cart::add(array('id' => $product->id, 'name' => $product->product_title, 'qty' => $qty, 'price' => $product->price,'photo'=>$product->photo));
            }   
        }
           
        $cart = Cart::content();  
       // $request->session()->put('key', 'value');
         return Redirect::to('checkout');
         
    }

    public function updateCart(Request $request) 
    { 
        if ($request->get('product_id') && ($request->get('increment')) == 1) {
           
            $rowId = Cart::search(function($key, $value) use($request)
                        { 
                            return $key->id == $request->get('product_id'); 
                        }
                    );
            foreach ($rowId as $key => $value) {
                $rowId = $value->rowId; 
            }
              $item = Cart::get($rowId);
              $qty = intval($item->qty)+1;
              Cart::update($rowId,$qty);
            return Redirect::to('checkout');
        }
        elseif ($request->get('product_id') && ($request->get('decrease')) == 1) {  
           $rowId = Cart::search(function($key, $value) use($request)
                        { 
                            return $key->id == $request->get('product_id'); 
                        }
                    );
            $total_qty = 0;
            foreach ($rowId as $key => $value) {
                $rowId = $value->rowId;
                $total_qty = $value->qty-1;
            }
            Cart::update($rowId, intval($total_qty));
            return Redirect::to('checkout');
        }
    }

    public function clearCart(Request $request, Cart $cart)
    {
        $cart = Cart::content(); 
        foreach ($cart as $key => $value) {
             Cart::remove($key);
        }

        return Redirect::to('product');
    }

    public function showProduct(Request $request, Product $product)
    {   
       
       $products = Product::with('category')->orderBy('id','desc')->get();
       $product_new = Product::with('category')->orderBy('id','desc')->Paginate(5);
       //dd($products ); 
       $categories = Category::nested()->get(); 

      // $categories = Category::with('parent','children')->where('parent_id',0)->get();

     /* $s = $categories[2]->children; 
      $ss = $s[1]->children; 
        foreach($categories as $category){
            echo  $category->name.'<br>';

                if(count($category->children)){
                   dd($category->children);
                } 

        }
          */                   



       $banner_path1   = asset('public/enduser/assets/images/sliders/01.jpg');
       $banner_path2   = asset('public/enduser/assets/images/sliders/02.jpg');
 
        return view('end-user.home', compact('banner_path1', 'banner_path2','categories','products','product_new')); 
    }

    public function getProduct(Request $request, Product $product)
    {
        $products = Product::with('category')->orderBy('id','asc')->get();
        $categories = Category::nested()->get(); 
         $cart = Cart::content(); 
    
         return json_encode(array(
                'status' => 1,
                'message' => 'success',
                'cart'  => count($cart),
                'data'  =>  $products
                )
            ); 
    } 

    public function removeItem($id)
    {
        $rowId = Cart::search(function($key, $value) use($id)
            { 
                return $key->id == $id; 
            }
        );
        foreach ($rowId as $key => $value) {
            $rowId = $value->rowId; 
        }
        $item = Cart::get($rowId); 
        Cart::remove($rowId);
        return Redirect::to('checkout');
    }
}
