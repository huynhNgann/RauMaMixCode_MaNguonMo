<?php

namespace App\Http\Controllers;

// use Gloudemans\Shoppingcart\Cart;
use Illuminate\Http\Request;
use Darryldecode\Cart\Facades\CartFacade;

use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    // public function save_cart(Request $request){
    //     $productId=$request->productid_hidden;
    //     $quantity=$request->qty;
    //     $data=DB::table('product')->where('id',$productId)->get();
    //     //$cate_product=DB::table('product')->where('status',0)->orderBy('category_id','desc')->get();
    
    //     // $data['id']=$product_info->id;
    //     // $data['qty']=$quantity;
    //     // $data['name']=$product_info->name;
    //     // $data['price']=$product_info->price;
    //     // $data['weight']='100';
    //     // $data['options']['image']=$request->image;
    //     echo '<prev>';
    //     print_r($data);
    //     echo '<prev';
    //     Cart::add($data);
    //   //  Cart::add('293ad', 'Product 1', 1, 9.99, 550);
    //   // ShoppingcartCart::destroy();

    //     return view('cart.showcart',compact('data'));
        
    // }
    // public function show_cart(){
    //     $cate_product=DB::table('product')->where('status',1)->orderBy('category_id','desc')->get();
    //     return view('cart.showcart',compact('$cate_product'));
    // }
    public function cartList()
    {
        $cartItems = Cart::getContent();
      
        return view('cart.showcart', compact('cartItems'));
    }


    public function addToCart(Request $request)
    {
        $productId=$request->productid_hidden;
        $quantity=$request->quantity;
        $product_info=DB::table('product')->where('id',$productId)->first();
       
            $data['id'] =$product_info->id;
            $data['name'] =$product_info->name;
            $data['price']=$product_info->price;
            $data['quantity']=$quantity;
            $data['attributes']['image'] =$product_info->image;
            
        Cart::add($data);
        return redirect()->route('cart.list')->with('sucess','Thêm vào giỏ hàng thành công');
    }

    public function updateCart(Request $request)
    {
        Cart::update(
            $request->id,
            [
                'quantity' => [
                    'relative' => false,
                    'value' => $request->quantity
                ],
            ]
        );

        session()->flash('success', 'Item Cart is Updated Successfully !');

        return redirect()->route('cart.list');
    }

    public function removeCart(Request $request)
    {
        Cart::remove($request->id);
        session()->flash('success', 'Item Cart Remove Successfully !');

        return redirect()->route('cart.list');
    }

    public function clearAllCart()
    {
        Cart::clear();

        session()->flash('success', 'All Item Cart Clear Successfully !');

        return redirect()->route('cart.list');
    }


}
