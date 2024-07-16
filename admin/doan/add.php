
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Add Food<small></small></h3>
                    </div>
                    <form action="index.php?act=addfood" method="post" enctype="multipart/form-data">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Tên đồ ăn</label>
                                <input type="text" name="ten_do_an" class="form-control" placeholder="">
                                <label for="exampleInputEmail1">Giá</label>
                                <input type="text" name="gia" class="form-control" placeholder="">

                                <label for="exampleInputEmail1">Ảnh đồ ăn</label>
                                <input type="file" name="img_food" class="form-control" placeholder="">

                                <label for="exampleInputEmail1">Mô tả</label>
                                <textarea class="form-control" name="editor" id="" cols="30" rows="5"></textarea>
                                <label for="exampleInputEmail1">Số lượng</label>
                                <input type="text" name="so_luong" class="form-control" placeholder="">


                            </div>

                        </div>

                        <div class="card-footer">
                            <input type="submit" class="btn btn-primary" value="Thêm đồ ăn" name="btn_insert"></input>
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