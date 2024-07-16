
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Add Cinema<small></small></h3>
                    </div>
                    <form action="index.php?act=addrap" method="post" enctype="multipart/form-data">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Tên rạp</label>
                                <input type="text" name="ten_rap" class="form-control" placeholder="">
                                <label for="exampleInputEmail1">Ảnh rạp</label>
                                <input type="file" name="img" class="form-control" placeholder="">
                                <label for="exampleInputEmail1">Địa điểm</label>
                                <input type="text" name="dia_diem" class="form-control" placeholder="">

                            </div>

                        </div>

                        <div class="card-footer">
                            <input type="submit" class="btn btn-primary" value="Thêm rạp" name="btn_insert"></input>
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