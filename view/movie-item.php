
        <!-- main-area -->
        <main>

            <!-- breadcrumb-area -->
            <section class="breadcrumb-area breadcrumb-bg" data-background="img/bg/breadcrumb_bg.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="breadcrumb-content">
                                <h2 class="title">Thể loại <span>Phim</span></h2>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Thể loại phim</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- breadcrumb-area-end -->

            <!-- movie-area -->
            <section class="movie-area movie-bg" data-background="img/bg/movie_bg.jpg">
                <div class="container">
                    <div class="row align-items-end mb-60">
                        <div class="col-lg-6">
                            <div class="section-title text-center text-lg-left">
                                <span class="sub-title">Movie genre</span>
                                <h2 class="title">Thể loại phim</h2>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="movie-page-meta">
                                <div class="tr-movie-menu-active text-center">
                                    <button class="active" data-filter="*">Tất cả</button>   
                                    <button class="" data-filter=".bom_tan">Bom tấn</button>
                                    <button class="" data-filter=".hoat_hinh">Hoạt hình</button>
                                    <button class="" data-filter=".tam_ly">Tâm lý</button>
                                    <button class="" data-filter=".kinh_di">Kinh dị</button>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row tr-movie-active">
                       
                        <?php 
                        foreach ($show_phim_bomtan as $phim_bomtan) {
                            
                        ?>
                        <div class="col-xl-3 col-lg-4 col-sm-6 grid-item grid-sizer bom_tan">
                            <div class="movie-item movie-item-three mb-50">
                                <div class="movie-poster">
                                    <img src="Assets/img/<?php echo $phim_bomtan['anh']; ?>" alt="" style="width: 302.5px; height: 429.29px; object-fit: cover;">
                                    <ul class="overlay-btn">
                                        <li class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </li>
                                        <li><a href="<?php echo $phim_bomtan['trailer'] ?>" class="popup-video btn">Xem ngay</a></li>
                                        <li><a href="index.php?act=movie_details&id_phim=<?php echo $phim_bomtan['id_phim']; ?>" class="btn">Đặt vé</a></li>
                                    </ul>
                                </div>
                                <div class="movie-content">
                                    <div class="top">
                                        <h5 class="title"><a href="movie-details.html"><?php echo $phim_bomtan['ten_phim'] ?></a></h5>
                                        <span class="date">2023</span>
                                    </div>
                                    <div class="bottom">
                                        <ul>
                                            <li><span class="quality">hd</span></li>
                                            <li>
                                                <span class="duration"><i class="far fa-clock"></i><?php echo $phim_bomtan['thoi_luong'] ?></span>
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
                          <?php 
                        foreach ($show_phim_hoathinh as $phim_hoathinh) {
                            
                        ?>
                        <div class="col-xl-3 col-lg-4 col-sm-6 grid-item grid-sizer hoat_hinh">
                            <div class="movie-item movie-item-three mb-50">
                                <div class="movie-poster">
                                    <img src="Assets/img/<?php echo $phim_hoathinh['anh']; ?>" alt="" style="width: 302.5px; height: 429.29px; object-fit: cover;">
                                    <ul class="overlay-btn">
                                        <li class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </li>
                                        <li><a href="<?php echo $phim_hoathinh['trailer'] ?>" class="popup-video btn">Xem ngay</a></li>
                                        <li><a href="index.php?act=movie_details&id_phim=<?php echo $phim_hoathinh['id_phim']; ?>" class="btn">Đặt vé</a></li>
                                    </ul>
                                </div>
                                <div class="movie-content">
                                    <div class="top">
                                        <h5 class="title"><a href="movie-details.html"><?php echo $phim_hoathinh['ten_phim'] ?></a></h5>
                                        <span class="date">2023</span>
                                    </div>
                                    <div class="bottom">
                                        <ul>
                                            <li><span class="quality">hd</span></li>
                                            <li>
                                                <span class="duration"><i class="far fa-clock"></i><?php echo $phim_hoathinh['thoi_luong'] ?></span>
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
                          <?php 
                        foreach ($show_phim_tamly as $phim_tamly) {
                            
                        ?>
                        <div class="col-xl-3 col-lg-4 col-sm-6 grid-item grid-sizer tam_ly">
                            <div class="movie-item movie-item-three mb-50">
                                <div class="movie-poster">
                                    <img src="Assets/img/<?php echo $phim_tamly['anh']; ?>" alt="" style="width: 302.5px; height: 429.29px; object-fit: cover;">
                                    <ul class="overlay-btn">
                                        <li class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </li>
                                        <li><a href="<?php echo $phim_tamly['trailer'] ?>" class="popup-video btn">Xem ngay</a></li>
                                        <li><a href="index.php?act=movie_details&id_phim=<?php echo $phim_tamly['id_phim']; ?>" class="btn">Đặt vé</a></li>
                                    </ul>
                                </div>
                                <div class="movie-content">
                                    <div class="top">
                                        <h5 class="title"><a href="movie-details.html"><?php echo $phim_tamly['ten_phim'] ?></a></h5>
                                        <span class="date">2023</span>
                                    </div>
                                    <div class="bottom">
                                        <ul>
                                            <li><span class="quality">hd</span></li>
                                            <li>
                                                <span class="duration"><i class="far fa-clock"></i><?php echo $phim_tamly['thoi_luong'] ?></span>
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
                          <?php 
                        foreach ($show_phim_kinhdi as $phim_kinhdi) {
                            
                        ?>
                        <div class="col-xl-3 col-lg-4 col-sm-6 grid-item grid-sizer kinh_di">
                            <div class="movie-item movie-item-three mb-50">
                                <div class="movie-poster">
                                    <img src="Assets/img/<?php echo $phim_kinhdi['anh']; ?>" alt="" style="width: 302.5px; height: 429.29px; object-fit: cover;">
                                    <ul class="overlay-btn">
                                        <li class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </li>
                                        <li><a href="<?php echo $phim_kinhdi['trailer'] ?>" class="popup-video btn">Xem ngay</a></li>
                                        <li><a href="index.php?act=movie_details&id_phim=<?php echo $phim_kinhdi['id_phim']; ?>" class="btn">Đặt vé</a></li>
                                    </ul>
                                </div>
                                <div class="movie-content">
                                    <div class="top">
                                        <h5 class="title"><a href="movie-details.html"><?php echo $phim_kinhdi['ten_phim'] ?></a></h5>
                                        <span class="date">2023</span>
                                    </div>
                                    <div class="bottom">
                                        <ul>
                                            <li><span class="quality">hd</span></li>
                                            <li>
                                                <span class="duration"><i class="far fa-clock"></i><?php echo $phim_kinhdi['thoi_luong'] ?></span>
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
            </section>
            <!-- movie-area-end -->


        </main>
        <!-- main-area-end -->
