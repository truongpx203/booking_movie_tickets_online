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
                        <h3 class="card-title">Edit Movie ticket<small></small></h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->

                    <form action="index.php?act=update_ve" method="post" enctype="multipart/form-data">
                        <div class="card-body">
                            <div class="form-group">
                                <input type="hidden" name="id_ve" value="<?php echo $result['id_ve']; ?>">
                                <label for="exampleInputEmail1">Trạng thái</label>
                                <input type="text" name="trang_thai" class="form-control" placeholder="" value="<?php echo $result['trang_thai'] ?>">
                                <label for="exampleInputEmail1">Mã suất chiếu</label>
                                <br>
                                <select name="id_suat_chieu">
                                    <?php
                                     foreach ($result_sc as $row_sc) {
                                        ?>
                                            <option value="<?php echo $row_sc['id_suat_chieu']; ?>" <?php if ($row_sc['id_suat_chieu'] == $result['id_suat_chieu'])   echo 'selected'; ?>>
                                                <?php echo $row_sc['id_suat_chieu']; ?>
                                            </option>
                                        <?php
                                        }
                                    ?>
                                </select>
                                        <br>
                                <label for="exampleInputEmail1">Mã ghế</label>
                                <br>
                                <select name="id_ghe">
                                    <?php
                                     foreach ($result_ghe as $row_ghe) {
                                        ?>
                                            <option value="<?php echo $row_ghe['id_ghe']; ?>" <?php if ($row_ghe['id_ghe'] == $result['id_ghe'])   echo 'selected'; ?>>
                                                <?php echo $row_ghe['ten_ghe']; ?>
                                            </option>
                                        <?php
                                        }
                                    ?>
                                </select>
                                <br>
                                <label for="exampleInputEmail1">Mã giá vé</label>
                                <br>
                                <select name="id_gia_ve">
                                    <?php
                                     foreach ($result_gia_ve as $row_gia_ve) {
                                        ?>
                                            <option value="<?php echo $row_gia_ve['id_gia_ve']; ?>" <?php if ($row_gia_ve['id_gia_ve'] == $result['id_gia_ve'])   echo 'selected'; ?>>
                                                <?php echo $row_gia_ve['gia_ve']; ?>
                                            </option>
                                        <?php
                                        }
                                    ?>
                                </select>
                                <br>
                                <br>
                                <label for="exampleInputEmail1">Mã VNpay</label>
                                <br>
                                <select name="id_pay">
                                    <?php
                                     foreach ($result_pay as $row_pay) {
                                        ?>
                                            <option value="<?php echo $row_pay['id_pay']; ?>" <?php if ($row_pay['id_pay'] == $result['id_pay'])   echo 'selected'; ?>>
                                                <?php echo $row_pay['id_pay']; ?>
                                            </option>
                                        <?php
                                        }
                                    ?>
                                </select>
                                <br>
                                
                               
                                
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
