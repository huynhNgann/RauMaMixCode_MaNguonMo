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
                            <span>MEMU</span>
                        </div>
                        <ul>
                            @foreach ($category_product as $cate)
                            <li><a href="#">@cate->name</a></li>
                            @endforeach
                         
                            
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="hero__search">
                        <div class="hero__search__form">
                            <form action="#">
                                <div class="hero__search__categories">
                                Tất cả sản phẩm
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
                        <h2>Checkout</h2>
                        <div class="breadcrumb__option">
                            <a href="./index.html">Home</a>
                            <span>Checkout</span>
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
                    <h6><span class="icon_tag_alt"></span>  <a href="{{URL::to('/dki-taikhoan')}}">Tạo tài khoản mới</a> 
                    </h6>
                </div>
            </div>
          
            <div class="checkout__form">
                <h4 class="text-center">Đăng nhập tài khoản</h4>
           
                            <div class="row">
                                <form action="{{URL::to('/login_customer')}}" method="POST">
                                  @csrf
                                
                                    <div class="checkout__input">
                                        <p>Email</p>
                                        <input type="email" name="email" placeholder="Tài khoản">
                                    </div>
                              
                                    <div class="checkout__input">
                                        <p>Password</p>
                                        <input type="password" name="password" placeholder="Mật khẩu">
                                    </div>
                                
                               
                                    <div class="checkout__input">
                                    <button type="submit" class="site-btn">Đăng nhập</button>
                                    </div>
                            
                                </form>
                            </div>    
                            <div class="checkout__input__checkbox">
                                <label for="acc">
                                    Ghi nhớ mật khẩu
                                    <input type="checkbox" id="acc">
                                    <span class="checkmark"></span>
                                </label>
                            </div>        
                                                        
                        </div>
                      
                    </div>
                      
                       
                 
                   
                   
                    </div>
                    
        
    
    
    
               
</div> </section>
    <!-- Checkout Section End -->

@stop