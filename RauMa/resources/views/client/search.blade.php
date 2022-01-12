@extends('layouts.layout')
@section('main')
<a class="features_items">
    <h2 class="title text-center">Kết quả tìm kiếm</h2>
</a>

 <!-- Hero Section Begin -->
 <section class="hero">
        <div class="container">
            <div class="row">
               
                <div class="col-lg-3">
                    <div class="hero__categories">
                        <div class="hero__categories__all">
                            <i class="fa fa-bars"></i>
                            <span>MENU</span>
                        </div>
                        <ul>
                            @foreach ($category2 as $cat)
                            <li><a href="{{URL::to('/danh-muc-san-pham/'.$cat->id)}}">{{$cat->name}}</a></li>
                          
                            @endforeach
                           
                           
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="hero__search">
                        <div class="hero__search__form">
                            <form action="{{URL::to('/tim-kiem')}}" method="POST">
                                @csrf
                                <div class="hero__search__categories">
                                    Tất cả sản phẩm
                                    <span class="arrow_carrot-down"></span>
                                </div>
                                <input type="text" placeholder="Bạn muốn tìm gì?">

                                <button type="submit" name="keywords_submit" class="site-btn">Tìm kiếm</button>
                            </form>
                        </div>
                        @yield('hero-search')
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
                    <div class="hero__item set-bg" data-setbg="{{('public/frontend/img/banner/sau-rieng-1.gif')}}">
                  </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Categories Section Begin -->
    <section class="categories">
        <div class="container">
            <div class="row">
                <div class="categories__slider owl-carousel">
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="{{('public/frontend/img/product/rau-ma-sua-dua-23jpg.jpg')}}">
                            <h5><a href="#">Ép Rau Má</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="{{('public/frontend/img/product/banh-trang-mix-pho-mai93.jpg')}}">
                            <h5><a href="#">Bánh Tráng Mix</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="{{('public/frontend/img/product/Suong-sao-hat-chia.jpg')}}">
                            <h5><a href="#">Topping</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="{{('public/frontend/img/product/detail/rmm-sau-rieng-sua-dua-sizel.jpg')}}">
                            <h5><a href="#">Nước Ép</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="{{('public/frontend/img/product/nguyen-lieu-can-chuan-bi-nuoc-cot-dua.jpg')}}">
                            <h5><a href="#">Nguyên liệu</a></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Categories Section End -->

    <!-- Featured Section Begin -->
    <section class="featured spad">
    <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Tất cả sản phẩm</h2>
                    </div>
                    <div class="featured__controls">
                        <ul>
                            <li class="active" data-filter="*">Tất cả</li>
                            <li data-filter=".oranges">Rau Má</li>
                            <li data-filter=".fresh-meat">Bánh Tráng</li>
                            <li data-filter=".vegetables">Mix x2</li>
                            <li data-filter=".fastfood">Ăn Vặt</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row featured__filter">
                @foreach ($search_product as $pro )
                <div class="col-lg-3 col-md-4 col-sm-6 mix oranges fresh-meat">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="{{('public/frontend')}}/img/product/{{$pro->image}}">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">{{$pro->name}}</a></h6>
                            <h5>{{number_format($pro->price)}} đ</h5>
                        </div>
                    </div>
                </div>
                @endforeach
              
               
                <div class="col-lg-3 col-md-4 col-sm-6 mix oranges fastfood">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="{{('public/frontend/img/product/rau-ma-nguyen-chat-1.jpg')}}">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">Rau má nguyên chất</a></h6>
                            <h5>12,000đ</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix fresh-meat vegetables">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="{{('public/frontend/img/product/banh-trang-mix-tom-hanh91.jpg')}}">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">Bánh Tráng Tôm Hành</a></h6>
                            <h5>18,000đ</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix fastfood vegetables">
                   
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="{{('public/frontend/img/product/banh-trang-mix-tom-hanh91.jpg')}}">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#"></a></h6>
                            <h5></h5>
                        </div>
                    </div>
                  
                </div> 
            </div>
        </div>
    </section>
    <!-- Featured Section End -->

    <!-- Banner Begin -->
    <div class="banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="banner__pic">
                        <img src="{{('public/frontend/img/product/cach-lam-nuoc-ep-rau-ma-bang-may-ep.jpg')}}" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="banner__pic">
                        <img src="{{('public/frontend/img/product/nguyen-lieu-can-chuan-bi-nuoc-cot-dua.jpg')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner End -->

    <!-- Latest Product Section Begin -->
    <section class="latest-product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="latest-product__text">
                        <h4>Latest Products</h4>
                        <div class="latest-product__slider owl-carousel">
                            <div class="latest-prdouct__slider__item">
                                <a href="" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="{{('public/frontend/img/product/rau-ma-dau-xanh-sua-dua.jpg')}}" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Rau Má Sữa Dừa</h6>
                                        <span>18,000đ</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="{{('public/frontend/img/product/rauma-3-tang.jpg')}}" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Rau Má 3 tầng</h6>
                                        <span>30,000đ</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="{{('public/frontend/img/product/rmmachiato12.jpg')}}" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Rau Má Matchioto</h6>
                                        <span>20,000đ</span>
                                    </div>
                                </a>
                            </div>
                            <div class="latest-prdouct__slider__item">
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="{{('public/frontend/img/product/rmsauriengsuadua21.jpg')}}" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Rau Má Mix Sầu Riêng Sữa Dừa(MỚi)</h6>
                                        <span>22,000đ</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="{{('public/frontend/img/product/dau-xanh-sua-dua-1.jpg')}}" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Đậu xanh sữa dừa</h6>
                                        <span>20,000đ</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="{{('public/frontend/img/product/rau-ma-khoai-mon-sua-dua.jpg')}}" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Rau Má Khoai Môn Sữa Dừa</h6>
                                        <span>20,0000đ</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="latest-product__text">
                        <h4>Sản Phẩm Hot</h4>
                        <div class="latest-product__slider owl-carousel">
                            <div class="latest-prdouct__slider__item">
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="{{('public/frontend/img/product/Rau-ma-mix-Macchiato.jpg')}}" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Rau Má Mix Matchioto</h6>
                                        <span>20,000đ</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="{{('public/frontend/img/product/rau-ma-nguyen-chat-1.jpg')}}" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Rau Má Nguyên Chất</h6>
                                        <span>12,000đ</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="{{('public/frontend/img/product/rau-ma-sua-dua-23jpg.jpg')}}" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Rau Má Sữa Dừa</h6>
                                        <span>18,000đ</span>
                                    </div>
                                </a>
                            </div>
                            <div class="latest-prdouct__slider__item">
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="{{('public/frontend/img/product/rauma-3-tang.jpg')}}" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Rau Má 3 tầng</h6>
                                        <span>30,000đ</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="{{('public/frontend/img/product/Thach-cu-nang.jpg')}}" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Thạch củ năng</h6>
                                        <span>7,000đ</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="{{('public/frontend/img/product/khoai-lang-lac-pho-maii.jpg')}}" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Khoai lắc phô mai</h6>
                                        <span>15,000đ</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="latest-product__text">
                        <h4></h4>
                        <div class="latest-product__slider owl-carousel">
                            <div class="latest-prdouct__slider__item">
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="{{('public/frontend/img/product/flan-027.jpg')}}" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Bánh Plan</h6>
                                        <span>20,000đ</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="{{('public/frontend/img/product/banh-chien.jpg')}}" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Bánh Chiên</h6>
                                        <span>20,000đ</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="{{('public/frontend/img/product/tokpoki.jpg')}}" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Tokpoki</h6>
                                        <span>30,000đ</span>
                                    </div>
                                </a>
                            </div>
                            <div class="latest-prdouct__slider__item">
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="{{('public/frontend/img/product/Tran-chau-tuyet-trang.jpg')}}" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Trân châu tuyết trắng</h6>
                                        <span>7,000đ</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="{{('public/frontend/img/product/Suong-sao-hat-chia.jpg')}}" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Sương Sáo Hạt Chia</h6>
                                        <span>7,000đ</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="{{('public/frontend/img/product/Thach-nha-dam.jpg')}}" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Thạch Nha Đam,</h6>
                                        <span>7,000đ</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Latest Product Section End -->
    <section class="latest-product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="latest-product__text">
                        <h4>Latest Products</h4>
                        <div class="latest-product__slider owl-carousel">
                            <div class="latest-prdouct__slider__item">
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="{{('public/frontend/img/product/rau-ma-dau-xanh-sua-dua.jpg')}}" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Rau Má Sữa Dừa</h6>
                                        <span>18,000đ</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="{{('public/frontend/img/product/rauma-3-tang.jpg')}}" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Rau Má 3 tầng</h6>
                                        <span>30,000đ</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="{{('public/frontend/img/product/rmmachiato12.jpg')}}" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Rau Má Matchioto</h6>
                                        <span>20,000đ</span>
                                    </div>
                                </a>
                            </div>
                            <div class="latest-prdouct__slider__item">
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="{{('public/frontend/img/product/rmsauriengsuadua21.jpg')}}" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Rau Má Mix Sầu Riêng Sữa Dừa(MỚi)</h6>
                                        <span>22,000đ</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="{{('public/frontend/img/product/dau-xanh-sua-dua-1.jpg')}}" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Đậu xanh sữa dừa</h6>
                                        <span>20,000đ</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="{{('public/frontend/img/product/rau-ma-khoai-mon-sua-dua.jpg')}}" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Rau Má Khoai Môn Sữa Dừa</h6>
                                        <span>20,0000đ</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="latest-product__text">
                        <h4>Sản Phẩm Hot</h4>
                        <div class="latest-product__slider owl-carousel">
                            <div class="latest-prdouct__slider__item">
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="{{('public/frontend/img/product/Rau-ma-mix-Macchiato.jpg')}}" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Rau Má Mix Matchioto</h6>
                                        <span>20,000đ</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="{{('public/frontend/img/product/rau-ma-nguyen-chat-1.jpg')}}" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Rau Má Nguyên Chất</h6>
                                        <span>12,000đ</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="{{('public/frontend/img/product/rau-ma-sua-dua-23jpg.jpg')}}" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Rau Má Sữa Dừa</h6>
                                        <span>18,000đ</span>
                                    </div>
                                </a>
                            </div>
                            <div class="latest-prdouct__slider__item">
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="{{('public/frontend/img/product/rauma-3-tang.jpg')}}" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Rau Má 3 tầng</h6>
                                        <span>30,000đ</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="{{('public/frontend/img/product/Thach-cu-nang.jpg')}}" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Thạch củ năng</h6>
                                        <span>7,000đ</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="{{('public/frontend/img/product/khoai-lang-lac-pho-maii.jpg')}}" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Khoai lắc phô mai</h6>
                                        <span>15,000đ</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="latest-product__text">
                        <h4></h4>
                        <div class="latest-product__slider owl-carousel">
                            <div class="latest-prdouct__slider__item">
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="{{('public/frontend/img/product/flan-027.jpg')}}" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Bánh Plan</h6>
                                        <span>20,000đ</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="{{('public/frontend/img/product/banh-chien.jpg')}}" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Bánh Chiên</h6>
                                        <span>20,000đ</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="{{('public/frontend/img/product/tokpoki.jpg')}}" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Tokpoki</h6>
                                        <span>30,000đ</span>
                                    </div>
                                </a>
                            </div>
                            <div class="latest-prdouct__slider__item">
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="{{('public/frontend/img/product/Tran-chau-tuyet-trang.jpg')}}" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Trân châu tuyết trắng</h6>
                                        <span>7,000đ</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="{{('public/frontend/img/product/Suong-sao-hat-chia.jpg')}}" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Sương Sáo Hạt Chia</h6>
                                        <span>7,000đ</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="{{('public/frontend/img/product/Thach-nha-dam.jpg')}}" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Thạch Nha Đam,</h6>
                                        <span>7,000đ</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
 




@stop