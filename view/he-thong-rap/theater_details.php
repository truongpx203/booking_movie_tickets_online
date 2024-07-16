<style>
    .tt_rap {
        padding: 10px 20px;
    }
</style>
<main>

    <!-- breadcrumb-area -->
    <section class="breadcrumb-area breadcrumb-bg" data-background="img/bg/breadcrumb_bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h2 class="title">News Details</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Blog Details</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb-area-end -->

    <!-- blog-details-area -->
    <section class="blog-details-area blog-bg" data-background="img/bg/blog_bg.jpg">
        <div class="container">
            <div class="row">
                <?php
                extract($theater_detail);
                ?>
                <div class="col-lg-8">
                    <div class="blog-post-item blog-details-wrap">
                        <div class="tt_rap">
                            <h2 class="title"><?php echo $theater_detail['ten_rap'] ?></h2>
                            <p style="font-weight: bold; color: #e4d804;">Địa điểm : <?php echo $theater_detail['dia_diem'] ?></p>
                        </div>

                        <div class="blog-post-thumb">
                            <a href="blog-details.html"><img src="Assets/img/imgrap.jpg" alt="" style="width: 856.66px; height: 451.86px; object-fit:cover"></a>
                            <br>
                            <br>
                            <a href="blog-details.html"><img src="Assets/img/imgrap1.jpg" alt="" style="width: 856.66px; height: 451.86px; object-fit:cover"></a>

                        </div>
                        <div class="blog-post-content">
                            <div class="banner-meta" style="height: 10px;">
                                <ul>
                                    <li class="quality">
                                        <span style="margin-left: 700px;">Chia sẻ</span>
                                    </li>
                                </ul>
                            </div>
                            <h2 class="title">CÁC QUY ĐỊNH GIÁ VÉ</h2>
                            <p><span style="color: #fff;">– Giá vé trẻ em áp dụng cho trẻ em có chiều cao dưới 1,3m. Yêu cầu trẻ em có mặt khi mua vé. Trẻ em dưới 0,7m sẽ được miễn phí vé khi mua cùng 01 vé người lớn đi kèm theo. Không áp dụng kèm với chương trình khuyến mãi ưu đãi về giá vé khác.</p>
                            <p><span style="color: #fff;">– Giá vé thành viên U22 chỉ áp dụng cho thành viên dưới 22 tuổi khi mua vé. Không áp dụng kèm với chương trình khuyến mãi ưu đãi về giá vé khác. Mỗi thẻ thành viên U22 được áp dụng giá vé ưu đãi tối đa 02 vé/ngày./p>
                                    <p><span style="color: #fff;">– Ngày lễ: 1/1, Giổ Tổ Hùng Vương 10/3 Âm Lịch, 30/4, 1/5, 02 Ngày Lễ Quốc Khánh</p>
                                    <p><span style="color: #fff;">– Giá vé Tết Âm Lịch sẽ được áp dụng riêng.</p>
                                    <p><span style="color: #fff;">– Suất chiếu đặc biệt áp dụng giá vé theo khung giờ của ngày. Không áp dụng các giá vé ưu đãi dành cho U22, Privilege Voucher/Staff Voucher, Happy Day. Trong trường hợp Suất chiếu đặc biệt cùng ngày với Happy Day sẽ áp dụng giá vé của Thứ 3</p>

                                    <blockquote>
                                        <i class="fas fa-quote-right"></i>
                                        <p>Watch Mobflx movies & TV shows online or stream rights to your smart TV, game console, PC, mobile more.</p>
                                        <figure><span>Frenk Smith</span> Founder ceo</figure>
                                    </blockquote>


                                    <div class="blog-post-meta">

                                        <div class="blog-post-share">
                                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                                            <a href="#"><i class="fab fa-twitter"></i></a>
                                            <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                        </div>
                                    </div>
                        </div>
                    </div>

                </div>
                <?php ?>

                <div class="col-lg-4">
                    <aside class="blog-sidebar">

                        <div class="widget blog-widget">
                            <div class="widget-title mb-30">
                                <h5 class="title">Rạp khác</h5>
                            </div>
                            <?php
                            foreach ($show_rap as $item_rap) {

                            ?>
                                <div class="rc-post">
                                    <ul>
                                        <li class="rc-post-item">
                                            <div class="thumb">
                                                <a href="index.php?act=theater_details&id_rap=<?php echo $item_rap['id_rap']; ?>"><img src="Assets/img/<?php echo $item_rap['img']; ?>" alt="img" style="width: 100px; height: 80px; object-fit: cover;" ></a>
                                            </div>
                                            <div class="content">
                                                <h5 class="title"><a href="index.php?act=theater_details&id_rap=<?php echo $item_rap['id_rap']; ?>"><?php echo $item_rap['ten_rap'] ?></a></h5>
                                                <span class="date"><?php echo $item_rap['dia_diem'] ?></span>
                                                <br><br>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            <?php
                            }
                            ?>
                        </div>

                    </aside>
                </div>

            </div>
        </div>
    </section>
    <!-- blog-area-end -->



    <!-- newsletter-area -->

    <!-- newsletter-area-end -->

</main>
<!-- main-area-end -->


<!-- footer-area -->