@extends('layouts.layout')

@section('main')
    <!-- Header Section End -->

    <!-- Hero Section Begin -->
    <section class="hero hero-normal">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="hero__categories">
                        <div class="hero__categories__all">
                            <i class="fa fa-bars"></i>
                            <span>MeNu Của Mix</span>
                        </div>
                        <ul>
                            @foreach ($category as $cat )
                            <li><a href="{{URL::to('/danh-muc-san-pham/'.$cat->id)}}">{{$cat->name}}</a></li>
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

    <!--  Breadcrumb Section Begin -->
    <div class="control-sidebar-content center">
   <section class="breadcrumb-section set-bg text-center" style="height:500; ">
      
                <div id="demo" class="carousel slide" data-ride="carousel">

                 <!-- Indicators -->
                 <ul class="carousel-indicators">
                <li data-target="#demo" data-slide-to="0" class="active"></li>
                <li data-target="#demo" data-slide-to="1"></li>
                <li data-target="#demo" data-slide-to="2"></li>
                </ul> 
                 <!-- The slideshow -->
               <div class="carousel-inner"  >
                <div class="carousel-item active">
                    <img src="{{url('public/frontend')}}/img/banner/khoai-mon.gif" alt="Los Angeles" width="1020" height="500">
                </div>
                <div class="carousel-item">
                    <img src="{{url('public/frontend')}}/img/banner/sau-rieng-2-.gif" alt="Chicago" width="1020" height="500">
                </div>
                <div class="carousel-item">
                    <img src="{{url('public/frontend')}}/img/banner/khoai-mon.gif" alt="New York" width="1020" height="500">
                </div>
                </div>

                 <!-- Left and right controls -->
               <a class="carousel-control-prev" href="#demo" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#demo" data-slide="next">
                <span class="carousel-control-next-icon"></span>
                </a>
                </div> 
     </section> 
     </div>
    <!-- Breadcrumb Section End-->

    <!-- Product Section Begin -->
    <section class="product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-5">
                    <div class="sidebar">
                        <div class="sidebar__item">
                            <h4>Danh mục sản phẩm</h4>
                            <ul>
                                @foreach ($category as $cat )
                                <li><a href="{{URL::to('/danh-muc-san-pham/'.$cat->id)}}">{{$cat->name}}</a></li>
                                @endforeach
                                
                                
                            </ul>
                        </div>
                 
                        <div class="sidebar__item">
                            <div class="latest-product__text centered">
                                <h4>Các sản phẩm liên quan</h4>
                                <div class="latest-product__slider owl-carousel">
                                    <div class="latest-prdouct__slider__item">
                                        @foreach ($sale_product as $sale )
                                        <a href="{{URL::to('/chi-tiet-san-pham/'.$sale->id)}}" class="latest-product__item">
                                            <div class="latest-product__item__pic">
                                                <img src="{{url('public/frontend')}}/img/product/{{$sale->image}}" alt="">
                                            </div>
                                            <div class="latest-product__item__text">
                                                <h6>{{$sale->name}}</h6>
                                                <span>{{$sale->price}} Đ</span>
                                            </div>
                                        </a> 
                                        @endforeach
                                       
                                    </div>
                                    <div class="latest-prdouct__slider__item">
                                    @foreach ($sale_product as $sale )
                                        <a href="{{URL::to('/chi-tiet-san-pham/'.$sale->id)}}" class="latest-product__item">
                                            <div class="latest-product__item__pic">
                                                <img src="{{url('public/frontend')}}/img/product/{{$sale->image}}" alt="">
                                            </div>
                                            <div class="latest-product__item__text">
                                                <h6>{{$sale->name}}</h6>
                                                <span>{{$sale->price}} Đ</span>
                                            </div>
                                        </a> 
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-md-7">
                    <div class="product__discount">
                        <div class="section-title product__discount__title">
                            <h2>Hôm nay có gì?</h2>
                        </div>
                        <div class="row">
                      
                        <div class="product__discount__slider owl-carousel">
                          
                                <div class="col-lg-4">
                                    <div class="product__discount__item">
                                    @foreach ($category_by_id as $product)
                                        <div class="product__discount__item__pic set-bg"
                                            data-setbg="{{url('public/frontend')}}/img/product/{{$product->image}}">
                                            <div class="product__discount__percent">-20%</div>
                                            <ul class="product__item__pic__hover">
                                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                                <li><a href="{{URL::to('/chi-tiet-san-pham/'.$product->id)}}"><i class="fa fa-retweet"></i></a></li>
                                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="product__discount__item__text">
                                            <span>{{$product->name}}</span>
                                            <h5><a href="#"></a></h5>
                                            <div class="product__item__price">{{$product->price}} <span>50.000 Đ</span></div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                              
                            </div>  
                    
                           
                       
                           
                        </div>
                    </div>
                  
                    <div class="product__pagination">
                        <a href="#">1</a>
                        <a href="#">2</a>
                        <a href="#">3</a>
                        <a href="#"><i class="fa fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Section End -->

    <!-- Footer Section Begin -->
    

    @stop()


    @section('css')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<style>
  /* Make the image fully responsive */
   .carousel-inner img {
    width: 100%;
    height: 100%;
  } 
  </style>
@stop

@section('js')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
@stop
