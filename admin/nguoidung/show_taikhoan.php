



<section class="content">
    <div class="container-fluid">
        <a class="float-right" href="index.php?act=add_user"><button class="btn btn-primary" type="button">Add user</button></a>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Mã user</th>
                    <th scope="col">Tên người dung</th>
                    <th scope="col">Email</th>
                    <th scope="col">Mật khẩu</th>
                    <th scope="col">Địa chỉ</th>
                    <th scope="col">Acction</th>
                </tr>
            </thead>
            <tbody>

            </tbody>
            <tr>
                <?php
                extract($list_users);
                foreach ($list_users as $row) {
                ?>
            <tr>
                <td><?php echo $row['id_user']; ?></td>
                <td><?php echo $row['ho_ten']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['mat_khau']; ?></td>
                <td><?php echo $row['dia_chi']; ?></td>
                <td>
                    <a href="index.php?act=user_update&id_user=<?php echo $row['id_user']; ?>"><button class="btn btn-warning">Edit</button></a>
                    <a href="index.php?act=delete_User&id_user=<?php echo $row['id_user']; ?>"><button onclick="return confirm('Ban muon xoa khong?')" class="btn btn-danger">Delete</button></a>
                </td>
            </tr>
        <?php
                }
        ?>
        </table>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</section>