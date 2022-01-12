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
                            <span>MeNu</span>
                        </div>
                        <ul>
                            @foreach ($category as $cat )
                            <li><a href="">{{$cat->name}}</a></li>
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

    <!-- Breadcrumb Section Begin -->
    <!-- Breadcrumb Section Begin -->
    <!-- <section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Vegetable’s Package</h2>
                        <div class="breadcrumb__option">
                            <a href="./index.html">Home</a>
                            <a href="./index.html">Vegetables</a>
                            <span>Vegetable’s Package</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- Breadcrumb Section End -->

    <!-- Product Details Section Begin -->
    <section class="product-details spad">
    @foreach ($details_proc as $cat )
          
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="product__details__pic">
                    
                        <div class="image" name="image">
                        <img class="product__details__pic__item--large "
                                src="{{url('public/frontend')}}/img/product/{{$cat->image}}" alt="">
                        </div>
                        <div class="product__details__pic__slider owl-carousel">
                        <img data-imgbigurl="{{url('public/frontend')}}/img/product/{{$cat->image}}"
                                src="{{url('public/frontend')}}/img/product/{{$cat->image}}" alt="">
                            <img data-imgbigurl="{{url('public/frontend')}}/img/product/{{$cat->image}}"
                                src="{{url('public/frontend')}}/img/product/{{$cat->image}}" alt="">
                            <img data-imgbigurl="{{url('public/frontend')}}/img/product/{{$cat->image}}"
                                src="{{url('public/frontend')}}/img/product/{{$cat->image}}" alt="">
                            <img data-imgbigurl="{{url('public/frontend')}}/img/product/{{$cat->image}}"
                                src="{{url('public/frontend')}}/img/product/{{$cat->image}}" alt="">
                        </div>
                    </div>
                </div>
                 
                <div class="col-lg-6 col-md-6">
                    <div class="product__details__text">
                        <h3 class="name" name="name" >{{$cat->name}}</h3>
                       <div class="price">{{$cat->price}}</div>
                        <p></p>
                        <form action="{{route('cart.store')}}" method="POST" enctype="multipart/form-data">
                        {{csrf_field()}}  
                        <div class="product__details__quantity">
                            <div class="quantity">
                                <div class="pro-qty">
                                    <input type="hidden" name="quantity" value="1">
                                    <input type="hidden" name="productid_hidden" value="{{$cat->id}}">
                                </div>
                            </div>
                        </div>
                        
                        <input type="submit" class="primary-btn" value="Thêm vào giỏ hàng"></a>
                        <a href="#" class="heart-icon"><span class="icon_heart_alt"></span></a>
                        </form>
                        <ul>
                            <li><b>Mã SP:</b> <span name="id">{{$cat->id}}</span></li>
                            <li><b></b> <span >{{$cat->descreption}}</span></li>
                            <li><b>Giao hàng</b> <span>dưới 3 tiếng. <samp>Free ship trong hôm nay</samp></span></li>
                            <li><b class="weight" name="weight">Trọng lượng</b> <span>0.5 kg</span></li>
                            <li><b>Share on</b>
                                <div class="share">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                    <a href="#"><i class="fa fa-pinterest"></i></a>
                                </div>
                            </li>
                        </ul>
                        
                    </div>
                </div>
               
        </div>
        @endforeach
    </section>
    <!-- Product Details Section End -->

    <!-- Product Details Section End -->

    <!-- Related Product Section Begin -->
    <section class="related-product">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title related__product__title">
                        <h2>Sản Phẩm Liên Quan</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($related_proc as $key => $a)
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="product__item">
                        <div class="product__item__pic set-bg" data-setbg="{{url('public/frontend')}}/img/product/{{$a->image}}">
                            <ul class="product__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="{{URL::to('/chi-tiet-san-pham/'.$a->id)}}"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="product__item__text">
                            <h6><a href="#">{{$a->name}}</a></h6>
                            <h5>{{$a->price}}</h5>
                        </div>
                    </div>
                </div>
            
                @endforeach
               
            </div>
        </div>
    </section>
    <!-- Related Product Section End -->
@stop