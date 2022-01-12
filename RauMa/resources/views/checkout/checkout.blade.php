@extends('layouts.layout')
@section('main')
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
                        <h2>Giỏ Hàng</h2>
                        <div class="breadcrumb__option">
                            <a href="./index.html">Home</a>
                            <span>Giỏ hàng</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Checkout Section Begin -->
    <section class="checkout spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h6><span class="icon_tag_alt"></span> Đăng kí hoặc đăng nhập để thanh toán đơn hàng
                    </h6>
                </div>
            </div>
            <div class="checkout__form">
                <h4>Thông tin gửi hàng</h4>
                <form action="{{URL::to('/save_checkout_customer')}}" method="POST">   
                    {{csrf_field()}} 
                    <div class="row">
                        <div class="col-lg-8 col-md-6">
                                    <div class="checkout__input">
                                        <p>Họ Tên<span>*</span></p>
                                        <input type="text" name="shipping_name" >
                                    </div>                          
                            <div class="checkout__input">
                                <p>Địa chỉ<span>*</span></p>
                                <input type="text" class="checkout__input__add" name="shipping_address">
                           
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Số điện thoại<span>*</span></p>
                                        <input type="text" name="shipping_phone">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Email<span>*</span></p>
                                        <input type="text" name="shipping_email">
                                    </div>
                                </div>
                            </div>

                            <div class="checkout__input">
                                <p>Order notes<span>*</span></p>
                                <input type="text"  name="shipping_notes"
                                    placeholder="Ghi chú thêm">
                            </div>
                            <button type="submit" class="btn btn-success" name="send_order">Gửi</button>
                            </form>
                        </div>
                        <!-- <div class="col-lg-4 col-md-6">
                            <div class="checkout__order">
                                <h4></h4>
                                <div class="checkout__order__products">Products <span>Total</span></div>
                                <ul>
                                    <li>Vegetable’s Package <span>$75.99</span></li>
                                    <li>Fresh Vegetable <span>$151.99</span></li>
                                    <li>Organic Bananas <span>$53.99</span></li>
                                </ul>
                                <div class="checkout__order__subtotal">Subtotal <span>$750.99</span></div>
                                <div class="checkout__order__total">Total <span>$750.99</span></div>
                                <div class="checkout__input__checkbox">
                                    <label for="acc-or">
                                        Create an account?
                                        <input type="checkbox" id="acc-or">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adip elit, sed do eiusmod tempor incididunt
                                    ut labore et dolore magna aliqua.</p>
                                <div class="checkout__input__checkbox">
                                    <label for="payment">
                                        Check Payment
                                        <input type="checkbox" id="payment">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="checkout__input__checkbox">
                                    <label for="paypal">
                                        Paypal
                                        <input type="checkbox" id="paypal">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <button type="submit" class="site-btn">PLACE ORDER</button>
                            </div>
                        </div> -->
                    </div>
           
            </div>
        </div>
    </section>
    <!-- Checkout Section End -->

@stop