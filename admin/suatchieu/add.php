

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Add Movie Screening<small></small></h3>
                    </div>
                    <form action="index.php?act=addsc" method="post" enctype="multipart/form-data">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Ngày chiếu</label>
                                <input type="date" name="ngay_chieu" class="form-control" placeholder="">
                                <label for="exampleInputEmail1">Giờ chiếu</label>
                                <input type="time" name="gio_chieu" class="form-control" placeholder="">
                              <br>
                                <label for="exampleInputEmail1">Phim</label>
                                <br>
                                 <select name="id_phim" id="">
                                      <?php
                                            include_once '../model/pdo.php';
                                            $a = "select * from phim";
                                            $result1 = pdo_query($a);
                                            foreach ($result1 as $row) {
                                            ?>
                                                <option value="<?php echo $row['id_phim'] ?>">
                                                <?php echo $row['ten_phim'] ?>
                                                    </option>
                                            <?php } ?>
                                </select>

                                <br>
                                <label for="exampleInputEmail1">Rạp</label>
                                <br>
                                 <select name="id_rap" id="">
                                      <?php
                                            include_once '../model/pdo.php';
                                            $a = "select * from rap";
                                            $result1 = pdo_query($a);
                                            foreach ($result1 as $row) {
                                            ?>
                                                <option value="<?php echo $row['id_rap'] ?>">
                                                <?php echo $row['ten_rap'] ?>
                                                    </option>
                                            <?php } ?>
                                </select>



                            </div>

                        </div>

                        <div class="card-footer">
                            <input type="submit" class="btn btn-primary" value="Thêm suất chiếu" name="btn_insert"></input>
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