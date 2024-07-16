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
                        <h3 class="card-title">Edit Movie screening<small></small></h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->

                    <form action="index.php?act=update_sc" method="post" enctype="multipart/form-data">
                        <div class="card-body">
                            <div class="form-group">
                                <input type="hidden" name="id_suat_chieu" value="<?php echo $result['id_suat_chieu']; ?>">
                                <label for="exampleInputEmail1">Ngày chiếu</label>
                                <input type="date" name="ngay_chieu" class="form-control" placeholder="" value="<?php echo $result['ngay_chieu'] ?>">
                                <label for="exampleInputEmail1">Giờ chiếu</label>
                                <input type="time" name="gio_chieu" class="form-control" placeholder="" value="<?php echo $result['gio_chieu'] ?>">
                                <label for="exampleInputEmail1">Mã phim</label>
                                <br>
                                <select name="id_phim">
                                    <?php
                                     foreach ($result_phim as $row_phim) {
                                        ?>
                                            <option value="<?php echo $row_phim['id_phim']; ?>" <?php if ($row_phim['id_phim'] == $result['id_phim'])   echo 'selected'; ?>>
                                                <?php echo $row_phim['ten_phim']; ?>
                                            </option>
                                        <?php
                                        }
                                    ?>
                                </select>
                                <br>
                                <select name="id_rap">
                                    <?php
                                     foreach ($result_rap as $row_rap) {
                                        ?>
                                            <option value="<?php echo $row_rap['id_rap']; ?>" <?php if ($row_rap['id_rap'] == $result['id_rap'])   echo 'selected'; ?>>
                                                <?php echo $row_rap['ten_rap']; ?>
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
