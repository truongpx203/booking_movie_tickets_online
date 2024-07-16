


<?php
if (is_array($result)) {
    extract($result);
}
?>


<section class="content">
        <div class="container-fluid">
          <a class="float-right" href="index.php?act=addsc"><button class="btn btn-primary" type="button">Add Movie screening</button></a>
          <table class="table">
            <thead>
              <tr>
              <th scope="col">Mã suất chiếu</th>
            <th scope="col">Ngày chiếu</th>
            <th scope="col">Giờ chiếu</th>
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
            <td><?php echo $row['id_suat_chieu']; ?></td>
            <td><?php echo $row['ngay_chieu']; ?></td>
            <td><?php echo $row['gio_chieu']; ?></td>
            <td>
            <a href="index.php?act=update_query_sc&id_suat_chieu=<?php echo $row['id_suat_chieu']; ?>"><button class="btn btn-warning">Edit</button></a>
            <a href="index.php?act=delete_sc&id_suat_chieu=<?php echo $row['id_suat_chieu']; ?>"><button onclick="return confirm('Ban muon xoa khong?')" class="btn btn-danger">Delete</button></a>
            </td>
          

        </tr>
    <?php
    }
    ?>
          </table>
          <!-- /.row -->
        </div><!-- /.container-fluid -->
      </section>


 