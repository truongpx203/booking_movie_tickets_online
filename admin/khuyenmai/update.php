

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
                        <h3 class="card-title">Edit Promotiom<small></small></h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->

                    <form action="index.php?act=updatekm" method="post" enctype="multipart/form-data">
                        <div class="card-body">
                            <div class="form-group">
                                <input type="hidden" name="id_khuyen_mai" value="<?php echo $result['id_khuyen_mai']; ?>">
                                <label for="exampleInputEmail1">Tên khuyến mãi</label>
                                <input type="text" name="ten_khuyen_mai" class="form-control" placeholder="" value="<?php echo $result['ten_khuyen_mai'] ?>">
                                <label for="exampleInputEmail1">Img khuyến mãi</label>
                                <input type="file" name="name_img" class="form-control"> <img style="width: 100px; height: 150px; margin: 20px 0;" src="../Assets/img/<?php echo $result['img'] ?>" alt="img"> 
                                <br>
                                <label for="exampleInputEmail1">Chiết khấu</label>
                                <input type="text" name="chiet_khau" class="form-control" placeholder="" value="<?php echo $result['chiet_khau'] ?>">
                                <br>
                                <label for="exampleInputEmail1">ngày áp dụng</label>
                                <input type="date" name="ngay_ap_dung" class="form-control" placeholder="" value="<?php echo $result['ngay_ap_dung'] ?>">
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



