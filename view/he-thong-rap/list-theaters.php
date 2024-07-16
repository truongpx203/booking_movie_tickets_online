
        <!-- main-area -->
        <main>

            <!-- breadcrumb-area -->
            <section class="breadcrumb-area breadcrumb-bg" data-background="img/bg/breadcrumb_bg.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="breadcrumb-content">
                                <h2 class="title">Hệ thống <span>Rạp</span></h2>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Hệ thống rạp</li>
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
                                <span class="sub-title">Theater system</span>
                                <h2 class="title">Hệ thống rạp</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row tr-movie-active">
                        <?php foreach ($show_rap as $row) {
                            extract($row);
                         ?>
                        <div class="col-xl-3 col-lg-4 col-sm-6 grid-item grid-sizer cat-two">
                            <div class="movie-item movie-item-three mb-50">
                                <div class="movie-poster">
                                    <img style="width:302.5px;height:429.29px;object-fit:cover;" src="Assets/img/<?php echo $row['img']; ?>" alt="">
                                    <ul class="overlay-btn">
                                        <li class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </li>
                                        <li><a href="index.php?act=theater_details&id_rap=<?php echo $row['id_rap']; ?>" class="btn">Details</a></li>
                                    </ul>
                                </div>
                                <div class="movie-content">
                                    <div class="top">
                                        <h5 class="title"><a href="movie-details.html"><?php echo $row['dia_diem'] ?></a></h5>

                                        <!-- <span class="date">2021</span> -->
                                    </div>
                                    <div class="bottom">
                                        <ul>
                                            <li><span class="quality">Chia sẻ</span></li>
                                            <li>
                                                <!-- <span class="duration"><i class="far fa-clock"></i> 128 min</span> -->
                                                <span class="rating"><i class="fas fa-thumbs-up"></i> 3.5</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php  } ?>

                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="pagination-wrap mt-30">
                                <nav>
                                    <ul>
                                        <li class="active"><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#">4</a></li>
                                        <li><a href="#">Next</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- movie-area-end -->


        </main>
        <!-- main-area-end -->
