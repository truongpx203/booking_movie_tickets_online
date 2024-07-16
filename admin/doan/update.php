

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
                        <h3 class="card-title">Edit thông tin đồ ăn<small></small></h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->

                    <form action="index.php?act=updatefood" method="post" enctype="multipart/form-data">
                        <div class="card-body">
                            <div class="form-group">
                                <input type="hidden" name="id_do_an" value="<?php echo $result['id_do_an']; ?>">
                                <label for="exampleInputEmail1">Tên đồ ăn</label>
                                <input type="text" name="ten_do_an" class="form-control" placeholder="" value="<?php echo $result['ten_do_an'] ?>">
                                <label for="exampleInputEmail1">Giá đồ ăn</label>
                                <input type="text" name="gia" class="form-control" placeholder="" value="<?php echo $result['gia'] ?>">
                                <br>
                                <label for="exampleInputEmail1">Images</label>
                                <input type="file" name="name_img" class="form-control"> <img style="width: 100px; height: 150px; margin: 20px 0;" src="../Assets/img/<?php echo $result['img'] ?>" alt="img"> 
                                
                                <br>
                                <label for="exampleInputEmail1">Mô tả</label>
                                <textarea class="form-control" name="editor" id="" cols="30" rows="5"><?php echo $result['mo_ta']; ?></textarea>
                                <br>
                                <label for="exampleInputEmail1">Số lượng</label>
                                <input type="text" name="so_luong" class="form-control" placeholder="" value="<?php echo $result['so_luong'] ?>">
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