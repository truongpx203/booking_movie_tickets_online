<!-- main-area -->
<main>

    <!-- banner-area -->
    <section class="banner-area banner-bg" data-background="img/banner/banner_bg01.jpg">
        <div class="container custom-container">
            <div class="row">
                <div class="col-xl-6 col-lg-8">
                    <div class="banner-content">
                        <h6 class="sub-title wow fadeInUp" data-wow-delay=".2s" data-wow-duration="1.8s">Movflx</h6>
                        <h2 class="title wow fadeInUp" data-wow-delay=".4s" data-wow-duration="1.8s">Đặt vé <span>Xem Phim</span> mọi lúc, mọi nơi.</h2>
                        <div class="banner-meta wow fadeInUp" data-wow-delay=".6s" data-wow-duration="1.8s">
                            <ul>
                                <li class="quality">
                                    <span>Pg 18</span>
                                    <span>hd</span>
                                </li>
                                <li class="category">
                                    <a href="#">Romance,</a>
                                    <a href="#">Drama</a>
                                </li>
                                <li class="release-time">
                                    <span><i class="far fa-calendar-alt"></i> 2021</span>
                                    <span><i class="far fa-clock"></i> 128 min</span>
                                </li>
                            </ul>
                        </div>
                        <a href="https://www.youtube.com/watch?v=R2gbPxeNk2E" class="banner-btn btn popup-video wow fadeInUp" data-wow-delay=".8s" data-wow-duration="1.8s"><i class="fas fa-play"></i> Watch Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner-area-end -->

    <!-- up-coming-movie-area -->
    <section class="ucm-area ucm-bg" data-background="img/bg/ucm_bg.jpg">
        <div class="ucm-bg-shape" data-background="img/bg/ucm_bg_shape.png"></div>
        <div class="container">
            <div class="row align-items-end mb-55">
                <div class="col-lg-6">
                    <div class="section-title text-center text-lg-left">
                        <span class="sub-title">Book movie tickets online</span>
                        <h2 class="title">Danh sách phim</h2>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="ucm-nav-wrap">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link active" id="tvShow-tab" data-toggle="tab" href="#tvShow" role="tab" aria-controls="tvShow" aria-selected="true">PHIM ĐANG CHIẾU</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="movies-tab" data-toggle="tab" href="#movies" role="tab" aria-controls="movies" aria-selected="false">PHIM SẮP CHIẾU</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="tvShow" role="tabpanel" aria-labelledby="tvShow-tab">
                    <div class="ucm-active owl-carousel">
                        <?php
                        foreach ($phim_dangchieu as $row) {
                            extract($row);
                        ?>
                            <div class="movie-item mb-50">
                                <div class="movie-poster">
                                    <a href="index.php?act=movie_details&id_phim=<?php echo $row['id_phim']; ?>"><img style="width: 302.5px; height: 429.29px; object-fit: cover;" src="Assets/img/<?php echo $row['anh']; ?>" alt=""></a>
                                </div>
                                <div class="movie-content">
                                    <div class="top">
                                        <h5 class="title"><a href="index.php?act=movie_details"><?php echo $row['ten_phim']; ?></a></h5>
                                        <span class="date">2023</span>
                                    </div>
                                    <div class="bottom">
                                        <ul>
                                            <li><span class="quality">hd</span></li>
                                            <li>
                                                <span class="duration"><i class="far fa-clock"></i><?php echo $row['thoi_luong'] ?></span>
                                                <span class="rating"><i class="fas fa-thumbs-up"></i> 3.5</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                        <?php }
                        ?>
                    </div>
                </div>
                <div class="tab-pane fade" id="movies" role="tabpanel" aria-labelledby="movies-tab">
                    <div class="ucm-active owl-carousel">
                        <?php
                        foreach ($phim_sapchieu as $row) {
                            extract($row);
                        ?>
                            <div class="movie-item mb-50">
                                <div class="movie-poster">
                                    <a href="index.php?act=movie_details&id_phim=<?php echo $row['id_phim']; ?>"><img style="width: 302.5px; height: 429.29px; object-fit: cover;" src="Assets/img/<?php echo $row['anh']; ?>" alt=""></a>
                                </div>
                                <div class="movie-content">
                                    <div class="top">
                                        <h5 class="title"><a href="index.php?act=movie_details"><?php echo $row['ten_phim'] ?></a></h5>
                                        <span class="date">2023</span>
                                    </div>
                                    <div class="bottom">
                                        <ul>
                                            <li><span class="quality">hd</span></li>
                                            <li>
                                                <span class="duration"><i class="far fa-clock"></i></i><?php echo $row['thoi_luong'] ?></span>
                                                <span class="rating"><i class="fas fa-thumbs-up"></i> 3.5</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        <?php }
                        ?>
                    </div>

                </div>
            </div>
    </section>
    <!-- up-coming-movie-area-end -->

    <!-- gallery-area -->
    <div class="gallery-area position-relative">
        <div class="gallery-bg"></div>
        <div class="container-fluid p-0 fix">
            <div class="row gallery-active">
                <div class="col-12">
                    <div class="gallery-item">
                        <img src="img/images/gallery_01.jpg" alt="">
                    </div>
                </div>
                <div class="col-12">
                    <div class="gallery-item">
                        <img src="img/images/gallery_02.jpg" alt="">
                    </div>
                </div>
                <div class="col-12">
                    <div class="gallery-item">
                        <img src="img/images/gallery_03.jpg" alt="">
                    </div>
                </div>
                <div class="col-12">
                    <div class="gallery-item">
                        <img src="img/images/gallery_04.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="slider-nav"></div>
    </div>
    <!-- gallery-area-end -->

    <!-- top-rated-movie -->
    <section class="top-rated-movie tr-movie-bg" data-background="img/bg/tr_movies_bg.jpg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title text-center mb-50">
                        <span class="sub-title">Top Favorite Movies</span>
                        <h2 class="title">Top Phim Yêu Thích</h2>
                    </div>
                </div>
            </div>
            <div class="row tr-movie-active">

                <?php
                foreach ($show_top_phim as $top_phim) {
                ?>
                    <div class="col-xl-3 col-lg-4 col-sm-6 grid-item grid-sizer cat-two" >
                        <div class="movie-item mb-60">
                            <div class="movie-poster">
                                <a href="index.php?act=movie_details&id_phim=<?php echo $top_phim['id_phim']; ?>"><img src="Assets/img/<?php echo $top_phim['anh']; ?>" alt=""></a>
                            </div>
                            <div class="movie-content">
                                <div class="top">
                                    <h5 class="title"><a href="index.php?act=movie_details"><?php echo $top_phim['ten_phim']; ?></a></h5>
                                    <span class="date"><?php echo $top_phim['ngay_phat_hanh']; ?></span>
                                </div>
                                <div class="bottom">
                                    <ul>
                                        <li><span class="quality">hd</span></li>
                                        <li>
                                            <span class="duration"><i class="far fa-clock"></i> <?php echo $top_phim['thoi_luong']; ?></span>
                                            <span class="rating"><i class="fas fa-thumbs-up"></i> 3.5</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                <?php
                }

                ?>


            </div>
        </div>
    </section>
    <!-- top-rated-movie-end -->

</main>
<!-- main-area-end -->