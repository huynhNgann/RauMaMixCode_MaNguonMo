<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index(){
        $list_product=Product::limit(8)->get();
        $category=Category::where('status',1)->orderBy('name','ASC')->get();
        $category2=Category::where('status',1)->orderBy('id','DESC')->get();
        $cate=Category::all();
        $top_product=Product::limit(4)->orderBy('id','DESC')->get();
        $sale_product=Product::where('price','>',0)->limit(4)->orderBy('id','DESC')->limit(3)->get();
        $customer_id=DB::table('tbl_customer')->get();
    //chi tiet danh muc sp
           return view('client.home',compact('customer_id','category2','list_product','category','top_product','sale_product'));
    }
    public function shop(){
        $model=Category::where('id')->first();
        $product=Product::where('id')->first();
        $list_product=Product::limit(8)->get();
        $category=Category::where('status',1)->orderBy('name','ASC')->get();
        $top_product=Product::limit(4)->orderBy('id','DESC')->get();
        $sale_product=Product::where('price','>',0)->limit(4)->orderBy('id','DESC')->limit(3)->get();
        //
        $category_by_id=DB::table('product')
    ->join('category','product.category_id','=','category.id')->where('product.category_id',$product)->get();
        return view('client.show_category_home',compact('category_by_id','model','list_product','category','top_product','sale_product'));
        
    }
    public function details_product($product_id){
        $cate_pro=Category::where('status',0)->orderBy('id','desc')->get();
                
        return view('client.product_details');
    }
    // public function checkout(){
    //     return view('client.checkout');
    // }
    public function category(Category $id){
        $category=Category::where('id',$id)->get();
        return view('client.shop-grid');
    }
    public function search(Request $request){
        $keyword=$request->keywords_submit;
        $list_product=Product::limit(8)->get();
        $category=Category::where('status',1)->orderBy('name','ASC')->get();
        $category2=Category::where('status',1)->orderBy('id','DESC')->get();
        $cate=Category::all();
        $top_product=Product::limit(4)->orderBy('id','DESC')->get();
        $sale_product=Product::where('price','>',0)->limit(4)->orderBy('id','DESC')->limit(3)->get();
        $customer_id=DB::table('tbl_customer')->get();
    //chi tiet danh muc sp
        $search_product=DB::table('product')->where('name','like','%'.$keyword.'%')->orderBy('id','desc')->limit(7)->get();
           return view('client.search',compact('search_product','customer_id','category2','list_product','category','top_product','sale_product'));

        }
    public function view($id){
        
      
        
    }
    
}
