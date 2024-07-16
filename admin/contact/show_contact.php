<?php
if (is_array($result)) {
    extract($result);
}
?>


<section class="content">
        <div class="container-fluid">
          <table class="table">
            <thead>
              <tr>
              <th scope="col">Mã Liên hệ</th>
            <th scope="col">Email</th>
            <th scope="col">Ngày gửi</th>
            <th scope="col">Acction</th>
              </tr>
            </thead>
            <tbody>

            </tbody>
            <tr>
            <?php
    foreach ($result as $row) {
    ?>
        <tr>
            <td><?php echo $row['id_lien_he']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['ngay_gui']; ?></td>
            <td>
            <a href="index.php?act=contact_detail&id_lien_he=<?php echo $row['id_lien_he']; ?>"><button class="btn btn-warning">Chi tiết</button></a>
            <a href="index.php?act=delete_contact&id_lien_he=<?php echo $row['id_lien_he']; ?>"><button onclick="return confirm('Ban muon xoa khong?')" class="btn btn-danger">Delete</button></a>
            </td>
          
        </tr>
    <?php
    }
    ?>
          </table>
          <!-- /.row -->
        </div><!-- /.container-fluid -->
      </section>