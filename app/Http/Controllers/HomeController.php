<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Auth;
use App\Category;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       // $this->middleware('admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       // $categories = Category::nested()->get();
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

    public function checkout()
    {
        return view('end-user.checkout');
    }
    public function productCategory()
    {
        return view('end-user.category');   
    }
     public function productDetail()
    {
        return view('end-user.product-details');   
    }
     public function order()
    {
        return view('end-user.order');   
    }
    public function faq()
    {
        return view('end-user.faq');   
    }
     public function trackOrder()
    {
        return view('end-user.track-orders');   
    }
     public function tNc()
    {
        return view('end-user.terms-conditions');   
    }
}
