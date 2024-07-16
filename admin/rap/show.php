


<?php
if (is_array($result)) {
    extract($result);
}
?>


<section class="content">
        <div class="container-fluid">
          <a class="float-right" href="index.php?act=addrap"><button class="btn btn-primary" type="button">Add Cinema</button></a>
          <table class="table">
            <thead>
              <tr>
              <th scope="col">Mã rạp</th>
            <th scope="col">Tên rạp</th>
            <th scope="col">Địa điểm</th>
            <th scope="col">Ảnh</th>
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
            <td><?php echo $row['id_rap']; ?></td>
            <td><?php echo $row['ten_rap']; ?></td>
            <td><?php echo $row['dia_diem']; ?></td>
            <td><img src="../Assets/img/<?php echo $row['img']; ?>" alt="" srcset="" width="100px" height="150px" style="object-fit: cover;"></td>
            <td>
            <a href="index.php?act=update_rap&id_rap=<?php echo $row['id_rap']; ?>"><button class="btn btn-warning">Edit</button></a>
            <a href="index.php?act=delete_rap&id_rap=<?php echo $row['id_rap']; ?>"><button onclick="return confirm('Ban muon xoa khong?')" class="btn btn-danger">Delete</button></a>
            </td>
          

        </tr>
    <?php
    }
    ?>
          </table>
          <!-- /.row -->
        </div><!-- /.container-fluid -->
      </section>

