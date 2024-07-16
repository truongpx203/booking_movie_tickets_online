<style>
    body {
        background: #ccc;
    }

    .main {
        font-family: Arial;
        width: 500px;
        display: block;
        margin: 0 auto;
    }

    h1 {
        background: #040406;
        color: #e4d804;
        font-size: 15px;
        line-height: 25px;
        margin: 10px;
        padding: 2%;
        position: relative;
        text-align: center;
        width: 100px;
        cursor: pointer;
    }

    .action {
        display: block;
        margin: 100px auto;
        width: 100%;
        text-align: center;
    }

    .action a {
        display: inline-block;
        padding: 5px 10px;
        background: #f30;
        color: #fff;
        text-decoration: none;
    }

    .action a:hover {
        background: #000;
    }

    .inside {
        width: 220px;
        height: 120px;
        background-color: #1c2936;
    }

    .vitri a {
        text-decoration: none;
        color: #000;
        font-weight: 530;
        font-size: 14px;
    }

    .vitri {
        padding: 5px 67px;
        background-color: #e4d804;
        font-size: 16px;
    }

    .vitri:hover {
        padding: 5px 67px;
        background-color: #fff;
        font-size: 16px;
    }

    .rowthoigian {
        display: flex;
        align-items: center;
        padding: 0px 10px;
    }

    .thoigian {
        margin-left: 10px;
        margin-bottom: 70px;
        line-height: 38px;
    }

    .gio_chieu {
        background: #f0f0f0;
        border: 2px solid #e4d804;
        color: #000;
    }

    .gio_chieu:hover {
        transition: all 0.3s ease 0s;
        color: #000;
        background: #e4d804;
    }
