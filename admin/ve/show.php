<?php
if (is_array($result)) {
    extract($result);
}
?>


<section class="content">
        <div class="container-fluid">
          <a class="float-right" href="index.php?act=showve"><button class="btn btn-primary" type="button">Back</button></a>
          <table class="table">
            <thead>
              <tr>
              <th scope="col">Mã vé</th>
              <!-- <th scope="col">Mã user</th> -->
            <th scope="col">Trạng thái</th>
            <th scope="col">Ngày chiếu</th>
            <th scope="col">Tên ghế</th>
            <th scope="col">Giá vé</th>
            <th scope="col">Acction</th>
              </tr>
            </thead>
            <tbody>

            </tbody>
            <tr>
            <?php
             extract($result);
    foreach ($result as  $row) {
    ?>
        <tr>
            <td><?php echo $row['id_ve']; ?></td>
            <td><?php echo $row['trang_thai']; ?></td>
            <td><?php echo $row['ngay_chieu']; ?></td>
            <td><?php echo $row['ten_ghe']; ?></td>
            <td><?php echo $row['gia_ve']; ?></td>

            <td>
            <a href="index.php?act=update_query_ve&id_ve=<?php echo $row['id_ve']; ?>"><button class="btn btn-warning">Edit</button></a>
            <a href="index.php?act=delete_ve&id_ve=<?php echo $row['id_ve']; ?>"><button onclick="return confirm('Ban muon xoa khong?')" class="btn btn-danger">Delete</button></a>
            </td>
          

        </tr>
    <?php
    }
    ?>
          </table>
          <!-- /.row -->
        </div><!-- /.container-fluid -->
      </section>


 