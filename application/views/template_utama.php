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

    <!-- SweetAlert 2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
            <a href="<?= base_url() ?>"><img src="<?= $instansi->logo_instansi ?>" alt=""></a>
        </div>
        <div id="mobile-menu-wrap"></div>
        <div class="offcanvas__btn__widget">
            <a href="<?= base_url() ?>">Book Now <span class="arrow_right"></span></a>
        </div>
        <div class="offcanvas__widget">
            <ul>
                <li><span class="icon_pin_alt"></span> <?= $instansi->email ?></li>
                <li><span class="icon_phone"></span> <?= $instansi->notelp ?></li>
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
                            <li><span class="icon_pin_alt"></span> <?= $instansi->email ?></li>
                            <li><span class="icon_phone"></span> <?= $instansi->notelp ?></li>
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
                                <a href="<?= base_url() ?>">Book Now <span class="arrow_right"></span></a>
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

    <?= $contents ?>

    <!-- Footer Section Begin -->
    <footer class="footer set-bg" data-setbg="<?= base_url('hiroto/img/footer-bg.jpg') ?>">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="logo__carousel owl-carousel">
                        <div class="logo__carousel__item">
                            <a href="#"><img src="<?= base_url('hiroto/img/logo/logo-1.png') ?>" alt=""></a>
                        </div>
                        <div class="logo__carousel__item">
                            <a href="#"><img src="<?= base_url('hiroto/img/logo/logo-2.png') ?>" alt=""></a>
                        </div>
                        <div class="logo__carousel__item">
                            <a href="#"><img src="<?= base_url('hiroto/img/logo/logo-3.png') ?>" alt=""></a>
                        </div>
                        <div class="logo__carousel__item">
                            <a href="#"><img src="<?= base_url('hiroto/img/logo/logo-4.png') ?>" alt=""></a>
                        </div>
                        <div class="logo__carousel__item">
                            <a href="#"><img src="<?= base_url('hiroto/img/logo/logo-5.png') ?>" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="footer__content">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="footer__about">
                            <div class="footer__logo">
                                <a href="#"><img src="<?= $instansi->logo_instansi ?>" alt=""></a>
                            </div>
                            <h4><?= $instansi->notelp ?></h4>
                            <ul>
                                <li><?= $instansi->alamat ?></li>
                                <li><?= $instansi->email ?></li>
                            </ul>
                            <div class="footer__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-youtube-play"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 offset-lg-1 col-md-5 offset-md-1 col-sm-6">
                        <div class="footer__widget">
                            <h4>Quick Link</h4>
                            <ul>
                                <li><a href="#">Home</a></li>
                                <li><a href="#">Booking</a></li>
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Review</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>
                            <ul>
                                <li><a href="#">Services</a></li>
                                <li><a href="#">Our Room</a></li>
                                <li><a href="#">Restaurants</a></li>
                                <li><a href="#">Payments</a></li>
                                <li><a href="#">Events</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-8 col-sm-12">
                        <div class="footer__newslatter">
                            <h4>Subscribe our newlatester</h4>
                            <form action="#">
                                <input type="text" placeholder="Your E-mail Address">
                                <button type="submit">Subscribe</button>
                            </form>
                            <div class="footer__newslatter__find">
                                <h5>Find Us:</h5>
                                <div class="footer__newslatter__find__links">
                                    <a href="#"><i class="fa fa-tripadvisor"></i></a>
                                    <a href="#"><i class="fa fa-map-o"></i></a>
                                    <a href="#"><i class="fa fa-dribbble"></i></a>
                                    <a href="#"><i class="fa fa-forumbee"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer__copyright">
                <div class="row">
                    <div class="col-lg-7 col-md-7">
                        <div class="footer__copyright__text">
                            <p>Copyright &copy; <script>
                                    document.write(new Date().getFullYear());
                                </script> All rights reserved.</p>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-5">
                        <ul class="footer__copyright__links">
                            <li><a href="#">Terms Of Use</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="<?= base_url('hiroto/js/jquery-3.3.1.min.js') ?>"></script>
    <script src="<?= base_url('hiroto/js/bootstrap.min.js') ?>"></script>
    <script src="<?= base_url('hiroto/js/jquery.nice-select.min.js') ?>"></script>
    <script src="<?= base_url('hiroto/js/jquery-ui.min.js') ?>"></script>
    <script src="<?= base_url('hiroto/js/jquery.slicknav.js') ?>"></script>
    <script src="<?= base_url('hiroto/js/owl.carousel.min.js') ?>"></script>
    <script src="<?= base_url('hiroto/js/main.js') ?>"></script>

    <?php
    $sess = $this->session;
    if ($sess->flashdata('success')) {
        echo "<script>
            Swal.fire({
                title: 'Success',
                html: '" . $sess->flashdata('success') . "',
                icon: 'success',
            })
        </script>";
    } elseif ($sess->flashdata('error')) {
        echo "<script>
            Swal.fire({
                title: 'Error!',
                html: '" . $sess->flashdata('error') . "',
                icon: 'error',
            })
        </script>";
    }
    ?>
</body>

</html>