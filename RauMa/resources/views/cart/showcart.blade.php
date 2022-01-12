@extends('layouts.layout')
@section('main')
     <!-- Hero Section Begin -->
    <section class="hero hero-normal">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="hero__categories">
                        <div class="hero__categories__all">
                            <i class="fa fa-bars"></i>
                            <span>MENU</span>
                        </div>
                        <ul>
                            <li><a href="#">Fresh Meat</a></li>                         
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="hero__search">
                        <div class="hero__search__form">
                            <form action="#">
                                <div class="hero__search__categories">
                                    Tất cả các sản phẩm
                                    <span class="arrow_carrot-down"></span>
                                </div>
                                <input type="text" placeholder="What do yo u need?">
                                <button type="submit" class="site-btn">Tìm kiếm</button>
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
    <section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Shopping Cart</h2>
                        <div class="breadcrumb__option">
                            <a href="./index.html">Home</a>
                            <span>Shopping Cart</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> 
    <!-- Breadcrumb Section End -->
   
    <!-- Shoping Cart Section Begin -->
    <section class="shoping-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="shoping__cart__table">
                        <?php

            // use Gloudemans\Shoppingcart\Facades\Cart;

                   //    $content=Cart::content();
                        
                        ?>
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
                <div class="col-lg-12">
                    <div class="shoping__cart__btns">
                        <a href="{{URL::to('/')}}" class="primary-btn cart-btn">Tiếp tục mua</a>
                       
                    </div>
                    <!-- <div class="shoping__cart__btns">
                        <a href="{{URL::to('/')}}" class="primary-btn cart-btn">Tiếp tục mua</a>
                       
                    </div> -->
                </div>
               
                <div class="col-lg-6">
                    <div class="shoping__continue">
                        <div class="shoping__discount">
                            <h5>Nhập mã</h5>
                            <form action="{{URL::to('/')}}">
                                <input type="text" placeholder="Enter your coupon code">
                                <button type="submit" class="site-btn">Apply</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="shoping__checkout">
                        <h5>Tổng tiền</h5>
                        <ul>
                            <li> <span>{{ Cart::getTotal() }}</span></li>
                            <li>Total <span>{{ Cart::getTotal() }}</span></li>
                        </ul>
                        <?php
                        $customer_id=Session::get('id');
                        if($customer_id!=NULL)
                        {
                            ?>
                        <a href="{{URL::to('/login_checkout')}}" class="primary-btn">Thanh toán</a>
                            <?php 
                        }else{
                            ?>
                        <a href="{{URL::to('/login_checkout')}}" class="primary-btn">Thanh toán</a>
                            <?php
                        }
                            ?>
                            
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shoping Cart Section End -->

@stop