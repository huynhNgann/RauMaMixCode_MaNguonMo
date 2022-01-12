<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\Category\StoreRequest;
use App\Http\Requests\Category\UpdateRequest;
use App\Models\Product;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;


session_start();

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index()
    // {
    //   $all_category_product=DB::table('category')->get();
    //   $category=view('admin.category.index')->with('all_category_product',$all_category_product);
    //   return view('admin.dashboard')->with('admin.category.index',$category);
    // }
    public function all_category_product()
    {
        $all_category_product=DB::table('category')->get();
      //  $data=DB::table('category')->orderBy('id','desc');
    //    $data=DB::table('category')-> scopeSearch()->paginate(4);
    //    $category=DB::table('products')->orderBy('count','DESC');
    //    $proc =DB::table('category')('create_at','DESC')-> search()->paginate(4);
        return view('admin.category.index',compact('all_category_product'));
    //   $all_category_product=DB::table('category')->get();
    //   $category=view('admin.category.index')->with('all_category_product',$all_category_product);

    //   return view('admin.dashboard')->with('admin.category.index',$category);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $cate=array();
      $cate['name']=$request->name;
      $cate['status']=$request->status;
      $cate['prioty']=$request->prioty;
      DB::table('category')->insert($cate);
      //Session::put('message','Thêm thành công');
      return Redirect::to('/category_add',compact('cate'));

        }
           
    public function all_products(){
        return $this->hasMany(Product::class,'category_id','id')->where('status',1);
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit_category=DB::table('category')->where('id',$id)->get();        
       return view('admin.category.edit',compact('edit_category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
       $all_category_product=DB::table('category')->get();
       $update_data=array();
       $update_data['name']=$request->name;
       $update_data['status']=$request->status;
       $update_data['prioty']=$request->prioty;
       DB::table('category')->where('id',$category)->update($update_data);
      // Session::put('message','Thêm thành công');
       return view('admin.category.index',compact('update_data','all_category_product'))->with('success','update thành công');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        if($category->products()->count()>0){
            return redirect()->route('category.index')->with('error','không thể xóa danh mục này');
        }
        else{
            $category->delete();
            return redirect()->route('category.index')->with('success','xóa thành công');
        }
      
    }
    ///Category HomeController
    public function show_category_home($category_id)
    {
        $list_product=DB::table('product')->limit(9)->get();
        $product=DB::table('product')->where('id')->first();
        $top_product=Product::limit(4)->orderBy('id','DESC')->get();
        $sale_product=Product::where('price','>',0)->limit(3)->orderBy('id','DESC')->limit(3)->get();
        $category_proc=DB::table('category')->where('status',0)->orderBy('id','desc')->get();
        
        $category_by_id=DB::table('product')
        ->join('category','category.id','=','product.category_id')->where('product.category_id',$category_id)->get();
        $category_by_name=DB::table('category')
        ->join('product','product.category_id','=','category.id')->select('product.id','product.name')->where('product.category_id',$category_id)->get();
        // $category_id=DB::table('product')
        // ->join('category','category.id','=','product.category_id')->where('product.id',$category_id)->first();
        $category_name=DB::table('category')->where('id',$category_id)->limit(8)->get();
        $category=Category::all();
        
        
        return view('client.show_category_home',compact('category_by_name','product','category','list_product','top_product','sale_product','category_proc','category_by_id','category_name'));
        
    }

   
}
