<?php
extract($result);
?>

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- jquery validation -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Edit thông tin phim<small></small></h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->

                    <form action="index.php?act=update_Phim" method="post" enctype="multipart/form-data">
                        <div class="card-body">
                            <div class="form-group">
                                <input type="hidden" name="id_phim" value="<?php echo $result['id_phim']; ?>">
                                <label for="exampleInputEmail1">Tên phim</label>
                                <input type="text" name="ten_phim" class="form-control" placeholder="" value="<?php echo $result['ten_phim'] ?>">
                                <label for="exampleInputEmail1">Images</label>
                                <input type="file" name="name_img" class="form-control"> <img style="width: 100px; height: 150px; margin: 20px 0;" src="../Assets/img/<?php echo $result['anh'] ?>" alt="img"> 
                                <br>
                                <label for="exampleInputEmail1">Ngày phát hành</label>
                                <input type="date" name="ngay_phat_hanh" class="form-control" placeholder="" value="<?php echo $result['ngay_phat_hanh'] ?>">
                                <label for="exampleInputEmail1">Ngôn ngữ</label>
                                <br>
                                <select name="ngon_ngu" id="">
                                    <?php
                                    $ngonngu = ['Tiếng Việt', 'Tiếng Anh'];
                                    foreach ($ngonngu as $value) {
                                    ?>
                                        <option value="<?php echo $value; ?>" <?php if ($value == $result['ngon_ngu']) echo 'selected'; ?>>
                                            <?php echo $value; ?>
                                        </option>
                                    <?php
                                    }
                                    ?>
                                </select>
                                <br>
                                <label for="exampleInputEmail1">Trailer</label>
                                <input type="text" name="trailer" class="form-control" placeholder="" value="<?php echo $result['trailer'] ?>">
                                <label for="exampleInputEmail1">Thời lượng</label>
                                <input type="text" name="thoi_luong" class="form-control" placeholder="" value="<?php echo $result['thoi_luong'] ?>">
                                <label for="exampleInputEmail1">Mô tả</label>
                                <textarea class="form-control" name="editor" id="" cols="30" rows="5"><?php echo $result['mo_ta']; ?></textarea>
                                <label for="exampleInputEmail1">Trạng thái phim</label>
                                <br>
                                <select name="trang_thai_phim" id="">
                                    <?php
                                    $trangthai = ['Phim đang chiếu', 'Phim sắp chiếu'];
                                    foreach ($trangthai as $value) {
                                    ?>
                                        <option value="<?php echo $value; ?>" <?php if ($value == $result['trang_thai_phim']) echo 'selected'; ?>>
                                            <?php echo $value; ?>
                                        </option>
                                    <?php
                                    }
                                    ?>
                                </select>
                                <br>
                                <label for="exampleInputEmail1">Mã khuyến mãi</label>
                                <br>    
                                <select name="id_khuyen_mai" id="">
                                    <?php
                                    foreach ($result_khuyenmai as $row_khuyenmai) {
                                    ?>
                                        <option value="<?php echo $row_khuyenmai['id_khuyen_mai']; ?>" <?php if ($row_khuyenmai['id_khuyen_mai'] == $result['id_khuyen_mai'])   echo 'selected'; ?>>
                                            <?php echo $row_khuyenmai['ten_khuyen_mai']; ?>
                                        </option>
                                    <?php
                                    }
                                    ?>
                                </select>
                                <br>
                                <label for="exampleInputEmail1">Thể loại</label>
                                <br>    
                                <select name="id_the_loai" id="">
                                    <?php
                                    foreach ($result_loai as $row_loai) {
                                    ?>
                                        <option value="<?php echo $row_loai['id_the_loai']; ?>" <?php if ($row_loai['id_the_loai'] == $result['id_the_loai'])   echo 'selected'; ?>>
                                            <?php echo $row_loai['ten_the_loai']; ?>
                                        </option>
                                    <?php
                                    }
                                    ?>
                                </select>
                                
                            </div>

                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <input type="submit" class="btn btn-primary" value="Submit" name="btn_update"></input>
                        </div>
                    </form>

                </div>
                <!-- /.card -->
            </div>
            <!--/.col (left) -->
            <!-- right column -->
            <div class="col-md-6">

            </div>
            <!--/.col (right) -->
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</section>

<!-- <script>
    CKEDITOR.replace('editor');
</script> -->