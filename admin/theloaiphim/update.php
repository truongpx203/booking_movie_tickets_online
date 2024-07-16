

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
                        <h3 class="card-title">Edit movie genre<small></small></h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->

                    <form action="index.php?act=update_tl" method="post" enctype="multipart/form-data">
                        <div class="card-body">
                            <div class="form-group">
                                <input type="hidden" name="id_the_loai" value="<?php echo $result['id_the_loai']; ?>">
                                <label for="exampleInputEmail1">Thể loại</label>
                                <input type="text" name="ten_the_loai" class="form-control" placeholder="" value="<?php echo $result['ten_the_loai'] ?>">
            
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