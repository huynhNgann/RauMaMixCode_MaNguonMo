@extends('layouts.layout')
@section('main')
 <section class="hero hero-normal">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="hero__categories">
                        <div class="hero__categories__all">
                            <i class="fa fa-bars"></i>
                            <span>All departments</span>
                        </div>
                        <ul>
                            <li><a href="#">Fresh Meat</a></li>
                            <li><a href="#">Vegetables</a></li>
                            <li><a href="#">Fruit & Nut Gifts</a></li>
                            <li><a href="#">Fresh Berries</a></li>
                            <li><a href="#">Ocean Foods</a></li>
                            <li><a href="#">Butter & Eggs</a></li>
                            <li><a href="#">Fastfood</a></li>
                            <li><a href="#">Fresh Onion</a></li>
                            <li><a href="#">Papayaya & Crisps</a></li>
                            <li><a href="#">Oatmeal</a></li>
                            <li><a href="#">Fresh Bananas</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="hero__search">
                        <div class="hero__search__form">
                            <form action="#">
                                <div class="hero__search__categories">
                                    All Categories
                                    <span class="arrow_carrot-down"></span>
                                </div>
                                <input type="text" placeholder="What do yo u need?">
                                <button type="submit" class="site-btn">SEARCH</button>
                            </form>
                        </div>
                        <div class="hero__search__phone">
                            <div class="hero__search__phone__icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="hero__search__phone__text">
                                <h5>+65 11.188.888</h5>
                                <span>support 24/7 time</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> 
    <!-- Hero Section End -->

    <!-- Breadcrumb Section Begin -->
    <!-- <section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Giỏ Hàng</h2>
                        <div class="breadcrumb__option">
                            <a href="./index.html">Home</a>
                            <span>Giỏ hàng</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- Breadcrumb Section End -->
    <section class="shoping-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="shoping__cart__table">
                        <table>
                            <thead>
                                <tr>
                               <th class="shoping__product">Tên sản phẩm</th>
                                    <th>Giá</th>
                                    <th>Số lượng</th>
                                    <th>Thành tiền</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                @foreach ($cartItems as $item)
                                    <td class="shoping__cart__item">
                                        <img src="{{url('public/frontend')}}/img/product/{{ $item->attributes->image }}" width="150px" alt="">
                                        <h5>{{$item->name}}</h5>
                                    </td>
                                    <td class="shoping__cart__price">
                                    <input type="hidden"value="" >
                                    {{$item->price}} VNĐ
                                    </td>
                                    <td class="shoping__cart__quantity">
                                    <form action="{{ route('cart.update') }}" method="POST">
                                      @csrf
                                     <input type="hidden" name="id" value="{{ $item->id}}" >
                                    <input type="number" name="quantity" value="{{ $item->quantity }}" class="w-6 text-center bg-gray-100" style="width:30%"/>
                                    <button type="submit" with="100px" class="btn btn-success">update</button>
                                    </form>
                                       
                                    </td>
                                 
                                    <td class="shoping__cart__total">
                                      <?php 
                                     $subtotal=$item->price*$item->quantity;
                                     echo number_format($subtotal).'VNĐ'; 
                                      ?>
                                    </td>
                                    <form action="{{route('cart.remove')}}" method="POST">
                                        @csrf
                                    <td class="shoping__cart__item__close" style="color: red;">
                                    <button class="btn btn-warning">X</button>
                                    </td>
                                    </form>
                                </tr>
                               
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row">              
 <section class="shoping-cart spad">
        <div class="container">
      
            <div class="row">
          
            <div class="checkout__form" >
                <h4>Hóa Đơn</h4>
                <form method="POST" action="{{URL::to('/order_place')}}">
                  @csrf
                    <div class="row">
                  
                        <!-- <div class="col-lg-4 col-md-6"> -->
                            <div class="checkout__order"> 
                                <div class="checkout__order__products">TÊN MÓN<span>Tổng</span></div>
                                <ul>
                                    <li>{{$item->name}} <span> {{ $item->price}}</span></li>
                                    <li><span></span></li>
                                 </ul>
                                 <div class="checkout__order__products">SỐ LƯỢNG<span>{{$item->quantity}}</span></div>
                                 
                                 <div class="checkout__order__subtotal">TỔNG <span>{{ Cart::getTotal() }}</span></div>
                                <div class="checkout__order__total">THÀNH TIỀN <span>{{ Cart::getTotal() }}</span></div>
                                <div class="checkout__input__checkbox">
                                    <label for="acc-or">
                                        <input type="checkbox" id="acc-or" value="1" name="payment_option">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <p>Thanh toán bằng thẻ ATM </p>
                                    <div class="checkout__input__checkbox">
                                    <label for="payment">
                                        <input type="checkbox" id="payment" value="2"
                                         name="payment_option">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <p>Thanh toán khi nhận hàng</p>
                                 <button type="submit" class="site-btn">Đặt hàng</button>                                                            
                            </div>
                        </div>
                       
                    </div>
                </form>
            </div>
        
        </div>
    </section>
            </div>
        </div>
    </section>
    <!-- Checkout Section Begin -->
 
    <!-- Checkout Section End -->

@stop