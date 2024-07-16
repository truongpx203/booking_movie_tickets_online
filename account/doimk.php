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
<?php
if (isset($_SESSION['change_password']) && !(isset($_SESSION['my_user']))) {
    $result = $_SESSION['change_password'];
?>
<!-- breadcrumb-area -->
<section class="breadcrumb-area breadcrumb-bg" data-background="img/bg/breadcrumb_bg.jpg">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb-content">
                    <h2 class="title">Đổi mật khẩu</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <!-- <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Đăng ký</li> -->
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
                                <h5 class="text-white f-20 mt-3">Đổi mật khẩu</h5>
                            </div>
                        </div>

                        <div class="card-body p-4">
                            <div class="p-3">
                                <form class="custom-form" action="index.php?act=doimk" method="post">
                                    <div class="mb-3">
                                        <input type="hidden" id="username" placeholder="Enter email" name="id_user" value="<?php echo $result['id_user']; ?>">
                                    </div>
                                    <div class="form-password mb-3 auth-pass-inputgroup">
                                        <label class="form-label" for="userpassword">Mật khẩu cũ</label>
                                        <span style="color: red;"><?php echo (isset($err['old_pass']))? $err['old_pass']: '' ?></span> 
                                        <span style="color: red;" ><?php
                                        if (isset($erro) && ($erro != "")) {
                                            echo $erro;
                                        }
                                        ?></span> 
                                        <div class="position-relative">
                                            <input type="password" id="password-input" placeholder="Enter password" name="old_pass">
                                            <button type="button" class="btn btn-link position-absolute h-100 end-0 top-0 shadow-none" id="password-addon">
                                                <i class="mdi mdi-eye-outline f-16 text-muted"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="form-password mb-3 auth-pass-inputgroup">
                                        <label class="form-label" for="userpassword">Mật khẩu mới</label>
                                        <span style="color: red;"><?php echo (isset($err['new_pass_1']))? $err['new_pass_1']: '' ?></span> 
                                        <div class="position-relative">
                                            <input type="password" id="password-input" placeholder="Enter password" name="new_pass_1">
                                            <button type="button" class="btn btn-link position-absolute h-100 end-0 top-0 shadow-none" id="password-addon">
                                                <i class="mdi mdi-eye-outline f-16 text-muted"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="form-password mb-3 auth-pass-inputgroup">
                                        <label class="form-label" for="userpassword">Nhập lại mật khẩu mới</label>
                                        <span style="color: red;"><?php echo (isset($err['new_pass_2']))? $err['new_pass_2']: '' ?></span> 
                                        <div class="position-relative">
                                            <input type="password" id="password-input" placeholder="Enter password" name="new_pass_2">
                                            <button type="button" class="btn btn-link position-absolute h-100 end-0 top-0 shadow-none" id="password-addon">
                                                <i class="mdi mdi-eye-outline f-16 text-muted"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="mt-3">
                                        <input class="btn rounded-3 w-100" type="submit" name="btn_restore" value="Đổi mật khẩu"></input>
                                        <button class="btn rounded-3" type="submit" style="margin: 0 20px">Hủy bỏ</button>
                                    </div>

                                </form>
                                <!-- end form -->
                            </div>
                        </div>
                        <!-- end cardbody -->
                    </div>
                    <!-- end card -->

                    <div class="mt-5 text-center">
                        <p>Bạn đã có tài khoản ?<a href="index.php?act=login" style="color:#e4d804"> Đăng nhập ngay </a> </p>
                    </div>
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
    </div>
    <!-- end -->

</div>
<?php
} else {
    header('Location:index.php?act=login');
}
?>