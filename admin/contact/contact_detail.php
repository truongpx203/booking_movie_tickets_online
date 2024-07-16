
<section class="content">
        <div class="container-fluid">
        <a class="float-right" href="index.php?act=show_contact"><button class="btn btn-primary" type="button">Back</button></a>
        <?php 
extract($contact_detail);
?>
          <table class="table">
            <thead>
              <tr>
              <th scope="col">Mã Liên hệ</th>
            <th scope="col">Họ tên</th>
            <th scope="col">Chủ đề</th>
            <th scope="col">Nội dung</th>
            <!-- <th scope="col">Acction</th> -->
              </tr>
            </thead>
            <tbody>

            </tbody>
            <tr>
        <tr>
            <td><?php echo $contact_detail['id_lien_he']; ?></td>
            <td><?php echo $contact_detail['ho_ten']; ?></td>
            <td><?php echo $contact_detail['chu_de']; ?></td>
            <td><?php echo $contact_detail['noi_dung']; ?></td>
        </tr>

          </table>
          <?php 
          ?>
          <!-- /.row -->
        </div><!-- /.container-fluid -->
      </section>