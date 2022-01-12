<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session as FacadesSession;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function all_product()
    {
        $add_product=DB::table('category')->orderBy('id','desc')->get();
        $product_all=DB::table('category')
        ->join('product','category.id','=','product.category_id')->orderBy('product.id','desc')->get();
        return view('admin.product.index',compact('product_all'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function productList()
    // {
    //     $products = Product::all();

    //     return view('client.product_details', compact('products'));
    // }
    public function create()
    {
        $add_product=DB::table('category')->orderBy('id','desc')->get();
        return view('admin.product.create',compact('add_product'))->with('success','Thêm thành công');
      
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      
        $product_all=DB::table('category')
        ->join('product','category.id','=','product.category_id')->orderBy('product.id','desc')->get();
        $add_product=DB::table('category')->orderBy('id','desc')->get();
        $prod=array();
        $prod['name']=$request->name;
        $prod['price']=$request->price;
        $prod['descreption']=$request->descreption;
        $prod['status']=$request->status;
        $prod['category_id']=$request->category_id;

        $get_image=$request->file('image');
        if($get_image)
        {
            $get_name_image=$get_image->getClientOriginalName();
            $name_image=current(explode('.',$get_name_image));
            $new_image=$name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
            $get_image->move('public/upload',$new_image);
            DB::table('product')->insert($prod);
            return redirect()->route('product.create',compact('product_all','prod','add_product'))->with('susscess','Thêm thành công');
        }
        $prod['image']="";
        $a= DB::table('product')->insert($prod);
        
            return view('admin.product.create',compact('product_all','prod','add_product'))->with('susscess','Thêm thành công');
      
        }
       
    
    
     // $request->merge(['image'=>$file_name]);
        
        
   
    
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($product_id)
    {
         $product_all=DB::table('category')
         ->join('product','category.id','=','product.category_id')->orderBy('product.id','desc')->get();
        $add_product=DB::table('category')->orderBy('id','desc')->get();
        
        //$category_prod=DB::table('category')->orderBy('id','desc')->get();
        
        $edit_product=DB::table('product')->where('id',$product_id)->get();


        return view('admin.product.edit',compact('edit_product','add_product','product_all'))->with('success','Cập nhật thành công');;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $product_all=DB::table('category')
        ->join('product','category.id','=','product.category_id')->orderBy('product.id','desc')->get();
        $add_product=DB::table('category')->orderBy('id','desc')->get();
     //   $prod=array();
        $prod['name']=$request->name;
        $prod['price']=$request->price;
        $prod['descreption']=$request->descreption;
        $prod['status']=$request->status;
        $prod['category_id']=$request->category_id;
        $get_image=$request->file('image');
        if($get_image)
        {
            $get_name_image=$get_image->getClientOriginalName();
            $name_image=current(explode('.',$get_name_image));
            $new_image=$name_image.rand(0,0).'.'.$get_image->getClientOriginalExtension();
            $get_image->move('public/upload',$new_image);
            DB::table('product')->where('id',$product)->update($prod);
            return redirect()->route('product.index',compact('product_all','prod','add_product'))->with('susscess','cập nhật thành công');
        }
        $prod['image']="";
       DB::table('product')->where('id',$product)->update($prod);
    ///    $product->update($request->only('name','image','price','descreption','status','category_id'));
        
            return redirect()->route('product.index',compact('product_all','prod','add_product','product'))->with('susscess','cập nhật thành công');
        
    }
    public function details_product($pro_id){
        $category=DB::table('category')->orderBy('id','desc')->get();
        $category_proc=DB::table('category')->where('status',0)->orderBy('id','desc')->get();
        $details_proc=DB::table('category')
        ->join('product','product.category_id','=','category.id')->where('product.id',$pro_id)->get();
        
        $related_proc=DB::table('category') ->join('product','product.category_id','=','category.id')->whereNotIn('product.id',[$pro_id])->limit(4)->get();
        return view('client.product_details',compact('category','related_proc','category_proc','details_proc'));
    }
 

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(product $product)
    {
        if($product->details()->count()>0){
            return redirect()->route('product.index')->with('error','không thể xóa sản phẩm này');
        }
        else{
            $product->delete();
            return redirect()->route('product.index')->with('success','không thể xóa sản phẩm này');
        }
    }
}
