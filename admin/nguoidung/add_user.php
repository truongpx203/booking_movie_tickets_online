
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Add User<small></small></h3>
                    </div>
                    <form action="index.php?act=add_user" method="post" enctype="multipart/form-data">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Họ tên</label>
                                <span style="color: red;"><?php echo (isset($err['ho_ten']))? $err['ho_ten']: '' ?></span>     
                                <input type="text" name="ho_ten" class="form-control" placeholder="">
                                <label for="exampleInputEmail1">Địa chỉ</label>
                                <span style="color: red;"><?php echo (isset($err['dia_chi']))? $err['dia_chi']: '' ?></span> 
                                <input type="text" name="dia_chi" class="form-control" placeholder="">
                                <label for="exampleInputEmail1">Email</label>
                                <span style="color: red;"><?php echo (isset($err['email']))? $err['email']: '' ?></span> 
                                <input type="text" name="email" class="form-control" placeholder="">
                                <label for="exampleInputEmail1">Số điện thoại</label>
                                <span style="color: red;"><?php echo (isset($err['so_dien_thoai']))? $err['so_dien_thoai']: '' ?></span>   
                                <input type="text" name="so_dien_thoai" class="form-control" placeholder="">
                                <label for="exampleInputEmail1">Mật khẩu</label>
                                <span style="color: red;"><?php echo (isset($err['pass']))? $err['pass']: '' ?></span>   
                                <input type="text" name="pass" class="form-control" placeholder="">
                                <label for="exampleInputEmail1">Nhập lại mật khẩu</label>
                                <span style="color: red;"><?php echo (isset($err['r_pass']))? $err['r_pass']: '' ?></span> 
                                <input type="text" name="r_pass" class="form-control" placeholder="">
                
                            </div>

                        </div>

                        <div class="card-footer">
                            <input type="submit" class="btn btn-primary" value="Add User" name="btn_insert"></input>
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