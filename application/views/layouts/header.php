<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Hiroto Template">
    <meta name="keywords" content="Hiroto, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $title ?> | Cheap Quality Hotel In Indonesian</title>

    <!-- Css Styles -->
    <link rel="stylesheet" href="<?= base_url('hiroto/css/bootstrap.min.css') ?>" type="text/css">
    <link rel="stylesheet" href="<?= base_url('hiroto/css/font-awesome.min.css') ?>" type="text/css">
    <link rel="stylesheet" href="<?= base_url('hiroto/css/elegant-icons.css') ?>" type="text/css">
    <link rel="stylesheet" href="<?= base_url('hiroto/css/nice-select.css') ?>" type="text/css">
    <link rel="stylesheet" href="<?= base_url('hiroto/css/jquery-ui.min.css') ?>" type="text/css">
    <link rel="stylesheet" href="<?= base_url('hiroto/css/owl.carousel.min.css') ?>" type="text/css">
    <link rel="stylesheet" href="<?= base_url('hiroto/css/slicknav.min.css') ?>" type="text/css">
    <link rel="stylesheet" href="<?= base_url('hiroto/css/style.css') ?>" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Offcanvas Menu Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
        <div class="offcanvas__logo">
            <a href="index.php"><img src="<?= base_url('hiroto/img/logo.png') ?>" alt=""></a>
        </div>
        <div id="mobile-menu-wrap"></div>
        <div class="offcanvas__btn__widget">
            <a href="#">Book Now <span class="arrow_right"></span></a>
        </div>
        <div class="offcanvas__widget">
            <ul>
                <li><span class="icon_pin_alt"></span> 96 Ernser Vista Suite 437, NY, US</li>
                <li><span class="icon_phone"></span> (123) 456-78-910</li>
            </ul>
        </div>
        <div class="offcanvas__language">
            <img src="<?= base_url('hiroto/img/lan.png') ?>" alt="">
            <span>English</span>
            <i class="fa fa-angle-down"></i>
            <ul>
                <li>English</li>
                <li>Indonesian</li>
            </ul>
        </div>
        <div class="offcanvas__auth">
            <ul>
                <li><a href="<?= base_url('auth/login') ?>">Login</a></li>
                <li><a href="<?= base_url('auth/register') ?>">Register</a></li>
            </ul>
        </div>
    </div>
    <!-- Offcanvas Menu End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <ul class="header__top__widget">
                            <li><span class="icon_pin_alt"></span> 96 Ernser Vista Suite 437, NY, US</li>
                            <li><span class="icon_phone"></span> (123) 456-78-910</li>
                        </ul>
                    </div>
                    <div class="col-lg-5">
                        <div class="header__top__right">
                            <div class="header__top__auth">
                                <ul>
                                    <li><a href="<?= base_url('auth/login') ?>">Login</a></li>
                                    <li><a href="<?= base_url('auth/register') ?>">Register</a></li>
                                </ul>
                            </div>
                            <div class="header__top__language">
                                <img src="<?= base_url('hiroto/img/lan.png') ?>" alt="">
                                <span>English</span>
                                <i class="fa fa-angle-down"></i>
                                <ul>
                                    <li>English</li>
                                    <li>Indonesian</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header__nav__option">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2">
                        <div class="header__logo">
                            <a href="<?= base_url() ?>"><img src="<?= base_url('hiroto/img/logo.png') ?>" alt=""></a>
                        </div>
                    </div>
                    <div class="col-lg-10">
                        <div class="header__nav">
                            <nav class="header__menu">
                                <ul class="menu__class">
                                    <li class="<?= $this->uri->segment(1) == "home" ? "active" : "" ?>"><a href="<?= base_url('home') ?>">Home</a></li>
                                    <li class="<?= $this->uri->segment(1) == "rooms" ? "active" : "" ?>"><a href="<?= base_url('rooms') ?>">Rooms</a></li>
                                    <li class="<?= $this->uri->segment(1) == "about" ? "active" : "" ?>"><a href="<?= base_url('about') ?>">About Us</a></li>
                                    <li class="<?= $this->uri->segment(1) == "contact" ? "active" : "" ?>"><a href="<?= base_url('contact') ?>">Contact</a></li>
                                </ul>
                            </nav>
                            <div class="header__nav__widget">
                                <a href="#">Book Now <span class="arrow_right"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="canvas__open">
                    <span class="fa fa-bars"></span>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Section End -->