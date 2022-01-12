<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Models\Customer;
use Customer as GlobalCustomer;
use Gloudemans\Shoppingcart\Cart as ShoppingcartCart;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Redirect;
use Product;

session_start();
class CheckoutController extends Controller
{
   public function login_checkout()
   {
    $category_product=DB::table('category')-> where('status',1)->orderBy('id','desc')->get();

      return view('checkout.checkout_login',compact('category_product'));
   }
   public function register_customer(){
      $category_product=DB::table('category')-> where('status',1)->orderBy('id','desc')->get();

      return view('checkout.register',compact('category_product'))->with('success','Đăng kí thành công');
   }
   public function add_customer(Request $request){
  
      $data=array();
      $data['email']=$request->email;
      $data['name']=$request->name;
      $data['phone']=$request->phone;
      $data['password']=md5($request->password);
      $id_customer=DB::table('tbl_customer')->insertGetId($data);

    Session::put('id',$id_customer);
   Session::put('name',$request->name);

   //  DB::table(''):created($request ->all());
     //$category_product=DB::table('category')-> where('status',1)->orderBy('id','desc')->get();
      return view('checkout.checkout',compact('id_customer'))->with('success','Đăng kí thành công');
   }
      public function checkout(){
     return view('checkout.checkout')->with('success','Đặt hàng thành công'); 
   }

      public function save_checkout_customer(Request $request){
      $cartItems = Cart::getContent();
      $data=array();
      $data['shipping_name']=$request->shipping_name;
      $data['shipping_email']=$request->shipping_email;
      $data['shipping_phone']=$request->shipping_phone;
      $data['shipping_address']=$request->shipping_address;
      $data['shipping_notes']=$request->shipping_notes;
      
      $shipping_id=DB::table('tbl_shipping')->insertGetId($data);  

   // Session::put('name',$request->name);
      return view('checkout.payment',compact('shipping_id','cartItems'))->with('success','Gửi thành công'); 
   }

   public function payment(){
      $cartItems = Cart::getContent();
      $cate_proc=DB::table('category')->where('status',1)->orderBy('id','desc')->get();
      
      return view('checkout.payment',compact('cate_proc','cartItems'))->with('success','đặt hàng thành công');
   }


   public function logout_checkout(){
      Session::flush();
      $_SESSION['admin']="";
      return view('checkout.checkout_login');
   }
   public function login_customer(Request $request){
      $email=$request->email;
      $password=md5($request->password);
      $result=DB::table('tbl_customer')->where('email',$email)->where('password',$password)->first();
     
      if($result){
         //$_SESSION['admin']=
         Session::put('id',$result->id);
         return view('checkout.checkout');
      }
      else{
         return view('checkout.checkout_login')->with('notice','Tài khoản hoặc mật khẩu không chính xác');
      }
     
   //   Session::put('name',$request->name);
   }
   public function order_place(Request $request){
      $cartItems = Cart::getContent();
      $data=array();
      $payment_option=$request->payment_option;
      $data['payment_method']=$payment_option;
      $data['payment_status']="Đang chờ xử lý";

      $payment_id=DB::table('tbl_payment')->insertGetId($data);
      
   //   //insert vào table
   //   $order_data=array();
   //   $order_data['customer_id']=Session::get('id');
   //   $order_data['shipping_id']=Session::get('shipping_id');
   //   $order_data['payment_id']=$payment_id;
   //   $order_data['order_total']=1000;
   //   $order_data['order_status']="Đang chờ xử lý";
   //   $order_id=DB::table('order')->insertGetId($order_data);

     //insert vào order_details
   //   $content=Cart::content();
   //    foreach($content as $v_content){
   //       $order_d_data=array();
   //       $order_d_data['order_id']=$order_id;
   //       $order_d_data['product_id']=$v_content->product_id;
   //       $order_d_data['product_name']=$v_content->name;
   //       $order_d_data['product_price']=$v_content->poduct_price;
   //       $order_d_data['customer_quantity']=$v_content->poduct_quantity;
   //       $order_d_id=DB::table('order_details')->insert($order_d_data);
   //    }
   //   if($data['payment_method'] == 1 ){
   //      echo 'Thanh toán bằng thẻ ATM';
   //   }else{
   //      echo 'Thẻ ghi nợ';
   //   }
      Cart::clear();
      return view('checkout.order_place',compact('payment_id'))->with('success','Đặt hàng thành công');
      
   }
}
