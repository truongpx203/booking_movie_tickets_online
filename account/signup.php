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
<!-- breadcrumb-area -->
<?php
if (!(isset($_SESSION['my_user']))) {
?>
    <section class="breadcrumb-area breadcrumb-bg" data-background="img/bg/breadcrumb_bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h2 class="title">Đăng ký</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Đăng ký</li>
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
                                    <h5 class="text-white f-20 mt-3">Đăng ký tài khoản</h5>
                                </div>
                            </div>

                            <div class="card-body p-4">
                                <div class="p-3">
                                    <form class="custom-form" action="index.php?act=register" method="post">
                                        <div class="mb-3">
                                            <label class="form-label" for="username">Họ và tên</label>
                                            <span style="color: red;"><?php echo (isset($err['ho_ten']))? $err['ho_ten']: '' ?></span>     
                                            <input type="text" id="username" name="ho_ten" placeholder="Họ và tên">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="username">Địa chỉ</label>
                                            <span style="color: red;"><?php echo (isset($err['dia_chi']))? $err['dia_chi']: '' ?></span>  
                                            <input type="text" id="username" name="dia_chi" placeholder="Địa chỉ">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="username">Email</label>
                                            <span style="color: red;"><?php echo (isset($err['email']))? $err['email']: '' ?></span> 
                                            <input type="text" id="username" name="email" placeholder="Email">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="username">Điện thoại</label>
                                            <span style="color: red;"><?php echo (isset($err['so_dien_thoai']))? $err['so_dien_thoai']: '' ?></span>   
                                            <input type="text" id="username" name="so_dien_thoai" placeholder="Số điện thoại">
                                        </div>
                                        <div class="form-password mb-3 auth-pass-inputgroup">
                                            <label class="form-label" for="userpassword">Password</label>
                                            <span style="color: red;"><?php echo (isset($err['pass']))? $err['pass']: '' ?></span>   
                                            <div class="position-relative">
                                                <input type="password" id="password-input" name="pass" placeholder="Enter password">
                                                <button type="button" class="btn btn-link position-absolute h-100 end-0 top-0 shadow-none" id="password-addon">
                                                    <i class="mdi mdi-eye-outline f-16 text-muted"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="form-password mb-3 auth-pass-inputgroup">
                                            <label class="form-label" for="userpassword">Nhập lại pass</label>
                                            <span style="color: red;"><?php echo (isset($err['r_pass']))? $err['r_pass']: '' ?></span> 
                                            <div class="position-relative">
                                                <input type="password" id="password-input" name="r_pass" placeholder="Enter password">        
                                                <button type="button" class="btn btn-link position-absolute h-100 end-0 top-0 shadow-none" id="password-addon">
                                                    <i class="mdi mdi-eye-outline f-16 text-muted"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="customControlInline" name="checkbox">
                                            <label class="form-check-label" for="customControlInline">Tôi đồng ý tất cả điều khoản.</label>
                                        </div>
                                        <div class="mt-3">
                                            <input class="btn rounded-3 w-100" type="submit" name="btn_register" value="Đăng ký"></input>
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
    header('Location:index.php');
}

?>