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
                        <h3 class="card-title">Edit thông tin rạp<small></small></h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->

                    <form action="index.php?act=updaterap" method="post" enctype="multipart/form-data">
                        <div class="card-body">
                            <div class="form-group">
                                <input type="hidden" name="id_rap" value="<?php echo $result['id_rap']; ?>">
                                <label for="exampleInputEmail1">Tên rạp</label>
                                <input type="text" name="ten_rap" class="form-control" placeholder="" value="<?php echo $result['ten_rap'] ?>">
                                <label for="exampleInputEmail1">Img rạp</label>
                                <input type="file" name="name_img" class="form-control"> <img style="width: 100px; height: 150px; margin: 20px 0;" src="../Assets/img/<?php echo $result['img'] ?>" alt="img"> 
                                <br>
                                <label for="exampleInputEmail1">Địa điểm</label>
                                <input type="text" name="dia_diem" class="form-control" placeholder="" value="<?php echo $result['dia_diem'] ?>">
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