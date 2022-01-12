<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rau Má Mix</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">
    <!-- Css Styles -->
    <link rel="stylesheet" href="{{asset('public/frontend/css/bootstrap.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('public/frontend/css/font-awesome.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('public/frontend/css/elegant-icons.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('public/frontend/css/nice-select.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('public/frontend/css/jquery-ui.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('public/frontend/css/owl.carousel.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('public/frontend/css/slicknav.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('public/frontend/css/style.css')}}" type="text/css">
    @yield('css')
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader">
        </div>
    </div>

    <!-- Humberger Begin -->
    <div class="humberger__menu__overlay"></div>
    <div class="humberger__menu__wrapper">
    <div class="humberger__menu__logo">
    <a href="#"><img src="{{('public/frontend/img/logo-home.png')}}" alt=""></a>
    </div>
        <div class="humberger__menu__cart">
            <ul>
                <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
                <li><a href="{{route('cart.list')}}"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
            </ul>
            <div class="header__cart__price">item: <span>$150.00</span></div>
        </div>
        <div class="humberger__menu__widget">
            <div class="header__top__right__language">
                <img src="img/language.png" alt="">
                <div>English</div>
                <span class="arrow_carrot-down"></span>
                <ul>
                    <li><a href="#">Spanis</a></li>
                    <li><a href="#">English</a></li>
                </ul>
            </div>
            <div class="header__top__right__auth">
                <a href="{{URL::to('/login-checkout')}}"><i class="fa fa-user"></i> Login</a>
            </div>
        </div>
        <nav class="humberger__menu__nav mobile-menu">
          
        </nav>
        <div id="mobile-menu-wrap"></div>
        <div class="header__top__right__social">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
            <a href="#"><i class="fa fa-pinterest-p"></i></a>
        </div>
        <div class="humberger__menu__contact">
            <ul>
                <li><i class="fa fa-envelope"></i> raumamixx@gmail.com</li>
                <li>Free Ship 99K</li>
            </ul>
        </div>

    </div>
    <!-- Humberger End -->

    <!-- Header Section Begin -->
    <header class="header">
           <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__left">
                            <ul>
                                <li><i class="fa fa-envelope"></i> raumamixx@gmail.com</li>
                                <li>Free Ship 99K</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__right">
                            <div class="header__top__right__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-pinterest-p"></i></a>
                            </div>
                            <div class="header__top__right__language">
                                <img src="img/language.png" alt="">
                                <div>Việt Nam</div>
                                <span class="arrow_carrot-down"></span>
                                <ul>
                                    <li><a href="#">Việt Nam</a></li>
                                    <li><a href="#">English</a></li>
                                </ul>
                            </div>
                            <div class="header__top__right__auth">
                               
                            <?php
                            $customer_id=Session::get('id');
                            if($customer_id!=NULL){
                            ?>
                        
                            <a href="{{URL::to('/logout_checkout')}}"><i class="fa fa-user"></i> Đăng Xuât</a>
                            <?php 
                            }else{
                                ?>
                            <a href="{{URL::to('/login_checkout')}}"><i class="fa fa-user"></i> Đăng Nhập</a>

                                <?php
                            }?>
                            
                            </div>
                            
                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="header__logo">
                        <a href="./index.html"><img src="{{('public/frontend/img/logo-rmdx.png')}}"  alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="header__menu">
                        <ul>
                            <li class="active"><a href="{{URL::to('/trangchu')}}">TRANG CHỦ</a></li>
                            <li><a href="{{URL::to('/cua-hang')}}">CỬA HÀNG</a></li>
                            <li><a href="#">MENU</a>
                                <ul class="header__menu__dropdown">
                                    
                                    <li><a href="{{URL::to('/trangchu')}}">TOPPING</a></li>
                                    <li><a href="./shoping-cart.html">BÁNH TRÁNG MIX</a></li>
                                    <li><a href="./checkout.html">RAU MÁ MIX</a></li>
                                    <li><a href="./blog-details.html">COMBO</a></li>
                                    <li><a href="./contact.html">TUYỂN DỤNG</a></li>
                                </ul>
                            </li>
                            <li><a href="./blog.html">BLOG</a>
                                <ul class="header__menu__dropdown">
                                    <li><a href="./shop-details.html">TOPPING</a></li>
                                    <li><a href="./shoping-cart.html">BÁNH TRÁNG MIX</a></li>
                                    <li><a href="./checkout.html">RAU MÁ MIX</a></li>
                                    <li><a href="./blog-details.html">COMBO</a></li>
                                    <li><a href="./contact.html">TUYỂN DỤNG</a></li>
                                </ul>
                            </li>
                           
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3">
                    <div class="header__cart">
                        <ul>
                            <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
                          
                            <li><a href="{{URL::to('/show_cart')}}"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
                        </ul>
                        <div class="header__cart__price">item: <span>$150.00</span></div>
                    </div>
                </div>
            </div>
            <div class="humberger__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>


    </header>
    <!-- Header Section End -->
    
    @yield('main')
   
    <!-- Footer Section Begin -->
 
<footer class="footer spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer__about">
                        <div class="footer__about__logo">
                            <a href="./index.html"><img src="{{('public/frontend/img/logo.png')}}" alt=""></a>
                        </div>
                        <ul>
                            <li>Address: 60-49 Road 11378 New York</li>
                            <li>HOTLINE: 090.633.0907</li>
                            <li>Rau Má Mix. Email: cskh@raumamix.com.vn</li>
                        </ul>
                    </div>
                </div>
               
                <div class="col-lg-4 col-md-12">
                    <div class="footer__widget">
                        <h6>Join Our Newsletter Now</h6>
                        <p>Gửi E-mail updates about our latest shop and special offers.</p>
                        <form action="#">
                            <input type="text" placeholder="Enter your mail">
                            <button type="submit" class="site-btn">Subscribe</button>
                        </form>
                        <div class="footer__widget__social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer__copyright">
                        <div class="footer__copyright__text"><p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p></div>
                        <div class="footer__copyright__payment"><img src="{{('public/frontend/img/payment-item.png')}}" alt=""></div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="{{asset('public/frontend/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('public/frontend/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('public/frontend/js/jquery.nice-select.min.js')}}"></script>
    <script src="{{asset('public/frontend/js/jquery-ui.min.js')}}"></script>
    <script src="{{asset('public/frontend/js/jquery.slicknav.js')}}"></script>
    <script src="{{asset('public/frontend/js/mixitup.min.js')}}"></script>
    <script src="{{asset('public/frontend/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('public/frontend/js/main.js')}}"></script>
    @yield('js')
</body>

</html>