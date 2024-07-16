

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
                        <h3 class="card-title">Edit chair table<small></small></h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->

                    <form action="index.php?act=updateghe" method="post" enctype="multipart/form-data">
                        <div class="card-body">
                            <div class="form-group">
                                <input type="hidden" name="id_ghe" value="<?php echo $result['id_ghe']; ?>">
                                <label for="exampleInputEmail1">Tên ghế</label>
                                <input type="text" name="ten_ghe" class="form-control" placeholder="" value="<?php echo $result['ten_ghe'] ?>">
                                <label for="exampleInputEmail1">Trạng thái</label>
                                <input type="text" name="trang_thai" class="form-control" placeholder="" value="<?php echo $result['trang_thai'] ?>">
                                <label for="exampleInputEmail1">Giá</label>
                                <input type="text" name="gia" class="form-control" placeholder="" value="<?php echo $result['gia'] ?>">
                                <br>
                                <label for="exampleInputEmail1">Loại ghế</label>
                                <input type="text" name="loai_ghe" class="form-control" placeholder="" value="<?php echo $result['loai_ghe'] ?>">
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