</style>
<!-- main-area -->
<main>
    <!-- movie-details-area -->
    <section class="movie-details-area" data-background="img/bg/movie_details_bg.jpg">
        <div class="container">
            <?php extract($movie_detail); ?>

            <div class="row align-items-center position-relative">
                <div class="col-xl-3 col-lg-4">
                    <div class="movie-details-img">
                        <img style="width: 303px; height: 430px;" src="Assets/img/<?php echo $movie_detail['anh']; ?>" alt="">
                        <a href="<?php echo $movie_detail['trailer']; ?>" class="popup-video"><img src="img/images/play_icon.png" alt=""></a>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-8">
                    <div class="movie-details-content">
                        <h5>New Episodes</h5>
                        <!-- <h2>The Easy <span>Reach</span></h2> -->
                        <h2><?php echo $movie_detail['ten_phim'] ?></h2>
                        <div class="banner-meta">
                            <ul>
                                <li class="quality">
                                    <span>Pg 18</span>
                                    <span>hd</span>
                                </li>
                                <li class="category">
                                    <a href="#">Thể loại:</a>
                                    <a href="#"><?php echo $movie_detail['ten_the_loai'] ?></a>
                                </li>
                                <li class="release-time">
                                    <span><i class="far fa-calendar-alt"></i><?php echo $movie_detail['ngay_phat_hanh'] ?></span>
                                    <span><i class="far fa-clock"></i><?php echo $movie_detail['thoi_luong'] ?></span>
                                </li>
                            </ul>
                        </div>
                        <p><?php echo $movie_detail['mo_ta'] ?></p>
                        <div class="movie-details-prime">
                            <ul>
                                <li class="share"><a href="#"><i class="fas fa-share-alt"></i> Share</a></li>
                                <li class="streaming">
                                    <h6>Prime Video</h6>
                                    <span>Streaming Channels</span>
                                </li>
                                <li class="watch"><a href="https://www.youtube.com/watch?v=R2gbPxeNk2E" class="btn popup-video"><i class="fas fa-play"></i> Watch Now</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="movie-details-btn">
                    <a href="img/poster/movie_details_img.jpg" class="download-btn" download="">Download <img src="fonts/download.svg" alt=""></a>
                </div>
            </div>
        </div>
    </section>
    <!-- movie-details-area-end -->
    <!-- episode-area -->
    <section class="episode-area episode-bg" data-background="img/bg/episode_bg.jpg">
        <div class="container">
            <?php
            if (isset($_SESSION['my_user']) && count($_SESSION['my_user']) != 0) {
            ?>
                <div class="main" style="width: 750px;">
                    <div class="slider slider-nav">
                        <?php
                         if (empty($ngay_suat_chieu)) {
                            echo "<strong style='font-size:19px'>Chưa có suất chiếu nào.</strong>";
                        }else{
                            foreach ($ngay_suat_chieu as $row_ngay_chieu) {
                                $ngayHienTai = date("Y-m-d");
                                if ($row_ngay_chieu['ngay_chieu'] >= $ngayHienTai && !($movie_detail['trang_thai_phim'] == 'Phim sắp chiếu')) {
                            ?>
                                    <a href="index.php?act=movie_details&id_phim=<?php echo $id_phim; ?>&date=<?php echo $row_ngay_chieu['ngay_chieu']; ?>">
                                        <div>
                                            <h1><?php
                                                $days = array("Chủ nhật", "Thứ hai", "Thứ ba", "Thứ tư", "Thứ năm", "Thứ sáu", "Thứ bảy");
                                                $date = date('w', strtotime($row_ngay_chieu['ngay_chieu']));
                                                echo $days[$date];
                                                // echo $row_ngay_chieu['ngay_chieu'];
                                                ?><br>
                                                <p style="font-size: 14px; height: 10px;"><?php
                                                                                            //  echo $row_ngay_chieu['ngay_chieu']; 
                                                                                            $date = strtotime($row_ngay_chieu['ngay_chieu']);
                                                                                            $formatted_date = date('d-m-Y', $date);
                                                                                            echo $formatted_date;
                                                                                            ?></p>
                                        </div>
                                    </a>
                            <?php
                                }
                            }
                        }
                       
                        ?>
                    </div>
                    <div class="slider slider-for">
                        <?php
                        extract($rap_va_gio_chieu);
                        $lastRap = null;
                        foreach ($rap_va_gio_chieu as $row) {
                            if ($row['ten_rap'] !== $lastRap) {
                                $printedRapInfo = false;
                                if (!$printedRapInfo) {
                        ?>
                                    <div>
                                        <div class="rowthoigian">
                                            <div class="info" style="padding: 0 20px;">
                                                <div class="inside">
                                                    <h4 style="color: #ffffff; padding: 10px; font-size: 20px;"><?php echo $row['ten_rap'] ?></h4>
                                                    <p style="padding: 0px 10px; color: #90a0ba;"><?php echo $row['dia_diem'] ?></p>
                                                </div><br>
                                            </div>
                                    <?php
                                    $printedRapInfo = true;
                                }
                            }
                                    ?>
                                    <div class="thoigian">
                                        <ul>
                                            <form action="index.php?act=chon_rap_ca_chieu" method="post">
                                                <input type="hidden" name="id_phim" value="<?php echo $movie_detail['id_phim']; ?>">
                                                <input type="hidden" name="id_rap" value="<?php echo $row['id_rap']; ?>">
                                                <input type="hidden" name="id_suat_chieu" value="<?php echo $row['id_suat_chieu']; ?>">
                                                <input class="gio_chieu" type="submit" name="btn_rap_ca_chieu" value="<?php echo $row['gio_chieu']; ?>">
                                            </form>
                                        </ul>
                                    </div>
                                <?php
                                $lastRap = $row['ten_rap'];
                            }
                                ?>
                                        </div>
                                    </div>
                    </div>
                </div>
            <?php
            } else {
            ?>
                <li style="display: flex; justify-content: center;" class="watch"><a style="max-width: 230px;" href="index.php?act=login" class="btn">Đăng nhập để đặt vé</a></li>
            <?php
            }
            ?>

    </section>
    <!-- episode-area-end -->
</main>
<!-- main-area-end -->