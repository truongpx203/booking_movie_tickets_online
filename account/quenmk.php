<style>
    .card-body {
        background-color: black !important;
        border-color: #e4d804 !important;
    }

    .btn-link {
        background-color: #e4d804;
        border: 1px solid #e4d804;
        border-radius: 0 4px 4px 0;
        color: black;
    }

    .btn {
        border-color: #e4d804 !important;
    }

    input {
        width: 100%;
        border: 1px solid #1f1e24;
        background: #1f1e24;
        border-radius: 4px;
        color: #bcbcbc;
        box-shadow: 0px 1px 7px 0px rgba(0, 0, 0, 0.46);
        font-weight: 500;
        padding: 14px 25px;
        border-color: #e4d804;

    }
</style>

<!-- START -->
<!-- breadcrumb-area -->
<?php
if (!(isset($_SESSION['my_user']))) {
?>
    <section class="breadcrumb-area breadcrumb-bg" data-background="img/bg/breadcrumb_bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h2 class="title">Quên mật khẩu</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Quên mật khẩu</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb-area-end -->
    <div class="wrap">
        <div class="account-pages" style="padding: 50px 0;">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card overflow-hidden">

                            <div class="auth-head position-relative">
                                <div class="bg-overlay-2"></div>
                                <div class="text-primary position-relative text-center p-5">
                                    <h5 class="text-white f-20 mt-3">Quên mật khẩu</h5>
                                </div>
                            </div>

                            <div class="card-body p-4">
                                <div class="p-3">
                                    <form class="custom-form" action="index.php?act=quenmk" method="post">
                                        <div class="mb-3">
                                            <label class="form-label" for="username">Bạn vui lòng nhập email vào form dưới đây, chúng tôi sẽ gửi mật khẩu về email bạn.</label>
                                            <input type="text" id="username" placeholder="Email*" name="email">
                                        </div>
                                        <span style="color: red;"><?php echo (isset($err['email']))? $err['email']: '' ?></span>
                                        <p style="color: red; font-size: 14px;">
                                        <?php
                                        if (isset($erro) && ($erro != "")) {
                                            echo $erro;
                                        }
                                        ?>
                                    </p>
                                        <div class="mt-3">
                                            <input class="btn rounded-3 w-100" type="submit" value="Lấy lại mật khẩu" name="btn_verify"></input>
                                            <a href="index.php?act=login"><button type="button" class="btn rounded-3" style="margin: 0 20px">Hủy bỏ</button></a>
                                        </div>
                                        <!-- <div>
                                    <a href="index.php?act=login">huy</a>
                                </div> -->
                                    </form>
                                   
                                    <!-- end form -->
                                </div>
                            </div>
                            <!-- end cardbody -->
                        </div>
                        <!-- end card -->

                        <!-- <div class="mt-5 text-center">
                        <p>Bạn chưa có tài khoản ? <a href="index.php?act=register"  style="color:#e4d804"> Đăng ký ngay </a> </p>
                    </div> -->
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
        </div>
    </div>
<?php
} else {
    header('Location:index.php');
}
?>