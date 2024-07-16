


<?php
if (is_array($result)) {
    extract($result);
}
?>


<section class="content">
        <div class="container-fluid">
          <a class="float-right" href="index.php?act=addfood"><button class="btn btn-primary" type="button">Add Food</button></a>
          <table class="table">
            <thead>
              <tr>
              <th scope="col">Mã đồ ăn</th>
            <th scope="col">Tên đồ ăn</th>
            <th scope="col">Giá</th>
            <th scope="col">Ảnh đồ ăn</th>
            <th scope="col">Mô tả</th>
            <!-- <th scope="col">Số lượng</th> -->
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
            <td><?php echo $row['id_do_an']; ?></td>
            <td><?php echo $row['ten_do_an']; ?></td>
            <td><?php echo $row['gia']; ?></td>
            <td><img src="../Assets/img/<?php echo $row['img']; ?>" alt="" srcset="" width="100px" height="150px" style="object-fit: cover;"></td>
            <td><?php echo $row['mo_ta']; ?></td>
            <!-- <td><?php echo $row['so_luong']; ?></td> -->
            <td>
            <a href="index.php?act=update_food&id_do_an=<?php echo $row['id_do_an']; ?>"><button class="btn btn-warning">Edit</button></a>
            <a href="index.php?act=delete_food&id_do_an=<?php echo $row['id_do_an']; ?>"><button onclick="return confirm('Ban muon xoa khong?')" class="btn btn-danger">Delete</button></a>
            </td>
          

        </tr>
    <?php
    }
    ?>
          </table>
          <!-- /.row -->
        </div><!-- /.container-fluid -->
      </section>

