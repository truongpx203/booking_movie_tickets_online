<?php
if (is_array($result)) {
    extract($result);
}
?>
        <!-- main-area -->
        <main>
            <!-- breadcrumb-area -->
            <section class="breadcrumb-area breadcrumb-bg" data-background="img/bg/breadcrumb_bg.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="breadcrumb-content">
                                <h2 class="title">Kết quả <span>Tìm kiếm</span></h2>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Tìm kiếm</li>
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
                                <span class="sub-title">Search Results</span>
                                <h2 class="title">Kết quả tìm kiếm</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row tr-movie-active">
                        <?php 
                        foreach ($result as $row) {
                            
                        ?>
                        <div class="col-xl-3 col-lg-4 col-sm-6 grid-item grid-sizer bom_tan">
                            <div class="movie-item movie-item-three mb-50">
                                <div class="movie-poster">
                                    <img src="Assets/img/<?php echo $row['anh']; ?>" alt="" style="width: 302.5px; height: 429.29px; object-fit: cover;">
                                    <ul class="overlay-btn">
                                        <li class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </li>
                                        <li><a href="<?php echo $row['trailer'] ?>" class="popup-video btn">Xem ngay</a></li>
                                        <li><a href="index.php?act=movie_details&id_phim=<?php echo $row['id_phim']; ?>" class="btn">Đặt vé</a></li>
                                    </ul>
                                </div>
                                <div class="movie-content">
                                    <div class="top">
                                        <h5 class="title"><a href="movie-details.html"><?php echo $row['ten_phim'] ?></a></h5>
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
                        </div>
                        <?php 
                        }
                        ?>        
                    </div>
            </section>
        </main>
