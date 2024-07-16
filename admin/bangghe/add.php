

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Add Chair Table<small></small></h3>
                    </div>
                    <form action="index.php?act=addghe" method="post" enctype="multipart/form-data">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Tên ghế</label>
                                <input type="text" name="ten_ghe" class="form-control" placeholder="">
                                <label for="exampleInputEmail1">Trạng thái</label>
                                <input type="text" name="trang_thai" class="form-control" placeholder="">
                                <label for="exampleInputEmail1">Giá</label>
                                <input type="text" name="gia" class="form-control" placeholder="">
                                <label for="exampleInputEmail1">Loại ghế</label>
                                <input type="text" name="loai_ghe" class="form-control" placeholder="">
                              <br>
                                <label for="exampleInputEmail1">Phòng chiếu</label>
                                 <select name="id_phong_chieu" id="">
                                            <?php
                                            include_once '../model/pdo.php';
                                            $a = "select * from phong_chieu";
                                            $result1 = pdo_query($a);
                                            foreach ($result1 as $row) {
                                            ?>
                                                <option value="<?php echo $row['id_phong_chieu'] ?>">
                                                <?php echo $row['ten_phong_chieu'] ?>
                                                    </option>
                                            <?php } ?>
                                </select>


                            </div>

                        </div>

                        <div class="card-footer">
                            <input type="submit" class="btn btn-primary" value="Thêm bảng ghế" name="btn_insert"></input>
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