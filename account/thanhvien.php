<style>
    body {
        background-image: url("Assets/img/bg-cinema-10.png");
    }

    .container_thongtin {
        margin-top: 200px;
        border: 2px solid #ccc;
        width: 550px;
        height: 600px;
        margin-left: 460px;
        background: #1c262f;
    }

    .container_thongtin input {
        background: #37424b;
    }

    .images {
        display: flex;
        padding: 10px;
        border-bottom: 1px solid #ccc;
    }

    .thong_tin_user {
        display: flex;
        padding: 30px 0;
    }

    .thong_tin_user li {
        padding: 10px 20px;
    }

    .thong_tin_user label {
        padding-top: 10px;
        color: #bfc9d2;
        font-weight: 700;
    }

    .thong_tin_user input {
        width: 350px;
        height: 40px;
        border: 1px solid #bfc9d2;
        color: #70808e;
        font-weight: 600;
    }

    .giao_dich {
        width: 1100px;
        border: 1px solid #40a933;
        border-radius: 5px;
        padding: 40px 0;
        margin-left: 200px;
        background-color: #39454f;
        color: #fff;
        margin-top: 20px;
        margin-bottom: 80px;
    }

    .giao_dich ul {
        display: flex;
        justify-content: center;

    }

    .giao_dich li {
        padding: 0 25px;
        border: 1px solid #ccc;
    }

    .giao_dich h3 {
        color: #fff;
        padding-left: 25px;
        padding-bottom: 15px;
    }

    .thong_tin_user button {
        border: 1px solid #bfc9d2;
        font-weight: 600;
        height: 40px;
        margin: 0 10px;
        background: #6b7379;
        color: #fff;
    }

    .thong_tin_user button:hover {
        color: #000;
        background-color: #e4d804;
        transition: all 0.4s ease;
        -moz-transition: all 0.4s ease;
        -o-transition: all 0.4s ease;
        -ms-transition: all 0.4s ease;
    }
</style>
<?php
if ((isset($_SESSION['my_user']) && count($_SESSION['my_user']) != 0)) {
    $user = $_SESSION['my_user'];
?>
    <div class="container_thongtin">
        <div class="images">
            <img src="Assets/img/avatar.png" alt="" style="width: 150px; height: 200px; border-radius: 5px;">
            <div style="padding: 0 30px;">
                <p>Vui lòng đăng ảnh chân dung, thấy rõ mặt có kích thước: ngang 150 pixel và dọc 200 pixel (dung lượng dưới 1MB)</p>
                <p style="color: #e4d804;"></p>
            </div>
        </div>
        <div class="thong_tin_user">
            <ul>
                <li>
                    <label for="">Email</label>
                </li>
                <li>
                    <label for="">Số điện thoại</label>
                </li>
                <li>
                    <label for="">Tên(*)</label>
                </li>

                <li>
                    <label for="">Địa chỉ</label>
                </li>

            </ul>

            <ul>
                <li>
                    <input type="text" placeholder="" value="<?php echo $user['email']; ?>" disabled>
                </li>
                <li>
                    <input style="width: 234px;" type="text" placeholder="" value="<?php echo $user['phone']; ?>" disabled>
                    <a href="index.php?act=user_change_password"><button>Đổi mật khẩu</button></a>
                </li>
                <li>
                    <input type="text" placeholder="" value="<?php echo $user['ho_ten']; ?>" disabled>
                </li>
                <li>
                    <input type="text" placeholder="" value="<?php echo $user['dia_chi']; ?>" disabled>
                </li>

            </ul>

        </div>


    </div>
    <br>
    <div class="giao_dich">
        <h3>TRANSACTIONS</h3>
        <ul>
            <li style="min-width: 68px; max-width: 68px;">
                <p>No</p>
            </li>
            <li style="min-width: 98px; max-width: 98px;">
                <p>Tên vé</p>
            </li>
            <li style="min-width: 158px; max-width: 158px;">
                <p>Tên Phim</p>
            </li>
            <li style="min-width: 108px; max-width: 108px;">
                <p>Tên Rạp</p>
            </li>
            <li style="min-width: 170px; max-width: 170px;">
                <p>Tên phòng chiếu</p>
            </li>
            <li style="min-width: 104px; max-width: 104px;">
                <p>Mã ghế</p>
            </li>
            <li style="min-width: 132px; max-width: 132px;">
                <p>Ngày chiếu</p>
            </li>
            <li style="min-width: 118px; max-width: 118px;">
                <p>Giờ chiếu</p>
            </li>
            <li style="min-width: 144px; max-width: 144px;">
                <p>Trạng thái vé</p>
            </li>
        </ul>

        <?php
        foreach ($result as $value) {
        ?>
            <ul>
                <li style="min-width: 68px; max-width: 68px;">
                    <p><?php echo $value['id_ve']; ?></p>
                </li>
                <li style="min-width: 98px; max-width: 98px;">
                    <p><?php echo $value['ten_ve']; ?></p>
                </li>
                <li style="min-width: 158px; max-width: 158px;">
                    <p><?php echo $value['ten_phim']; ?></p>
                </li>
                <li style="min-width: 108px; max-width: 108px;">
                    <p><?php echo $value['ten_rap']; ?></p>
                </li>
                <li style="min-width: 170px; max-width: 170px;">
                    <p><?php echo $value['ten_phong_chieu']; ?></p>
                </li>
                <li style="min-width: 104px; max-width: 104px;">
                    <p><?php echo $value['ten_ghe']; ?></p>
                </li>
                <li style="min-width: 132px; max-width: 132px;">
                    <p><?php $date = strtotime($value['ngay_chieu']);
                        $formatted_date = date('d-m-Y', $date);
                        echo $formatted_date; ?></p>
                </li>
                <li style="min-width: 118px; max-width: 118px;">
                    <p><?php echo $value['gio_chieu']; ?></p>
                </li>
                <li style="min-width: 144px; max-width: 144px;">
                    <p><?php echo $value['trang_thai_ve']; ?></p>
                </li>

            </ul>

        <?php
        }
        ?>
    </div>

<?php
} else {
    header('Location:index.php');
}

?>