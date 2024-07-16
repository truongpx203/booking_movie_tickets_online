

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Add Promotion<small></small></h3>
                    </div>
                    <form action="index.php?act=addkm" method="post" enctype="multipart/form-data">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Tên khuyến mãi</label>
                                <input type="text" name="ten_khuyen_mai" class="form-control" placeholder="">
                                <label for="exampleInputEmail1">Ảnh khuyến mãi</label>
                                <input type="file" name="img" class="form-control" placeholder="">
                                <label for="exampleInputEmail1">chiết khấu</label>
                                <input type="text" name="chiet_khau" class="form-control" placeholder="">
                              
                                <label for="exampleInputEmail1">Ngày áp dụng</label>
                                <input type="date" name="ngay_ap_dung" class="form-control" placeholder="">


                            </div>

                        </div>

                        <div class="card-footer">
                            <input type="submit" class="btn btn-primary" value="Thêm khuyến mãi" name="btn_insert"></input>
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