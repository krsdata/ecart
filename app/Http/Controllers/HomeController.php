<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Auth; 
use Modules\Admin\Models\User;
use Modules\Admin\Models\Category;
use Modules\Admin\Models\Product;
use Modules\Admin\Models\Transaction;
use View;
use Html;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Request $request) {

     
        View::share('category_name',$request->segment(2));
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       // $categories = Category::nested()->get();

        return view('home'); 


        $html =  Category::renderAsHtml(); 

        $categories =  Category::attr(['name' => 'categories'])
                        ->selected([3])
                        ->renderAsDropdown();
          return view('category',compact('categories','html')); 

    } 

    public function category(Request $request)
    {

        $btn = $request->get('submit_btn');

        if($btn=="Add Category")
        {
            $name = $request->get('sub_cat');
            $slug = str_slug($request->get('sub_cat'));
            $parent_id = 0;
            $cat = new Category;
            $cat->name = title_case($request->get('sub_cat'));
            $cat->slug = strtolower(str_slug($request->get('sub_cat')));
            $cat->parent_id = $request->get('categories');
            $cat->save();            
        }
        if($btn=="Add Sub Category")
        {
            $name = $request->get('sub_cat');
            $slug = str_slug($request->get('sub_cat'));
            $parent_id = $request->get('categories');

            $cat = new Category;

            $cat->name = title_case($request->get('sub_cat'));
            $cat->slug = strtolower(str_slug($request->get('sub_cat')));
            $cat->parent_id = $request->get('categories');

            $cat->save();
        }
        $categories =  Category::attr(['name' => 'categories'])
                        ->selected([3])
                        ->renderAsDropdown();

       $html =  Category::renderAsHtml(); 

       return view('category',compact('categories','html'));

  
    }


    public function home()
    {
        $banner_path1   = asset('public/enduser/assets/images/sliders/01.jpg');
        $banner_path2   = asset('public/enduser/assets/images/sliders/02.jpg');
 
        return view('end-user.home', compact('banner_path1', 'banner_path2'));
    }
 /*----------*/
    public function checkout()
    {
        return view('end-user.checkout');
    }
     /*----------*/
    public function productCategory( $category=null, $name=null,$id=null)
    { 
        
        $products = Product::with('category')->orderBy('id','asc')->get();
        $categories = Category::nested()->get(); 

        return view('end-user.category',compact('categories','products','category'));   
    }
    /*----------*/
    public function productDetail($category=null,$name=null,$id=null)
    {   
        $products = Product::with('category')->orderBy('id','asc')->get();
        $categories = Category::nested()->get(); 

        return view('end-user.product-details',compact('categories','products','category')); 
    }
     /*----------*/
     public function order()
    {
        return view('end-user.order');   
    }
     /*----------*/
    public function faq()
    {
        return view('end-user.faq');   
    }
     /*----------*/
     public function trackOrder()
    {
        return view('end-user.track-orders');   
    }
     /*----------*/
     public function tNc()
    {
        return view('end-user.terms-conditions');   
    }
}
