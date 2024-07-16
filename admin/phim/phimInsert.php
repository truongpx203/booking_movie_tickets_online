<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Add New<small></small></h3>
                    </div>
                    <form action="index.php?act=addPro" method="post" enctype="multipart/form-data">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Tên phim</label>
                                <input type="text" name="ten_phim" class="form-control" placeholder="">
                                <label for="exampleInputEmail1">Ảnh phim</label>
                                <input type="file" name="img_phim" class="form-control" placeholder="">
                                <label for="exampleInputEmail1">Ngày phát hành</label>
                                <input type="date" name="ngay_phat_hanh" class="form-control" placeholder="">
                                <label for="exampleInputEmail1">Ngôn ngữ</label>
                                <br>
                                <select name="ngon_ngu" id="">
                                    <option value="Tiếng Việt">Tiếng Việt</option>
                                    <option value="Tiếng Anh">Tiếng Anh</option>
                                </select>
                                <br>
                                <label for="exampleInputEmail1">Trailer</label>
                                <input type="text" name="trailer" class="form-control" placeholder="">
                                <label for="exampleInputEmail1">Thời lượng</label>
                                <input type="text" name="thoi_luong" class="form-control" placeholder="">
                                <label for="exampleInputEmail1">Mô tả</label>
                                <textarea class="form-control" name="editor" id="" cols="30" rows="5"></textarea>

                                <label for="exampleInputEmail1">Trạng thái phim</label>
                                <br>
                                <select name="trang_thai_phim" id="">
                                    <option value="Phim đang chiếu">Phim đang chiếu</option>
                                    <option value="Phim sắp chiếu">Phim sắp chiếu</option>
                                    <option value="Vé bán trước">Vé bán trước</option>
                                </select>
                                <br>
                                <label for="exampleInputEmail1">Mã khuyến mãi</label>
                                <br>
                                <select name="id_khuyen_mai" id="">
                                      <?php
                                            include_once '../model/pdo.php';
                                            $a = "select * from khuyen_mai";
                                            $result1 = pdo_query($a);
                                            foreach ($result1 as $row) {
                                            ?>
                                                <option value="<?php echo $row['id_khuyen_mai'] ?>">
                                                <?php echo $row['ten_khuyen_mai'] ?>
                                                    </option>
                                            <?php } ?>
                                </select>
                                <br>
                                <label for="exampleInputEmail1">Thể Loại</label>
                                <br>
                                 <select name="id_the_loai" id="">
                                      <?php
                                            include_once '../model/pdo.php';
                                            $a = "select * from the_loai_phim";
                                            $result1 = pdo_query($a);
                                            foreach ($result1 as $row) {
                                            ?>
                                                <option value="<?php echo $row['id_the_loai'] ?>">
                                                <?php echo $row['ten_the_loai'] ?>
                                                    </option>
                                            <?php } ?>
                                </select>
                                <br>
                            </div>

                        </div>

                        <div class="card-footer">
                            <input type="submit" class="btn btn-primary" value="Thêm phim mới" name="btn_insert"></input>
                        </div>
                    </form>
                </div>

            </div>

        </div>

    </div>

</section>

<!-- <script>
    CKEDITOR.replace('editor');
</script>
 -->