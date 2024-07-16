


<?php
if (is_array($result)) {
    extract($result);
}
?>


<section class="content">
        <div class="container-fluid">
          <a class="float-right" href="index.php?act=addkm"><button class="btn btn-primary" type="button">Add Promotion</button></a>
          <table class="table">
            <thead>
              <tr>
              <th scope="col">Mã khuyến mại</th>
            <th scope="col">Tên khuyến mại</th>
            <th scope="col">Ảnh khuyến mại</th>
            <th scope="col">chiết khấu</th>
            <th scope="col">ngày áp dụng</th>
            <th scope="col">Acction</th>
              </tr>
            </thead>
            <tbody>

            </tbody>
            <tr>
            <?php
    foreach ($result as  $row) {
    ?>
        <tr>
            <td><?php echo $row['id_khuyen_mai']; ?></td>
            <td><?php echo $row['ten_khuyen_mai']; ?></td>
            <td><img src="../Assets/img/<?php echo $row['img']; ?>" alt="" srcset="" width="200px" height="100px" style="object-fit: cover;"></td>
            <td><?php echo $row['chiet_khau']; ?></td>
            <td><?php echo $row['ngay_ap_dung']; ?></td>
            <td>
            <a href="index.php?act=update_km&id_khuyen_mai=<?php echo $row['id_khuyen_mai']; ?>"><button class="btn btn-warning">Edit</button></a>
            <a href="index.php?act=delete_km&id_khuyen_mai=<?php echo $row['id_khuyen_mai']; ?>"><button onclick="return confirm('Ban muon xoa khong?')" class="btn btn-danger">Delete</button></a>
            </td>
          

        </tr>
    <?php
    }
    ?>
          </table>
          <!-- /.row -->
        </div><!-- /.container-fluid -->
      </section>


 