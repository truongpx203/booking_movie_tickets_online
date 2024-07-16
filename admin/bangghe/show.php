


<?php
if (is_array($result)) {
    extract($result);
}
?>


<section class="content">
        <div class="container-fluid">
          <a class="float-right" href="index.php?act=addghe"><button class="btn btn-primary" type="button">Add chair table</button></a>
          <table class="table">
            <thead>
              <tr>
              <th scope="col">Mã ghế</th>
            <th scope="col">Tên hàng ghế</th>
            <th scope="col">Trạng thái</th>
            <th scope="col">Giá</th>
            <!-- <th scope="col">Loại ghế</th> -->
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
            <td><?php echo $row['id_ghe']; ?></td>
            <td><?php echo $row['ten_ghe']; ?></td>
            <td><?php echo $row['trang_thai']; ?></td>
            <td><?php echo $row['gia']; ?></td>
            <!-- <td><?php echo $row['loai_ghe']; ?></td> -->
            <td>
            <a href="index.php?act=update_ghe&id_ghe=<?php echo $row['id_ghe']; ?>"><button class="btn btn-warning">Edit</button></a>
            <a href="index.php?act=delete_ghe&id_ghe=<?php echo $row['id_ghe']; ?>"><button onclick="return confirm('Ban muon xoa khong?')" class="btn btn-danger">Delete</button></a>
            </td>
          

        </tr>
    <?php
    }
    ?>
          </table>
          <!-- /.row -->
        </div><!-- /.container-fluid -->
      </section>


 


