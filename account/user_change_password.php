<style>
    body {
        background-image: url("Assets/img/bg-cinema-10.png");
    }

    .container_thongtin {
        margin-top: 200px;
        border: 2px solid #ccc;
        width: 550px;
        height: 570px;
        margin-left: 460px;
        background: #1c262f;
        margin-bottom: 100px;
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

    .input_chon {
        background: #f5f5f5;
        border: none;
        color: #fff;
        font-weight: 600;
        padding: 8px 20px;
        border-radius: 10px;
        font-size: 1em;
        letter-spacing: 1px;
        margin-left: 10px;
    }

    .input_chon:hover {
        background-color: #e4d804;
        transition: all 0.3s ease 0s;
        color: #000;
    }
</style>
<?php
if (isset($_SESSION['my_user'])) {
    $result = $_SESSION['my_user'];

?>
<form action="index.php?act=user_change_password" method="post">
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
                    <label for="">Mật khẩu cũ</label>
                    <span style="color: red;"><?php echo (isset($err['old_pass'])) ? $err['old_pass'] : '' ?></span>
                    <span style="color: red;">
                        <?php
                        if (isset($erro) && ($erro != "")) {
                            echo $erro;
                        }
                        ?></span>
                </li>
                <li>
                    <label for="">Mật khẩu mới</label>
                    <span style="color: red;"><?php echo (isset($err['new_pass_1'])) ? $err['new_pass_1'] : '' ?></span>
                </li>
                <li>
                    <label for="">Nhập lại mật khẩu mới</label>
                    <span style="color: red;"><?php echo (isset($err['new_pass_2'])) ? $err['new_pass_2'] : '' ?></span>
                </li>

            </ul>
            <ul>
                <li>
                <input type="hidden" id="username" placeholder="Enter email" name="id_user" value="<?php echo $result['id_user']; ?>">
                </li>
                <li>
                    <input type="text" name="old_pass" value="">
                </li>
                <li>
                    <input type="text" name="new_pass_1" value="">
                </li>
                <li>
                    <input type="text" name="new_pass_2" value="">
                </li>
            </ul>

        </div>
        <input class="input_chon" type="submit" name="btn_restore" value="Cập nhật">
    </div>

</form>


<?php
} else {
    header('location: index.php');
    
}

?>

