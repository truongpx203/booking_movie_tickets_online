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
                        <h3 class="card-title">Edit thông tin phòng chiếu<small></small></h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->

                    <form action="index.php?act=update_pc" method="post" enctype="multipart/form-data">
                        <div class="card-body">
                            <div class="form-group">
                                <input type="hidden" name="id_phong_chieu" value="<?php echo $result['id_phong_chieu']; ?>">
                                <label for="exampleInputEmail1">Tên phòng chiếu</label>
                                <input type="text" name="ten_phong_chieu" class="form-control" placeholder="" value="<?php echo $result['ten_phong_chieu'] ?>">
                                <label for="exampleInputEmail1">Loại phòng chiếu</label>
                                <input type="text" name="loai_phong_chieu" class="form-control" placeholder="" value="<?php echo $result['loai_phong_chieu'] ?>">                          
                                <label for="exampleInputEmail1">Mã rạp</label>
                                <br>
                                <select name="id_rap">
                                    <?php
                                     foreach ($result_rap as $row_rap) {
                                        ?>
                                            <option value="<?php echo $row_rap['id_rap']; ?>" <?php if ($row_rap['id_rap'] == $result['id_rap'])   echo 'selected'; ?>>
                                                <?php echo $row_rap['id_rap']; ?>
                                            </option>
                                        <?php
                                        }
                                    ?>
                                </select>
                                <br>
                                
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