<!doctype html>
<html class="no-js" lang="">

<!-- Mirrored from themebeyond.com/html/movflx/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 05 Nov 2023 09:51:26 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Movflx - Online Movies & TV Shows Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="account/css-login/bootstrap.min.css" type="text/css">

    <!--Material Icon -->
    <link rel="stylesheet" type="text/css" href="account/css-login/materialdesignicons.min.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />

    <!-- Custom  Css -->
    <link rel="stylesheet" type="text/css" href="account/css-login/style.css" />

    <!-- CSS here -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/fontawesome-all.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/odometer.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/default.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">

    <link rel="shortcut icon" href="images/favicon.ico">
    <!-- slideshow -->
    <!-- <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css"
    /> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick-theme.min.css" />
    <!--  -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- //Meta-Tags -->
    <!-- Index-Page-CSS -->
    <!-- <link rel="stylesheet" href="view/datghe_bongnc/web/css/style.css" type="text/css" media="all"> -->
    <!-- //Custom-Stylesheet-Links -->
    <!--fonts -->
    <link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i" rel="stylesheet">

    <script src="https://kit.fontawesome.com/530a13a970.js" crossorigin="anonymous"></script>
</head>
<style>
    .material-symbols-outlined {
        font-variation-settings:
            'FILL' 0,
            'wght' 400,
            'GRAD' 0,
            'opsz' 24
    }
</style>

<body>

    <!-- preloader -->
    <div id="preloader">
        <div id="loading-center">
            <div id="loading-center-absolute">
                <img src="img/preloader.svg" alt="">
            </div>
        </div>
    </div>
    <!-- preloader-end -->

    <!-- Scroll-top -->
    <button class="scroll-top scroll-to-target" data-target="html">
        <i class="fas fa-angle-up"></i>
    </button>
    <!-- Scroll-top-end-->

    <!-- header-area -->
    <header>
        <div id="sticky-header" class="menu-area transparent-header">
            <div class="container custom-container">
                <div class="row">
                    <div class="col-12">
                        <div class="mobile-nav-toggler"><i class="fas fa-bars"></i></div>
                        <div class="menu-wrap">
                            <nav class="menu-nav show">
                                <div class="logo">
                                    <a href="index.php">
                                        <img src="img/logo/logo.png" alt="Logo">
                                    </a>
                                </div>
                                <div class="navbar-wrap main-menu d-none d-lg-flex" style="margin-left: 150px;">
                                    <ul class="navigation">
                                        <li class="active menu-item-has-children"><a href="index.php">Trang chủ</a>
                                        </li>
                                        <li class="menu-item-has-children"><a href="index.php?act=movie-item">Thể loại phim</a>
                                        </li>
                                        <!-- <li class="menu-item-has-children"><a href="index.php?act=movie_show_schedule">Lịch chiếu</a>
                                            <ul class="submenu">
                                                <li><a href="index.php?act=movie_show_schedule">Lịch chiếu theo phim</a></li>
                                                <li><a href="index.php?act=movie_show_theater">Lịch chiếu theo rạp</a></li>
                                            </ul>
                                        </li> -->
                                        <li><a href="index.php?act=theaters">Hệ thống rạp</a></li>
                                        <li class="menu-item-has-children"><a href="index.php?act=events">Khuyến mãi | Sự kiện</a>
                                        </li>
                                        <li><a href="index.php?act=contact">Liên hệ</a></li>
                                    </ul>
                                </div>
                                <div class="header-action d-none d-md-block">
                                    <?php
                                    if (isset($_SESSION['my_user'])) {
                                    ?>
                                        <ul>
                                            <li class="header-search"><a href="#" data-toggle="modal" data-target="#search-modal"><i class="fas fa-search"></i></a></li>
                                            <li class="header-btn"><a href="index.php?act=thanh_vien" class="btn" style="border-radius: 50px;"><i class="fa-regular fa-user"></i><?php echo $_SESSION['my_user']['ho_ten']; ?></a></li>
                                            <li class="header-btn" style="margin-left: 10px"><a href="index.php?act=logout" class="btn" style="border-radius: 50px; height: 44.2px; width: 20px;" onclick="return confirm('Bạn muốn đăng xuất ?')"> <span class="material-symbols-outlined" style="display: flex; justify-content: center;">
                                                logout
                                            </span></a></li>
                                           
                                        </ul>
                                    <?php
                                    } else {
                                    ?>
                                        <ul>
                                            <li class="header-search"><a href="#" data-toggle="modal" data-target="#search-modal"><i class="fas fa-search"></i></a></li>
                                            <li class="header-btn"><a href="index.php?act=login" class="btn" style="border-radius: 50px;">Đăng nhập</a></li>
                                        </ul>
                                    <?php
                                    }
                                    ?>
                                </div>
                            </nav>
                        </div>

                        <!-- Mobile Menu  -->
                        <div class="mobile-menu">
                            <div class="close-btn"><i class="fas fa-times"></i></div>

                            <nav class="menu-box">
                                <div class="nav-logo"><a href="index.html"><img src="img/logo/logo.png" alt="" title=""></a>
                                </div>
                                <div class="menu-outer">
                                    <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                                </div>
                                <div class="social-links">
                                    <ul class="clearfix">
                                        <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                        <li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
                                        <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
                                        <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                                        <li><a href="#"><span class="fab fa-youtube"></span></a></li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                        <div class="menu-backdrop"></div>
                        <!-- End Mobile Menu -->

                        <!-- Modal Search -->
                        <div class="modal fade" id="search-modal" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <form action="index.php?act=search_Items" method="POST">
                                        <input type="text" name="keyw" placeholder="Search here..." required>
                                        <button type="submit"><i class="fas fa-search"></i></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- Modal Search-end -->

                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header-area-end -->