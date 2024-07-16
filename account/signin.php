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

        .ahover {
            color: #646e72;
            margin-left: 110px;
        }

        .ahover:hover {
            color: #e4d804;
        }
    </style>

    <!-- START -->
    <!-- breadcrumb-area -->
    <section class="breadcrumb-area breadcrumb-bg" data-background="img/bg/breadcrumb_bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h2 class="title">Đăng nhập</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Đăng nhập</li>
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
                                        <h5 class="text-white f-20 mt-3">Đăng nhập</h5>
                                    </div>
                                </div>

                            <div class="card-body p-4">
                                <div class="p-3">
                                    <form class="custom-form" action="index.php?act=login" method="POST">

                                        <div class="mb-3">
                                            <label class="form-label" for="username">Email</label>
                                            <span style="color: red;"><?php echo (isset($err['email']))? $err['email']: '' ?></span>    
                                            <input type="text" id="username" placeholder="Enter username" name="email">
                                        </div>
                                        <div class="form-password mb-3 auth-pass-inputgroup">
                                            <label class="form-label" for="userpassword">Password</label>
                                            <span style="color: red;"><?php echo (isset($err['pass']))? $err['pass']: '' ?></span>     
                                            <div class="position-relative">
                                                <input type="password" id="password-input" placeholder="Enter password" name="pass" maxlength="15">
                                                <button type="button" class="btn btn-link position-absolute h-100 end-0 top-0 shadow-none" id="password-addon">
                                                    <i class="mdi mdi-eye-outline f-16 text-muted"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <!-- <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="customControlInline">
                                            <label class="form-check-label" for="customControlInline">Remember me</label>
                                        </div> -->
                                        <div class="mt-3" style="padding-top: 10px;">
                                            <input class="btn rounded-3 w-100" type="submit" value="Đăng nhập" name="btn_signin"></input>

                                            <a class="ahover" href="index.php?act=quenmk">Quên mật khẩu</a>
                                        </div>

                                    </form>
                                    <p style="color: red; font-size: 14px; margin-top: 20px;">
                                        <?php
                                        if (isset($erro) && ($erro != "")) {
                                            echo $erro;
                                        }
                                        ?>
                                    </p>

                                    <!-- end form -->

                                </div>
                                <!-- end cardbody -->
                            </div>
                            <!-- end card -->

                        <div class="text-center" style="background-color: #000;">
                            <p>Bạn chưa có tài khoản ? <a href="index.php?act=register" style="color:#e4d804"> Đăng ký ngay </a> </p>
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->
                </div>
            </div>
        </div>
    </div>
   
    <!-- end -->

