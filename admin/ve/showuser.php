<?php
if (is_array($result)) {
    extract($result);
}
?>


<section class="content">
        <div class="container-fluid">
          <!-- <a class="float-right" href="index.php?act=showve"></a> -->
          <table class="table">
            <thead>
              <tr>
              <th scope="col">Id user</th>
            <th scope="col">Name</th>
            <th scope="col">Số lượng vé</th>
            <th scope="col">Số lượng phim đã xem</th>
            <th scope="col"></th>
            <!-- <th scope="col">Đồ ăn</th> -->
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
            <td><?php echo $row['id_user']; ?></td>
            <td><?php echo $row['ho_ten']; ?></td>
            <td><?php echo $row['so_luong_ve']; ?></td>
            <td><?php echo $row['so_phim_da_xem']; ?></td>

            <td>
            <a href="index.php?act=showuser&id_ve=<?php echo $row['id_user']; ?>"><button class="btn btn-warning">Chi tiết</button></a>
            </td>
          

        </tr>
    <?php
    }
    ?>
          </table>
          <!-- /.row -->
        </div><!-- /.container-fluid -->
      </section>

