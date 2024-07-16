
<?php
if (is_array($result)) {
    extract($result);
}
?>

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- jquery validation -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Edit thông tin tài khoản<small></small></h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->

                    <form action="index.php?act=update_User" method="post" enctype="multipart/form-data">
                        <div class="card-body">
                            <div class="form-group">
                                <input type="hidden" name="id_user" value="<?php echo $result['id_user']; ?>">
                                <label for="exampleInputEmail1">Email</label>
                                <input type="text" name="email" class="form-control" placeholder="" value="<?php echo $result['email'] ?>">
                                <label for="exampleInputEmail1">Họ tên</label>
                                <input type="text" name="full_name" class="form-control" placeholder="" value="<?php echo $result['ho_ten'] ?>">
                               
                                <label for="exampleInputEmail1">Số điện thoại</label>
                                <input type="text" name="phone" class="form-control" placeholder="" value="<?php echo $result['so_dien_thoai'] ?>">
                                
                         
                                <label for="exampleInputEmail1">Mật khẩu</label>
                                <input type="text" name="pass" class="form-control" placeholder="" value="<?php echo $result['mat_khau'] ?>">
                                <label for="exampleInputEmail1">Địa chỉ</label>
                                <input type="text" name="dia_chi" class="form-control" placeholder="" value="<?php echo $result['dia_chi'] ?>">
            
                                
                            </div>

                        </div>
                        <div class="card-footer">
                            <input type="submit" class="btn btn-primary" value="Submit" name="btn_update"></input>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-6">
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
