


<?php
if (is_array($result)) {
    extract($result);
}
?>


<section class="content">
        <div class="container-fluid">
          <a class="float-right" href="index.php?act=addpc"><button class="btn btn-primary" type="button">Add Cinemaroom</button></a>
          <table class="table">
            <thead>
              <tr>
              <th scope="col">Mã phòng chiếu</th>
            <th scope="col">Tên phòng chiếu</th>
            <th scope="col">Loại phòng chiếu</th>
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
            <td><?php echo $row['id_phong_chieu']; ?></td>
            <td><?php echo $row['ten_phong_chieu']; ?></td>
            <td><?php echo $row['loai_phong_chieu']; ?></td>
            <td>
            <a href="index.php?act=update_query_pc&id_phong_chieu=<?php echo $row['id_phong_chieu']; ?>"><button class="btn btn-warning">Edit</button></a>
            <a href="index.php?act=delete_pc&id_phong_chieu=<?php echo $row['id_phong_chieu']; ?>"><button onclick="return confirm('Ban muon xoa khong?')" class="btn btn-danger">Delete</button></a>
            </td>
          

        </tr>
    <?php
    }
    ?>
          </table>
          <!-- /.row -->
        </div><!-- /.container-fluid -->
      </section>

