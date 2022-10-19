<?php
session_start();
error_reporting(0);
include 'db.php';

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="img/iconbambu-01.png" />
    <title>Bambu Ukir Semeru</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="./css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="./css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="./css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="./css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="./css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="./css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="scss/styles.scss">
    <link rel="stylesheet" href="css/style.css" type="text/css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <!--Animate.JS-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
  </head>
  <body>
    <!-- Page Preloder -->
    <div id="preloder">
      <div class="loader"></div>
    </div>

    <!-- Humberger Begin -->
    <div class="humberger__menu__overlay"></div>
    <div class="humberger__menu__wrapper">
        <div class="humberger__menu__logo">
            <a href="#"><img src="./img/logobus.png" alt=""></a>
        </div>
        <div class="humberger__menu__cart">
            <ul>
                <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
                <li><a href="#"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
            </ul>
            <div class="header__cart__price">item: <span>$150.00</span></div>
        </div>
        <div class="humberger__menu__widget">
            <!--<div class="header__top__right__language">
                <img src="./img/language.png" alt="">
                <div>English</div>
                <span class="arrow_carrot-down"></span>
                <ul>
                    <li><a href="#">Spanis</a></li>
                    <li><a href="#">English</a></li>
                </ul>
            </div>
            <div class="header__top__right__auth">
                <a href="#"><i class="fa fa-user"></i> Login</a>
            </div>-->
        </div>
        <nav class="humberger__menu__nav mobile-menu">
            <ul>
                <li class="active"><a href="./index.html">Home</a></li>
                <li><a class="txt-deco" href="./shop-grid.html">Shop</a></li>
                <!--<li><a href="#">Pages</a>
                    <ul class="header__menu__dropdown">
                        <li><a href="./shop-details.html">Shop Details</a></li>
                        <li><a href="./shoping-cart.html">Shoping Cart</a></li>
                        <li><a href="./checkout.html">Check Out</a></li>
                        <li><a href="./blog-details.html">Blog Details</a></li>
                    </ul>
                </li>-->
                <li><a class="txt-deco" href="./about.html">About</a></li>
                <li><a class="txt-deco" href="./contact.html">Contact</a></li>
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
        <div class="header__top__right__social">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-instagram"></i></a>
            <!--<a href="#"><i class="fa fa-linkedin"></i></a>-->
            <!--<a href="#"><i class="fa fa-pinterest-p"></i></a>-->
        </div>
        <div class="humberger__menu__contact">
            <ul>
                <li><i class="fa fa-envelope"></i> bambukirsemeru@gmail.com</li>
                <li>Kerajinan Unik asal Lumajang</li>
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
                              <li><i class="fa fa-envelope"></i> bambukirsemeru@gmail.com</li>
                              <li>Kerajinan Unik asal Lumajang</li>
                          </ul>
                      </div>
                  </div>
                  <div class="col-lg-6 col-md-6">
                      <div class="header__top__right">
                          <div class="header__top__right__social">
                              <a href="#"><i class="fa fa-facebook"></i></a>
                              <a href="#"><i class="fa fa-instagram"></i></a>
                              <!--<a href="#"><i class="fa fa-linkedin"></i></a>-->
                              <!--<a href="#"><i class="fa fa-pinterest-p"></i></a>-->
                          </div>
                          <!--<div class="header__top__right__language">
                              <img src="./img/language.png" alt="">
                              <div>English</div>
                              <span class="arrow_carrot-down"></span>
                              <ul>
                                  <li><a href="#">Spanis</a></li>
                                  <li><a href="#">English</a></li>
                              </ul>
                          </div>
                          <div class="header__top__right__auth">
                              <a href="#"><i class="fa fa-user"></i> Login</a>
                          </div>-->
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <div class="container">
          <div class="row">
              <div class="col-lg-3">
                  <div class="header__logo">
                      <a href="./index.html"><img src="./img/logobus.png" alt=""></a>
                  </div>
              </div>
              <div class="col-lg-6">
                  <nav class="header__menu">
                      <ul>
                          <li class="active"><a class="txt-deco" href="./index.html">Home</a></li>
                          <li><a class="txt-deco" href="./shop-grid.html">Shop</a></li>
                          <li><a class="txt-deco" href="./about.html">About</a></li>
                          <li><a class="txt-deco" href="./contact.html">Contact</a></li>
                      </ul>
                  </nav>
              </div>
              <div class="col-lg-3">
                  <div class="header__cart">
                      <ul>
                          <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
                          <li><a href="shoping-cart.html" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <i class="fa fa-shopping-bag"></i> <span>3</span></a>

                            <!-- Modal Shoping Cart -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog modal-lg modal-dialog-scrollable">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h2 class="modal-title fs-5" id="exampleModalLabel">Shopping Cart</h2>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                  </div>
                                  <div class="modal-body">
                                    <!-- Breadcrumb Section Begin -->
                                    <section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb.jpg">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-lg-12 text-center">
                                                    <div class="breadcrumb__text">
                                                        <h2>Shopping Cart</h2>
                                                        <div class="breadcrumb__option">
                                                            <a class="txt-deco" href="./index.html">Home</a>
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
                                                        <table>
                                                            <thead>
                                                                <tr>
                                                                    <th class="shoping__product">Products</th>
                                                                    <th>Price</th>
                                                                    <th>Quantity</th>
                                                                    <th>Total</th>
                                                                    <th></th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td class="shoping__cart__item">
                                                                        <img src="img/cart/cart-1.jpg" alt="">
                                                                        <h5>Vegetable’s Package</h5>
                                                                    </td>
                                                                    <td class="shoping__cart__price">
                                                                        $55.00
                                                                    </td>
                                                                    <td class="shoping__cart__quantity">
                                                                        <div class="quantity">
                                                                            <div class="pro-qty">
                                                                                <input type="text" value="1">
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td class="shoping__cart__total">
                                                                        $110.00
                                                                    </td>
                                                                    <td class="shoping__cart__item__close">
                                                                        <span class="icon_close"></span>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="shoping__cart__item">
                                                                        <img src="img/cart/cart-2.jpg" alt="">
                                                                        <h5>Fresh Garden Vegetable</h5>
                                                                    </td>
                                                                    <td class="shoping__cart__price">
                                                                        $39.00
                                                                    </td>
                                                                    <td class="shoping__cart__quantity">
                                                                        <div class="quantity">
                                                                            <div class="pro-qty">
                                                                                <input type="text" value="1">
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td class="shoping__cart__total">
                                                                        $39.99
                                                                    </td>
                                                                    <td class="shoping__cart__item__close">
                                                                        <span class="icon_close"></span>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="shoping__cart__item">
                                                                        <img src="img/cart/cart-3.jpg" alt="">
                                                                        <h5>Organic Bananas</h5>
                                                                    </td>
                                                                    <td class="shoping__cart__price">
                                                                        $69.00
                                                                    </td>
                                                                    <td class="shoping__cart__quantity">
                                                                        <div class="quantity">
                                                                            <div class="pro-qty">
                                                                                <input type="text" value="1">
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td class="shoping__cart__total">
                                                                        $69.99
                                                                    </td>
                                                                    <td class="shoping__cart__item__close">
                                                                        <span class="icon_close"></span>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="shoping__cart__btns">
                                                        <a href="#" class="primary-btn cart-btn">CONTINUE SHOPPING</a>
                                                        <a href="#" class="primary-btn cart-btn cart-btn-right"><span class="icon_loading"></span>
                                                            Upadate Cart</a>
                                                    </div>
                                                </div>

                                                <div class="col-lg-12 ms-auto">
                                                    <div class="shoping__checkout">
                                                        <h5>Cart Total</h5>
                                                        <ul>
                                                            <li>Subtotal <span>$454.98</span></li>
                                                            <li>Total <span>$454.98</span></li>
                                                        </ul>
                                                        <a href="#" class="primary-btn">PROCEED TO CHECKOUT</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <!-- Shoping Cart Section End -->
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="site-btn" data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="site-btn">PROCEED TO CHECKOUT</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </li>
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

    <!-- Hero Section Begin -->
    <section class="hero">
      <div class="container">
          <div class="row">
              <div class="col-lg-3">
                  <div class="hero__categories">
                      <div class="hero__categories__all">
                          <i class="fa fa-bars"></i>
                          <span>All departments</span>
                      </div>
                      <ul>
                          <li><a href="#" class="txt-deco">Souvenir</a></li>
                          <li><a href="#" class="txt-deco">Peralatan Rumah Tangga</a></li>
                          <li><a href="#" class="txt-deco">Sangkar Burung</a></li>
                          <li><a href="#" class="txt-deco">Patung Seni Rupa</a></li>
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
                              <i class="fa fa-whatsapp"></i>
                          </div>
                          <div class="hero__search__phone__text">
                              <h5>+62 821 3918 1132</h5>
                              <span>support 24/7 time</span>
                          </div>
                      </div>
                  </div>
                  <div class="hero__item set-bg" data-setbg="./img/hero/banner2.jpg">
                      <div class="hero__text">
                          <span>BAMBU UKIR</span>
                          <h2>Kerajinan Unik<br />100% Bambu</h2>
                          <p style="color: white ;">Free Pickup and Delivery Available</p>
                          <a href="./shop-grid.html" class="primary-btn txt-deco">SHOP NOW</a>
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
                      <div class="categories__item set-bg" data-setbg="./img/categories/teko2.jpg">
                          <h5><a class="txt-deco" href="#">Souvenir</a></h5>
                      </div>
                  </div>
                  <div class="col-lg-3">
                      <div class="categories__item set-bg" data-setbg="./img/categories/teko3.jpg">
                          <h5><a class="txt-deco" href="#">Peralatan Rumah Tangga</a></h5>
                      </div>
                  </div>
                  <div class="col-lg-3">
                      <div class="categories__item set-bg" data-setbg="./img/categories/sangkar.jpg">
                          <h5><a class="txt-deco" href="#">Sangkar Burung</a></h5>
                      </div>
                  </div>
                  <div class="col-lg-3">
                      <div class="categories__item set-bg" data-setbg="./img/categories/senirupa3.jpg">
                          <h5><a class="txt-deco" href="#">Seni Rupa</a></h5>
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
                      <h2 class="wow fadeInUp" data-wow-iteration="1">Featured Product</h2>
                  </div>
                  <div class="featured__controls">
                      <ul>
                          <li class="active wow fadeInUp" data-filter="*" data-wow-delay="0.5s">All</li>
                          <li class="wow fadeInUp" data-wow-delay="1s" data-filter=".souvenirs">Souvenir</li>
                          <li class="wow fadeInUp" data-wow-delay="1.5s" data-filter=".prt">Peralatan Rumah Tangga</li>
                          <li class="wow fadeInUp" data-wow-delay="2s" data-filter=".sangkarburung">Sangkar Burung</li>
                          <li class="wow fadeInUp" data-wow-delay="2.5s" data-filter=".senirupa">Patung Seni Rupa</li>
                      </ul>
                  </div>
              </div>
          </div>
          <div class="row featured__filter">
              <div class="col-lg-3 col-md-4 col-sm-6 mix souvenirs prt">
                  <div class="featured__item">
                      <div class="featured__item__pic set-bg wow fadeInUp" data-wow-delay="0.5s" data-setbg="../img/featured/teko.jpg">
                          <ul class="featured__item__pic__hover">
                            <li><a href="./shoping-heart.html"><i class="fa fa-heart"></i></a></li>
                            <li><a href="./shoping-cart.html"><i class="fa fa-shopping-cart"></i></a></li>
                          </ul>
                      </div>
                      <div class="featured__item__text">
                          <h6><a class="txt-deco" href="#">Custom Poci/Teko Ukir 001 | Kerajianan Unik dari Bambu</a></h6>
                          <h5>Rp. 99.000</h5>
                      </div>
                  </div>
              </div>
              <div class="col-lg-3 col-md-4 col-sm-6 mix sangkarburung">
                  <div class="featured__item">
                      <div class="featured__item__pic set-bg wow fadeInUp" data-wow-delay="1s" data-setbg="./img/featured/sangkar.jpg">
                          <ul class="featured__item__pic__hover">
                            <li><a href="./shoping-heart.html"><i class="fa fa-heart"></i></a></li>
                            <li><a href="./shoping-cart.html"><i class="fa fa-shopping-cart"></i></a></li>
                          </ul>
                      </div>
                      <div class="featured__item__text">
                          <h6><a class="txt-deco" href="#">Sangkar Burung 001 | Kerajianan Unik dari Bambu</a></h6>
                          <h5>Rp. 100.000</h5>
                      </div>
                  </div>
              </div>
              <div class="col-lg-3 col-md-4 col-sm-6 mix senirupa">
                  <div class="featured__item">
                      <div class="featured__item__pic set-bg wow fadeInUp" data-wow-delay="1.5s" data-setbg="./img/featured/senirupa4.jpg">
                          <ul class="featured__item__pic__hover">
                            <li><a href="./shoping-heart.html"><i class="fa fa-heart"></i></a></li>
                            <li><a href="./shoping-cart.html"><i class="fa fa-shopping-cart"></i></a></li>
                          </ul>
                      </div>
                      <div class="featured__item__text">
                          <h6><a class="txt-deco" href="#">Tongkat Ukir 001 | Kerajianan Unik dari Bambu</a></h6>
                          <h5>Rp. 100.000</h5>
                      </div>
                  </div>
              </div>
              <div class="col-lg-3 col-md-4 col-sm-6 mix souvenirs prt">
                  <div class="featured__item">
                      <div class="featured__item__pic set-bg wow fadeInUp" data-wow-delay="2s" data-setbg="./img/featured/teko2.jpg">
                          <ul class="featured__item__pic__hover">
                            <li><a href="./shoping-heart.html"><i class="fa fa-heart"></i></a></li>
                            <li><a href="./shoping-cart.html"><i class="fa fa-shopping-cart"></i></a></li>
                          </ul>
                      </div>
                      <div class="featured__item__text">
                          <h6><a class="txt-deco" href="#">Custom Poci/Teko Ukir 002 | Kerajianan Unik dari Bambu</a></h6>
                          <h5>Rp. 100.000</h5>
                      </div>
                  </div>
              </div>
              <div class="col-lg-3 col-md-4 col-sm-6 mix senirupa">
                  <div class="featured__item">
                      <div class="featured__item__pic set-bg wow fadeInUp" data-wow-delay="0.5s" data-setbg="./img/featured/senirupa.jpg">
                          <ul class="featured__item__pic__hover">
                            <li><a href="./shoping-heart.html"><i class="fa fa-heart"></i></a></li>
                            <li><a href="./shoping-cart.html"><i class="fa fa-shopping-cart"></i></a></li>
                          </ul>
                      </div>
                      <div class="featured__item__text">
                          <h6><a class="txt-deco" href="#">Custom Lukisan Ukir 005 | Kerajianan Unik dari Bambu</a></h6>
                          <h5>Rp. 100.000</h5>
                      </div>
                  </div>
              </div>
              <div class="col-lg-3 col-md-4 col-sm-6 mix souvenirs prt">
                  <div class="featured__item">
                      <div class="featured__item__pic set-bg wow fadeInUp" data-wow-delay="1s" data-setbg="./img/featured/teko3.jpg">
                          <ul class="featured__item__pic__hover">
                            <li><a href="./shoping-heart.html"><i class="fa fa-heart"></i></a></li>
                            <li><a href="./shoping-cart.html"><i class="fa fa-shopping-cart"></i></a></li>
                          </ul>
                      </div>
                      <div class="featured__item__text">
                          <h6><a class="txt-deco" href="#">Custom Poci/Teko Ukir 003 | Kerajianan Unik dari Bambu</a></h6>
                          <h5>Rp. 99.000</h5>
                      </div>
                  </div>
              </div>
              <div class="col-lg-3 col-md-4 col-sm-6 mix senirupa">
                  <div class="featured__item">
                      <div class="featured__item__pic set-bg wow fadeInUp" data-wow-delay="1.5s" data-setbg="./img/featured/senirupa5.jpg">
                          <ul class="featured__item__pic__hover">
                            <li><a href="./shoping-heart.html"><i class="fa fa-heart"></i></a></li>
                            <li><a href="./shoping-cart.html"><i class="fa fa-shopping-cart"></i></a></li>
                          </ul>
                      </div>
                      <div class="featured__item__text">
                          <h6><a class="txt-deco" href="#">Tongkat Ukir 006 | Kerajianan Unik dari Bambu</a></h6>
                          <h5>Rp. 100.000</h5>
                      </div>
                  </div>
              </div>
              <div class="col-lg-3 col-md-4 col-sm-6 mix senirupa">
                  <div class="featured__item">
                      <div class="featured__item__pic set-bg wow fadeInUp" data-wow-delay="2s" data-setbg="./img/featured/senirupa3.jpg">
                          <ul class="featured__item__pic__hover">
                            <li><a href="./shoping-heart.html"><i class="fa fa-heart"></i></a></li>
                            <li><a href="./shoping-cart.html"><i class="fa fa-shopping-cart"></i></a></li>
                          </ul>
                      </div>
                      <div class="featured__item__text">
                          <h6><a class="txt-deco" href="#">Patung Tengkorak Ukir 010 | Kerajianan Unik dari Bambu</a></h6>
                          <h5>Rp. 120.000</h5>
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
              <div class="col-lg-6 col-md-6 col-sm-6 wow fadeIn" data-wow-delay="0.5s">
                  <div class="banner__pic">
                      <img src="./img/banner/senirupa2.jpg" alt="">
                  </div>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-6 wow fadeIn" data-wow-delay="0.5s">
                  <div class="banner__pic">
                      <img src="./img/banner/senirupa4.jpg" alt="">
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
            <div class="section-title col-lg-3">
                <h2 class="counter_fast">4,500</h2>
                <h5 class="wow fadeInUp mt-4" data-wow-iteration="1">Sell Products</h5>
            </div>
            <div class="section-title col-lg-3">
                <h2 class="counter_slow">50</h2>
                <h5 class="wow fadeInUp mt-4" data-wow-iteration="1">Partners</h5>
            </div>
            <div class="section-title col-lg-3">
                <h2 class="counter_slow1">100</h2>
                <h5 class="wow fadeInUp mt-4" data-wow-iteration="1">Clients</h5>
            </div>
            <div class="section-title col-lg-3">
                <h2 class="counter_fast1">100</h2>
                <h5 class="wow fadeInUp mt-4" data-wow-iteration="1">Products</h5>
            </div>
          </div>
      </div>
    </section>
    <!-- Latest Product Section End -->

    <!-- Location Section Begin -->
    <section class="from-blog spad">
      <div class="container">
          <div class="row">
              <div class="col-lg-12">
                  <div class="section-title from-blog__title wow fadeInUp" data-wow-delay="0.5s">
                      <h2 class="wow fadeInUp" data-wow-iteration="1">Location</h2>
                  </div>
              </div>
          </div>
          <div class="row">
            <!-- Map Begin -->
            <div class="map wow fadeInUp" data-wow-delay="1s">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7619.384455775707!2d113.01613093725464!3d-8.127852105297894!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd641c8df78eccb%3A0x133f907060917799!2sHunian%20Tetap%20(Huntap)%20Area%20Curah%20Kobokan!5e0!3m2!1sen!2sid!4v1665995658576!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                <!--<iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d49116.39176087041!2d-86.41867791216099!3d39.69977417971648!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x886ca48c841038a1%3A0x70cfba96bf847f0!2sPlainfield%2C%20IN%2C%20USA!5e0!3m2!1sen!2sbd!4v1586106673811!5m2!1sen!2sbd"
                    height="500" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>-->
                <div class="map-inside">
                    <i class="icon_pin"></i>
                    <div class="inside-widget">
                        <h4>Lumajang</h4>
                        <ul>
                            <li>Phone: +62 81335825190</li>
                            <li>Add: Hunian Tetap Desa Sumbermujur, Kecamatan Candipuro, Lumajang </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Map End -->    
          </div>
      </div>
    </section>
    <!-- Blog Section End -->
    
    <!-- Footer Section Begin -->
    <footer class="footer spad">
      <div class="container">
          <div class="row">
              <div class="col-lg-3 col-md-6 col-sm-6">
                  <div class="footer__about">
                      <div class="footer__about__logo">
                          <a href="./index.html"><img src="./img/logobus.png" alt=""></a>
                      </div>
                      <ul>
                          <li>Address: Hunian Tetap Desa Sumbermujur, Kecamatan Candipuro, Lumajang</li>
                          <li>Phone: +62 821 3918 1132</li>
                          <li>Email: bambukirsemeru@gmail.com</li>
                      </ul>
                  </div>
              </div>
              <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-1">
                  <div class="footer__widget">
                      <h6>Useful Links</h6>
                      <ul>
                          <li><a class="txt-deco" href="about.html">About Us</a></li>
                          <li><a class="txt-deco" href="shop-grid.html">About Our Shop</a></li>
                          <li><a class="txt-deco" href="https://goo.gl/maps/WjwWypceMW4xrt7L6">Our Sitemap</a></li>
                          <li><a class="txt-deco" href="contact.html">Contact</a></li>
                      </ul>
                  </div>
              </div>
              <div class="col-lg-4 col-md-12">
                  <div class="footer__widget">
                      <h6>Join Our Newsletter Now</h6>
                      <p>Get E-mail updates about our latest shop and special offers.</p>
                      <form action="#">
                          <input type="text" placeholder="Enter your mail">
                          <button type="submit" class="site-btn">Subscribe</button>
                      </form>
                      <div class="footer__widget__social">
                          <a href="#"><i class="fa fa-facebook"></i></a>
                          <a href="#"><i class="fa fa-instagram"></i></a>
                          <!--<a href="#"><i class="fa fa-twitter"></i></a>-->
                          <!--<a href="#"><i class="fa fa-pinterest"></i></a>-->
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
                      
                  </div>
              </div>
          </div>
      </div>
    </footer>
    <!-- Footer Section End -->

    <!--wa-->
    <div class="position-fixed bottom-0 end-0 mb-3 me-3">
        <a aria-label="Chat on WhatsApp" href="https://api.whatsapp.com/send/?phone=6282139181132&text=Halo%20min%2C%20apakah%20ready%20stock%3F">
          <img alt="Chat on WhatsApp" src="img/WhatsAppButtonGreenMedium.svg" />
        </a>
    </div>

     <!-- Js Plugins -->
     <script type="module" src="./js/jquery-3.3.1.min.js"></script>
     <script type="module" src="./js/jquery.nice-select.min.js"></script>
     <script type="module" src="./js/jquery-ui.min.js"></script>
     <script type="module" src="./js/jquery.slicknav.js"></script>
     <script type="module" src="./js/mixitup.min.js"></script>
     <script type="module" src="./js/owl.carousel.min.js"></script>

    <!--Counter Up JS-->
    <script src="https://unpkg.com/counterup2@2.0.2/dist/index.js"></script>

     <!--Script Wow JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js" integrity="sha512-Eak/29OTpb36LLo2r47IpVzPBLXnAMPAVypbSZiZ4Qkf8p/7S/XRG5xp7OKWPPYfJT6metI+IORkR5G8F900+g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    
    <!--Waypoints JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/noframework.waypoints.min.js" integrity="sha512-fHXRw0CXruAoINU11+hgqYvY/PcsOWzmj0QmcSOtjlJcqITbPyypc8cYpidjPurWpCnlB8VKfRwx6PIpASCUkQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

     <!--Script Bootstrap-->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
     <!--<script src="js/main.js"></script>-->
     <script type="module" src="./js/main.js"></script>
 
  </body>
</html>
