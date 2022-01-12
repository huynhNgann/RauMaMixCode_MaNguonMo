<?php

use App\Http\Controllers\AccountController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;

use App\Models\Account;
use App\Models\Product;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
//client homecontroller
Route::get('/trangchu',[HomeController::class,'index'])->name('home.index');
Route::get('/',[HomeController::class,'index'])->name('home.index');
Route::get('/cua-hang',[HomeController::class,'shop'])->name('home.shop');
// Route::get('/checkout',[HomeController::class,'checkout'])->name('client.checkout');
Route::get('/product/{id}',[HomeController::class,'details_product'])->name('client.product_details');
Route::post('/tim-kiem',[HomeController::class,'search'])->name('client.product_details');

//Route::post('/admin',[AdminController::class],'index')->name('admin.dashboard');
//chi tiet danh mục sp
Route::get('/danh-muc-san-pham/{id}',[CategoryController::class,'show_category_home'])->name('home.danhmucsp');
//chi-tiết sản phẩm
Route::get('/chi-tiet-san-pham/{id}',[ProductController::class,'details_product'])->name('home.chitietsp');



Route::group(['prefix'=>'admin'],function () {
   Route::get('/admin',function(){
    return view('admin.dashboard');
   });
   Route::resources([
      'category'=>CategoryController::class,
      'product'=>ProductController::class,
      'banner'=>BannerController::class,
      'account'=>AccountController::class,
      'blog'=>BlogController::class,
      'order'=>OrderController::class,
      'user'=>UserController::class
   ]);
});
// //route user
// Route::prefix('tbl_admin')->group(function () {
//     Route::get('/admin',function(){
//     return view('admin.dashboard');
//    }); 
// });(['prefix'=>'admin','namesapce'=>'Admin'],function(){
//    Route::get('/',[AdminController::class,'index'])->name('admin.dashboard'),
//    include 'category.php';
//    include 'product.php';
//    include 'user.php';
// });
Route::group(['prefix' => 'user'],function(){
   Route::get('',[UserController::class,'index'])->name('user');
   Route::get('edit-{id}',[UserController::class,'edit'])->name('user_edit');
   Route::post('edit-{id}',[UserController::class,'post_edit'])->name('user_edit');
   Route::get('create',[UserController::class,'create'])->name('user_create');
   Route::post('create',[UserController::class,'post_add'])->name('user_create');
   Route::get('delete-{id}',[UserController::class,'destroy'])->name('user_delete');
});


//admincontroller
Route::post('/admin-dashboard',[AdminController::class,'dashboard'])->name('admin.dashboard');
Route::get('/dashboard',[AdminController::class,'show_dashboard']);
Route::get('/admin',[AdminController::class,'index'])->name('admin.login');

//Route::get('/admin',[AdminController::class,'post_login'])->name('admin.login');


Route::get('admin/login',[AdminController::class,'login'])->name('admin.login');

Route::get('admin/logout',[AdminController::class,'logout'])->name('admin.logout');


//Route::post('admin/post-login',[AdminController::class,'post_login'])->name('admin.login');

// category
Route::get('/all_category_product',[CategoryController::class,'all_category_product'])->name('category.index');
Route::get('/category_add',[CategoryController::class,'create'])->name('category.create');
Route::get('/edit_category/{id}',[CategoryController::class,'edit'])->name('category.edit');//chỉnh sửa

Route::post('/add_category',[CategoryController::class,'store'])->name('category.store');//thêm category post

Route::post('/update_category/{id}',[CategoryController::class,'update'])->name('category.update');//update category
//CHI TIET DANH MUC SP


//Route::post('/category/{id}',[CategoryController::class,'store']);
//product
Route::get('/all_product',[ProductController::class,'all_product'])->name('product.index');
Route::get('/product_add',[ProductController::class,'create'])->name('product.create');
Route::get('/edit_product/{id}',[ProductController::class,'edit'])->name('product.edit');//chỉnh sửa

Route::post('/add_product',[ProductController::class,'store'])->name('product.store');//thêm category post

Route::post('/update_product/{id}',[ProductController::class,'update'])->name('product.update');
//

Route::get('/user/{id}',[UserController::class,'store']);

Route::get('/category/{id}',[HomeController::class,'view'])->name('client.category');
//
Route::get('/product/{id}',[Product::class,'details_product'])->name('client.details');
// Route::get('/errors',function () {
//        return view('errors/404');
//       });
/**
 * get=>account.index=>danh sách
 * get =>acc.create=>form thêm mới
 * post=>acc.store=>khi submit form thêm mới 
 * get =>acc.show=>xem chi tiết
 * get=>acc.edit=>hiển thị form edit
 * put=>acc.update=>khi submit form edit
 * delete=>acc.destroy=>khi xóa
 */
//gio-hang
//Route::post('/save_cart',[CartController::class,'save_cart'])->name('cart.store');//thêm category post
//Route::get('/show_cart',[CartController::class,'show_cart']);

Route::get('cart', [CartController::class, 'cartList'])->name('cart.list');
Route::post('cart', [CartController::class, 'addToCart'])->name('cart.store');
Route::post('update-cart', [CartController::class, 'updateCart'])->name('cart.update');
Route::post('remove', [CartController::class, 'removeCart'])->name('cart.remove');
Route::post('clear', [CartController::class, 'clearAllCart'])->name('cart.clear');
//checkout
Route::get('/login_checkout',[CheckoutController::class,'login_checkout']);
Route::post('/login_customer',[CheckoutController::class,'login_customer']);
Route::get('/logout_checkout',[CheckoutController::class,'logout_checkout']);
Route::get('/dki-taikhoan',[CheckoutController::class,'register_customer']);
Route::post('/add_customer',[CheckoutController::class,'add_customer'])->name('customer.add');

Route::post('/order_place',[CheckoutController::class,'order_place'])->name('order.index');

Route::get('/checkout',[CheckoutController::class,'checkout']);
Route::post('/save_checkout_customer',[CheckoutController::class,'save_checkout_customer']);
Route::get('/payment',[CheckoutController::class,'payment']);

Route::get('/admin_index',[AccountController::class,'AccountController@create']);

