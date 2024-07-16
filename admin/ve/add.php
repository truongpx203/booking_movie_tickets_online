<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Add movie ticket<small></small></h3>
                    </div>
                    <form action="index.php?act=addve" method="post" enctype="multipart/form-data">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Trạng thái</label>
                                <input type="text" name="trang_thai" class="form-control" placeholder="">
                                <br>
                                <label for="exampleInputEmail1">Mã suất chiếu</label>
                                <br>
                                <select name="id_suat_chieu" id="">
                                      <?php
                                            include_once '../model/pdo.php';
                                            $a = "select * from suat_chieu";
                                            $result1 = pdo_query($a);
                                            foreach ($result1 as $row) {
                                            ?>
                                                <option value="<?php echo $row['id_suat_chieu'] ?>">
                                                <?php echo $row['id_phim'] ?>
                                                    </option>
                                            <?php } ?>
                                </select>
                                <br>

                                <br>
                                <label for="exampleInputEmail1">Mã ghế</label>
                                <br>
                                <select name="id_ghe" id="">
                                      <?php
                                            include_once '../model/pdo.php';
                                            $a = "select * from ghe";
                                            $result1 = pdo_query($a);
                                            foreach ($result1 as $row) {
                                            ?>
                                                <option value="<?php echo $row['id_ghe'] ?>">
                                                <?php echo $row['ten_ghe'] ?>
                                                    </option>
                                            <?php } ?>
                                </select>
                                <br>

                                <br>
                                <label for="exampleInputEmail1">Mã giá vé</label>
                                <br>
                                <select name="id_gia_ve" id="">
                                      <?php
                                            include_once '../model/pdo.php';
                                            $a = "select * from gia_ve";
                                            $result1 = pdo_query($a);
                                            foreach ($result1 as $row) {
                                            ?>
                                                <option value="<?php echo $row['id_gia_ve'] ?>">
                                                <?php echo $row['gia_ve'] ?>
                                                    </option>
                                            <?php } ?>
                                </select>
                                <br>

                                <br>
                                <label for="exampleInputEmail1">Mã Pay</label>
                                <br>
                                <select name="id_pay" id="">
                                      <?php
                                            include_once '../model/pdo.php';
                                            $a = "select * from vnpay";
                                            $result1 = pdo_query($a);
                                            foreach ($result1 as $row) {
                                            ?>
                                                <option value="<?php echo $row['id_pay'] ?>">
                                                <?php echo $row['id_pay'] ?>
                                                    </option>
                                            <?php } ?>
                                </select>
                                <br>


                            </div>

                        </div>

                        <div class="card-footer">
                            <input type="submit" class="btn btn-primary" value="Thêm vé" name="btn_insert"></input>
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