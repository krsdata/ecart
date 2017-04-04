<?php
namespace Modules\Admin\Http\Controllers;

use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests;
use Illuminate\Http\Request;
use Modules\Admin\Http\Requests\CategoryRequest;
use Modules\Admin\Models\User;
use Modules\Admin\Models\Category;
//use App\Category;
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
use DB;
use Route;
use Crypt;
use App\Http\Controllers\Controller;
use Illuminate\Http\Dispatcher; 
use App\Helpers\Helper;

/**
 * Class AdminController
 */
class CategoryController extends Controller {
    /**
     * @var  Repository
     */

    /**
     * Displays all admin.
     *
     * @return \Illuminate\View\View
     */
    public function __construct() {
        $this->middleware('admin');
        View::share('viewPage', 'category');
        View::share('helper',new Helper);
        $this->record_per_page = Config::get('app.record_per_page');
    }

    protected $categories;

    /*
     * Dashboard
     * */

    public function index(Category $category, Request $request) 
    { 
        $page_title = 'Category';
        $page_action = 'View Category'; 
        if ($request->ajax()) {
            $id = $request->get('id'); 
            $category = Category::find($id); 
            $category->status = $s;
            $category->save();
            echo $s;
            exit();
        }
        // Search by name ,email and group
        $search = Input::get('search');
        $status = Input::get('status');
        if ((isset($search) && !empty($search))) {

            $search = isset($search) ? Input::get('search') : '';
               
            $categories = Category::where(function($query) use($search,$status) {
                        if (!empty($search)) {
                            $query->Where('category_name', 'LIKE', "%$search%")
                                    ->OrWhere('sub_category_name', 'LIKE', "%$search%");
                        }
                        
                    })->Paginate($this->record_per_page);
        } else {
            $categories = Category::with('subcategory')->orderBy('id','desc')->Paginate($this->record_per_page);
        }


        foreach ($categories as $key => $value) {
            
            if($value->parent_id==0){
                 $cat[$value->id] = ['cat'=>$value->name, 'cat_id' => $value->id];   
            }

            if(isset($value->subcategory->id)){
                $arr[$value->subcategory->id][] = ['subcategory'=>$value->name, 'sub_cat_id' => $value->id];
            }
           
        }

       



       $html =   Category::nested()->get();   


       foreach ($html as $key => $value) {
           $arr['cat'] = $value['name'];
           $arr['cat_id'] = $value['id'];
            foreach ($value['child'] as $key2 => $value2) {
                  $arr['subcategory'][] = [
                                                'id'=>$value2['id'],
                                                 'name' => $value2['name'],

                                                ];
            }
            $data[] = [ 'category'=>$arr['cat'], 'cat_id' => $value['id'] ,'sub'=>$arr['subcategory']];
            $arr['subcategory'] = [];
       } 
        return view('packages::category.index', compact('category','data', 'page_title', 'page_action','html'));
    }

    /*
     * create Group method
     * */

    public function create(Category $category) 
    {
         
        $page_title = 'Category';
        $page_action = 'Create category';
        $sub_category_name  = Category::all();

        $html =  Category::renderAsHtml(); 

        $categories =  Category::attr(['name' => 'categories'])
                        ->selected([3])
                        ->renderAsDropdown();



        return view('packages::category.create', compact('categories', 'html','category','sub_category_name', 'page_title', 'page_action'));
    }

    /*
     * Save Group method
     * */

    public function store(CategoryRequest $request, Category $category) 
    {  
 

        $name = $request->get('category_name');
        $slug = str_slug($request->get('sub_cat'));
        $parent_id = 0;

        $cat = new Category;
        $cat->name =  $request->get('category_name');
        $cat->slug = strtolower(str_slug($request->get('category_name')));
        $cat->parent_id = $parent_id;
        $category->category_name         =  $request->get('category_name');
        $category->sub_category_name     =  $request->get('category_name');
        $cat->save();   

        return Redirect::to(route('category'))
                            ->with('flash_alert_notice', 'New category was successfully created !');
        }

    /*
     * Edit Group method
     * @param 
     * object : $category
     * */

    public function edit(Category $category) {

        $page_title = 'Category';
        $page_action = 'Edit category'; 
         $sub_category_name  = Category::all();
        
        return view('packages::category.edit', compact( 'sub_category_name','category', 'page_title', 'page_action'));
    }

    public function update(Request $request, Category $category) {
        
        $category->fill(Input::all()); 
        $category->save();
        return Redirect::to(route('category'))
                        ->with('flash_alert_notice', 'Category was  successfully updated !');
    }
    /*
     *Delete User
     * @param ID
     * 
     */
    public function destroy(Category $category) {
        
        Category::where('id',$category->id)->delete();

        return Redirect::to(route('category'))
                        ->with('flash_alert_notice', 'Category was successfully deleted!');
    }

    public function show(Category $category) {
        
    }

}
