


<?php
if (is_array($result)) {
    extract($result);
}
?>


<section class="content">
        <div class="container-fluid">
          <a class="float-right" href="index.php?act=addtlp"><button class="btn btn-primary" type="button">Add movie genre</button></a>
          <table class="table">
            <thead>
              <tr>
              <th scope="col">Mã loại</th>
            <th scope="col">Tên thể loại</th>
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
            <td><?php echo $row['id_the_loai']; ?></td>
            <td><?php echo $row['ten_the_loai']; ?></td>
            <td>
            <a href="index.php?act=update_loai&id_the_loai=<?php echo $row['id_the_loai']; ?>"><button class="btn btn-warning">Edit</button></a>
            <a href="index.php?act=delete_tl&id_the_loai=<?php echo $row['id_the_loai']; ?>"><button onclick="return confirm('Ban muon xoa khong?')" class="btn btn-danger">Delete</button></a>
            </td>
          

        </tr>
    <?php
    }
    ?>
          </table>
          <!-- /.row -->
        </div><!-- /.container-fluid -->
      </section>

