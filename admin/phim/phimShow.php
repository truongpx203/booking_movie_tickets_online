<?php
if (is_array($result)) {
    extract($result);
}
?>


<section class="content">
        <div class="container-fluid">
          <a class="float-right" href="index.php?act=addPro"><button class="btn btn-primary" type="button">Add New</button></a>
          <table class="table">
            <thead>
              <tr>
              <th scope="col">Mã phim</th>
            <th scope="col">Tên phim</th>
            <th scope="col">Ảnh phim</th>
            <th scope="col">Ngôn ngữ</th>
            <th scope="col">Thời lượng</th>
            <th scope="col">Ngày công chiếu</th>
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
            <td><?php echo $row['id_phim']; ?></td>
            <td><?php echo $row['ten_phim']; ?></td>
            <td><img src="../Assets/img/<?php echo $row['anh']; ?>" alt="" srcset="" width="100px" height="150px" style="object-fit: cover;"></td>
            <td><?php echo $row['ngon_ngu']; ?></td>
            <td><?php echo $row['thoi_luong']; ?></td>
            <td><?php echo $row['ngay_phat_hanh']; ?></td>
            <td>
            <a href="index.php?act=update_query_Phim&id_phim=<?php echo $row['id_phim']; ?>"><button class="btn btn-warning">Edit</button></a>
            <a href="index.php?act=delete_Phim&id_phim=<?php echo $row['id_phim']; ?>"><button onclick="return confirm('Ban muon xoa khong?')" class="btn btn-danger">Delete</button></a>
            </td>
          

        </tr>
    <?php
    }
    ?>
          </table>
          <!-- /.row -->
        </div><!-- /.container-fluid -->
      </section>