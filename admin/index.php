
<?php
ob_start();
session_start();
if (isset($_SESSION['vai_tro']) && ($_SESSION['vai_tro'] == 0)) {
    include "../model/pdo.php";
    // include "../model/rap.php";
    include "../model/phim.php";
    include "../model/khuyen-mai.php";
    include "../model/doan.php";
    include "../model/khuyenmai.php";
    include "../model/bangghe.php";
    include "../model/suatchieu.php";
    include "../model/cinema.php";
    include "../model/cinemaroom.php";
    include "../model/zap.php";
    include "../model/chair.php";
    include "../model/movie.php";
    include "../model/theloaiphim.php";
    include "../model/loai.php";
    include "../model/ve.php";
    include "../model/sc.php";
    include "../model/ghe.php";
    include "../model/giave.php";
    include "../model/vnpay.php";
    include "../model/jap.php";
    include "../model/users.php";
    include "header.php";
    include "../model/contact.php";

    //controllers
    // if (isset($_SESSION['user'])) {
    if (isset($_GET['act'])) {
        $act = $_GET['act'];
        switch ($act) {
                //search
            case 'search':
                if (isset($_POST['keyw']) && ($_POST['keyw'] != "")) {
                    $keyw = $_POST['keyw'];
                    $result = show_Pro_Key($keyw);
                } else {
                    $keyw = "";
                    $result = show_Pro_Key($keyw);
                }
                include 'phim/phimShow.php';
                break;
            case 'logout_admin':
                if (isset($_SESSION['vai_tro'])) unset($_SESSION['vai_tro']); {
                    header('location: ../login_admin/login_admin.php');
                }
                break;

            case 'show_thong_ke':
                $list_statistical = show_Loai_phim();
                include 'home.php';
                break;
                // San pham 

            case 'showPro':
                $result = show_Pro();
                include 'phim/phimShow.php';
                break;
            case 'addPro':
                if (isset($_POST['btn_insert']) && ($_POST['btn_insert'])) {
                    $ten_phim = $_POST['ten_phim'];
                    $ngay_phat_hanh = $_POST['ngay_phat_hanh'];
                    $ngon_ngu = $_POST['ngon_ngu'];
                    $trailer = $_POST['trailer'];
                    $thoi_luong = $_POST['thoi_luong'];
                    $trang_thai = $_POST['trang_thai_phim'];
                    $mo_ta = $_POST['editor'];
                    $id_khuyen_mai = $_POST['id_khuyen_mai'];
                    $id_the_loai = $_POST['id_the_loai'];
                    $name_img = $_FILES['img_phim']['name'];
                    $tmp_img = $_FILES['img_phim']['tmp_name'];

                    move_uploaded_file($tmp_img, '../Assets/img/' . $name_img);
                    insert_Pro($ten_phim, $ngay_phat_hanh, $ngon_ngu, $trailer, $thoi_luong, $trang_thai, $mo_ta, $id_khuyen_mai, $name_img, $id_the_loai);
                    header('Location: index.php?act=showPro');
                }
                include 'phim/phimInsert.php';
                break;

            case 'update_query_Phim';
                if (isset($_GET['id_phim']) && ($_GET['id_phim']) > 0) {
                    $phim_id = $_GET['id_phim'];
                    $result = query_updatePro($phim_id);
                    // $result_rap=show_rap_update_phim();
                    $result_khuyenmai = show_khuyen_mai_update_phim();
                    $result_loai = show_loai_update_phim();
                }
                include 'phim/phimUpdate.php';
                break;
            case 'update_Phim':
                if (isset($_POST['btn_update']) && ($_POST['btn_update'])) {
                    $id_phim = $_POST['id_phim'];
                    $ten_phim = $_POST['ten_phim'];
                    $ngay_phat_hanh = $_POST['ngay_phat_hanh'];
                    $ngon_ngu = $_POST['ngon_ngu'];
                    $trailer = $_POST['trailer'];
                    $thoi_luong = $_POST['thoi_luong'];
                    $trang_thai = $_POST['trang_thai_phim'];
                    $mo_ta = $_POST['editor'];
                    // $id_rap = $_POST['id_rap'];
                    $id_khuyen_mai = $_POST['id_khuyen_mai'];
                    $id_the_loai = $_POST['id_the_loai'];

                    if (isset($_FILES['name_img']['name']) && !empty($_FILES['name_img']['name'])) {
                        $name_img = $_FILES['name_img']['name'];
                        $tmp_img = $_FILES['name_img']['tmp_name'];
                        move_uploaded_file($tmp_img, 'Assets/img/' . $name_img);
                    } else {
                        $sql_selected_img = "select anh from phim where id_phim = $id_phim";
                        $result_img = pdo_query_one($sql_selected_img);
                        $row_img = $result_img;
                        $name_img = $row_img['anh'];
                    }

                    update_Phim($id_phim, $ten_phim, $ngay_phat_hanh, $ngon_ngu, $trailer, $thoi_luong, $trang_thai, $mo_ta, $id_khuyen_mai, $name_img, $id_the_loai);
                }
                header('Location:index.php?act=showPro');
                break;
            case 'delete_Phim';
                if (isset($_GET['id_phim']) && ($_GET['id_phim']) > 0) {
                    $phim_id = $_GET['id_phim'];
                    delete_Phim($phim_id);
                }
                header('Location:index.php?act=showPro');
                break;

            case 'showfood':
                $result = show_food();
                include 'doan/show.php';
                break;

            case 'addfood':
                if (isset($_POST['btn_insert']) && ($_POST['btn_insert'])) {
                    $ten_do_an = $_POST['ten_do_an'];
                    $gia = $_POST['gia'];
                    $mo_ta = $_POST['editor'];
                    $so_luong = $_POST['so_luong'];
                    $name_img = $_FILES['img_food']['name'];
                    $tmp_img = $_FILES['img_food']['tmp_name'];

                    move_uploaded_file($tmp_img, '../Assets/img/' . $name_img);
                    insert_food($ten_do_an, $gia, $name_img, $mo_ta, $so_luong);
                    header('Location: index.php?act=showfood');
                }
                include 'doan/add.php';
                break;

            case 'update_food';
                if (isset($_GET['id_do_an']) && ($_GET['id_do_an']) > 0) {
                    $id_do_an = $_GET['id_do_an'];
                    $result = query_updatefood($id_do_an);
                }
                include 'doan/update.php';
                break;

            case 'updatefood':
                if (isset($_POST['btn_update']) && ($_POST['btn_update'])) {
                    $id_do_an = $_POST['id_do_an'];
                    $ten_do_an = $_POST['ten_do_an'];
                    $gia = $_POST['gia'];
                    $mo_ta = $_POST['editor'];
                    $so_luong = $_POST['so_luong'];
                    if (isset($_FILES['name_img']['name']) && !empty($_FILES['name_img']['name'])) {
                        $name_img = $_FILES['name_img']['name'];
                        $tmp_img = $_FILES['name_img']['tmp_name'];
                        move_uploaded_file($tmp_img, 'Assets/img/' . $name_img);
                    } else {
                        $sql_selected_img = "select img from do_an where id_do_an   = $id_do_an";
                        $result_img = pdo_query_one($sql_selected_img);
                        $row_img = $result_img;
                        $name_img = $row_img['img'];
                    }
                    update_food($id_do_an, $ten_do_an, $gia, $name_img, $mo_ta, $so_luong);
                }
                header('Location:index.php?act=showfood');
                break;

            case 'delete_food':
                if (isset($_GET['id_do_an']) && ($_GET['id_do_an']) > 0) {
                    $id_do_an = $_GET['id_do_an'];
                    delete_food($id_do_an);
                }
                header('Location:index.php?act=showfood');
                break;



            case 'showkm':
                $result = show_km();
                include 'khuyenmai/show.php';
                break;

            case 'addkm':
                if (isset($_POST['btn_insert']) && ($_POST['btn_insert'])) {
                    $ten_khuyen_mai = $_POST['ten_khuyen_mai'];
                    $name_img = $_FILES['img']['name'];
                    $tmp_img = $_FILES['img']['tmp_name'];
                    move_uploaded_file($tmp_img, '../Assets/img/' . $name_img);
                    $chiet_khau = $_POST['chiet_khau'];
                    $ngay_ap_dung = $_POST['ngay_ap_dung'];
                    insert_km($ten_khuyen_mai, $name_img, $chiet_khau, $ngay_ap_dung);
                    header('Location: index.php?act=showkm');
                }
                include 'khuyenmai/add.php';
                break;

            case 'update_km';
                if (isset($_GET['id_khuyen_mai']) && ($_GET['id_khuyen_mai']) > 0) {
                    $id_khuyen_mai  = $_GET['id_khuyen_mai'];
                    $result = query_updatekm($id_khuyen_mai);
                }
                include 'khuyenmai/update.php';
                break;


            case 'updatekm':
                if (isset($_POST['btn_update']) && ($_POST['btn_update'])) {
                    $id_khuyen_mai = $_POST['id_khuyen_mai'];
                    $ten_khuyen_mai = $_POST['ten_khuyen_mai'];
                    $chiet_khau = $_POST['chiet_khau'];
                    $ngay_ap_dung = $_POST['ngay_ap_dung'];
                    if (isset($_FILES['name_img']['name']) && !empty($_FILES['name_img']['name'])) {
                        $name_img = $_FILES['name_img']['name'];
                        $tmp_img = $_FILES['name_img']['tmp_name'];
                        move_uploaded_file($tmp_img, 'Assets/img/' . $name_img);
                    } else {
                        $sql_selected_img = "select img from khuyen_mai where id_khuyen_mai  = $id_khuyen_mai";
                        $result_img = pdo_query_one($sql_selected_img);
                        $row_img = $result_img;
                        $name_img = $row_img['img'];
                    }
                    update_km($id_khuyen_mai, $ten_khuyen_mai, $name_img, $chiet_khau, $ngay_ap_dung);
                }
                header('Location:index.php?act=showkm');
                break;

            case 'delete_km':
                if (isset($_GET['id_khuyen_mai']) && ($_GET['id_khuyen_mai']) > 0) {
                    $id_khuyen_mai = $_GET['id_khuyen_mai'];
                    delete_km($id_khuyen_mai);
                }
                header('Location:index.php?act=showkm');
                break;


            case 'showghe':
                $result = show_ghe();
                include 'bangghe/show.php';
                break;

            case 'addghe':
                if (isset($_POST['btn_insert']) && ($_POST['btn_insert'])) {
                    $ten_ghe = $_POST['ten_ghe'];
                    $trang_thai = $_POST['trang_thai'];
                    $gia = $_POST['gia'];
                    $loai_ghe = $_POST['loai_ghe'];
                    $id_phong_chieu    = $_POST['id_phong_chieu'];
                    insert_ghe($ten_ghe, $trang_thai, $gia, $loai_ghe, $id_phong_chieu);
                    header('Location: index.php?act=showghe');
                }
                include 'bangghe/add.php';
                break;

            case 'update_ghe';
                if (isset($_GET['id_ghe']) && ($_GET['id_ghe']) > 0) {
                    $id_ghe   = $_GET['id_ghe'];
                    $result = query_updateghe($id_ghe);
                }
                include 'bangghe/update.php';
                break;


            case 'updateghe':
                if (isset($_POST['btn_update']) && ($_POST['btn_update'])) {
                    $id_ghe = $_POST['id_ghe'];
                    $ten_ghe = $_POST['ten_ghe'];
                    $trang_thai = $_POST['trang_thai'];
                    $gia = $_POST['gia'];
                    $loai_ghe = $_POST['loai_ghe'];
                    update_ghe($id_ghe, $ten_ghe, $trang_thai, $gia, $loai_ghe);
                }
                header('Location:index.php?act=showghe');
                break;

            case 'delete_ghe':
                if (isset($_GET['id_ghe']) && ($_GET['id_ghe']) > 0) {
                    $id_ghe = $_GET['id_ghe'];
                    delete_ghe($id_ghe);
                }
                header('Location:index.php?act=showghe');
                break;



            case 'showsc':
                $result = show_sc();
                include 'suatchieu/show.php';
                break;

            case 'addsc':
                if (isset($_POST['btn_insert']) && ($_POST['btn_insert'])) {
                    $ngay_chieu = $_POST['ngay_chieu'];
                    $gio_chieu = $_POST['gio_chieu'];
                    $id_phim = $_POST['id_phim'];
                    $id_rap = $_POST['id_rap'];
                    insert_sc($ngay_chieu, $gio_chieu, $id_phim, $id_rap);
                    header('Location: index.php?act=showsc');
                }
                include 'suatchieu/add.php';
                break;

            case 'update_query_sc';
                if (isset($_GET['id_suat_chieu']) && ($_GET['id_suat_chieu']) > 0) {
                    $id_suat_chieu  = $_GET['id_suat_chieu'];
                    $result = query_updatesc($id_suat_chieu);
                    $result_phim = show_phim_update_sc();
                    $result_rap = show_rap_update_sc();
                }
                include 'suatchieu/update.php';
                break;

            case 'update_sc':
                if (isset($_POST['btn_update']) && ($_POST['btn_update'])) {
                    $id_suat_chieu = $_POST['id_suat_chieu'];
                    $ngay_chieu = $_POST['ngay_chieu'];
                    $gio_chieu = $_POST['gio_chieu'];
                    $id_phim = $_POST['id_phim'];
                    $id_rap = $_POST['id_rap'];

                    update_sc($id_suat_chieu, $ngay_chieu, $gio_chieu, $id_phim, $id_rap);
                }
                header('Location:index.php?act=showsc');
                break;

            case 'delete_sc';
                if (isset($_GET['id_suat_chieu']) && ($_GET['id_suat_chieu']) > 0) {
                    $id_suat_chieu = $_GET['id_suat_chieu'];
                    delete_sc($id_suat_chieu);
                }
                header('Location:index.php?act=showsc');
                break;



            case 'showrap':
                $result = show_rap();
                include 'rap/show.php';
                break;


            case 'addrap':
                if (isset($_POST['btn_insert']) && ($_POST['btn_insert'])) {
                    $ten_rap = $_POST['ten_rap'];
                    $dia_diem = $_POST['dia_diem'];
                    $name_img = $_FILES['img']['name'];
                    $tmp_img = $_FILES['img']['tmp_name'];
                    move_uploaded_file($tmp_img, '../Assets/img/' . $name_img);
                    insert_rap($ten_rap, $dia_diem, $name_img);
                    header('Location: index.php?act=showrap');
                }
                include 'rap/add.php';
                break;


            case 'update_rap';
                if (isset($_GET['id_rap']) && ($_GET['id_rap']) > 0) {
                    $id_rap = $_GET['id_rap'];
                    $result = query_updaterap($id_rap);
                }
                include 'rap/update.php';
                break;

            case 'updaterap':
                if (isset($_POST['btn_update']) && ($_POST['btn_update'])) {
                    $id_rap = $_POST['id_rap'];
                    $ten_rap = $_POST['ten_rap'];
                    $dia_diem = $_POST['dia_diem'];
                    if (isset($_FILES['name_img']['name']) && !empty($_FILES['name_img']['name'])) {
                        $name_img = $_FILES['name_img']['name'];
                        $tmp_img = $_FILES['name_img']['tmp_name'];
                        move_uploaded_file($tmp_img, 'Assets/img/' . $name_img);
                    } else {
                        $sql_selected_img = "select img from rap where id_rap = $id_rap";
                        $result_img = pdo_query_one($sql_selected_img);
                        $row_img = $result_img;
                        $name_img = $row_img['img'];
                    }
                    update_rap($id_rap, $ten_rap, $dia_diem, $name_img);
                }
                header('Location:index.php?act=showrap');
                break;

            case 'delete_rap':
                if (isset($_GET['id_rap']) && ($_GET['id_rap']) > 0) {
                    $id_rap = $_GET['id_rap'];
                    delete_rap($id_rap);
                }
                header('Location:index.php?act=showrap');
                break;

                // Phòng chiếu
            case 'showpc':
                $result = show_pc();
                include 'phongchieu/show.php';
                break;

            case 'addpc':
                if (isset($_POST['btn_insert']) && ($_POST['btn_insert'])) {
                    $ten_phong_chieu = $_POST['ten_phong_chieu'];
                    $loai_phong_chieu = $_POST['loai_phong_chieu'];
                    $id_rap = $_POST['id_rap'];
                    insert_pc($ten_phong_chieu, $loai_phong_chieu, $id_rap);
                    header('Location: index.php?act=showpc');
                }
                include 'phongchieu/add.php';
                break;


            case 'update_query_pc';
                if (isset($_GET['id_phong_chieu']) && ($_GET['id_phong_chieu']) > 0) {
                    $id_phong_chieu  = $_GET['id_phong_chieu'];
                    $result = query_updatepc($id_phong_chieu);
                    $result_rap = show_rap_update_pc();
                }
                include 'phongchieu/update.php';
                break;

            case 'update_pc':
                if (isset($_POST['btn_update']) && ($_POST['btn_update'])) {
                    $id_phong_chieu = $_POST['id_phong_chieu'];
                    $ten_phong_chieu = $_POST['ten_phong_chieu'];
                    $gia = $_POST['gia'];
                    $id_rap = $_POST['id_rap'];

                    update_pc($id_phong_chieu, $ten_phong_chieu, $id_rap);
                }
                header('Location:index.php?act=showpc');
                break;


            case 'delete_pc':
                if (isset($_GET['id_phong_chieu']) && ($_GET['id_phong_chieu']) > 0) {
                    $id_phong_chieu = $_GET['id_phong_chieu'];
                    delete_pc($id_phong_chieu);
                }
                header('Location:index.php?act=showpc');
                break;

                // Thê loại phim
            case 'showtlp':
                $result = show_Loai_phim();
                include 'theloaiphim/show.php';
                break;

            case 'addtlp':
                if (isset($_POST['btn_insert']) && ($_POST['btn_insert'])) {
                    $ten_the_loai = $_POST['ten_the_loai'];
                    insert_loai_phim($ten_the_loai);
                    header('Location: index.php?act=showtlp');
                }
                include 'theloaiphim/add.php';
                break;


            case 'update_loai';
                if (isset($_GET['id_the_loai']) && ($_GET['id_the_loai']) > 0) {
                    $id_the_loai = $_GET['id_the_loai'];
                    $result = query_updateloai($id_the_loai);
                }
                include 'theloaiphim/update.php';
                break;

            case 'update_tl':
                if (isset($_POST['btn_update']) && ($_POST['btn_update'])) {
                    $id_the_loai = $_POST['id_the_loai'];
                    $ten_the_loai = $_POST['ten_the_loai'];
                    update_loai($id_the_loai, $ten_the_loai);
                }
                header('Location:index.php?act=showtlp');
                break;

            case 'delete_tl':
                if (isset($_GET['id_the_loai']) && ($_GET['id_the_loai']) > 0) {
                    $id_the_loai = $_GET['id_the_loai'];
                    delete_loai($id_the_loai);
                }
                header('Location:index.php?act=showtlp');
                break;


                // VÉ
            case 'showve':
                $result =  show_user_buy();
                include 've/showuser.php';
                break;

                // case 'addve':
                //     if (isset($_POST['btn_insert']) && ($_POST['btn_insert'])) {
                //         $trang_thai = $_POST['trang_thai'];
                //         $id_suat_chieu = $_POST['id_suat_chieu'];
                //         $id_ghe = $_POST['id_ghe'];
                //         $id_gia_ve = $_POST['id_gia_ve'];
                //         $id_pay = $_POST['id_pay'];
                //         insert_ve($trang_thai,$id_suat_chieu,$id_ghe,$id_gia_ve,$id_pay);
                //         header('Location: index.php?act=showve');
                //     }
                //     include 've/add.php';
                //     break;


            case 'update_query_ve';
                if (isset($_GET['id_ve']) && ($_GET['id_ve']) > 0) {
                    $id_ve = $_GET['id_ve'];
                    $result = query_update_ve($id_ve);
                    // $result_rap=show_rap_update_phim();
                    $result_sc = show_suat_chieu_update_ve();
                    $result_ghe = show_ghe_update_ve();
                    $result_gia_ve = show_gia_ve_update_ve();
                    $result_pay = show_pay_update_ve();
                }
                include 've/update.php';
                break;

            case 'update_ve':
                if (isset($_POST['btn_update']) && ($_POST['btn_update'])) {
                    $id_ve = $_POST['id_ve'];
                    $trang_thai = $_POST['trang_thai'];
                    $id_suat_chieu = $_POST['id_suat_chieu'];
                    $id_ghe = $_POST['id_ghe'];
                    $id_gia_ve = $_POST['id_gia_ve'];
                    $id_pay = $_POST['id_pay'];

                    update_ve($id_ve, $trang_thai, $id_suat_chieu, $id_ghe, $id_gia_ve, $id_pay);
                }
                header('Location:index.php?act=showve');
                break;

            case 'delete_ve':
                if (isset($_GET['id_ve']) && ($_GET['id_ve']) > 0) {
                    $id_ve = $_GET['id_ve'];
                    delete_ve($id_ve);
                }
                header('Location:index.php?act=showve');
                break;


            case 'showuser':
                $result = show_ve();
                include 've/show.php';
                break;

                // case 'showuser':
                //     if (isset($_GET['id_ve']) && ($_GET['id_ve'] > 0)) {
                //         $result = show_ve($_GET['id_ve']);
                //         include 've/showuser.php';
                //     } else {
                //         include 've/show.php';
                //     }
                //     break;


                // user

                // case 'dstv':        
                //     $show_thongtin_user=loadall_users();
                //     include "account/thanhvien.php";
                //     break;
                // case 'log_out':
                //     session_unset();
                //     header('Location:../index.php');
                //     break;
            case 'show_list_users':
                $list_users = show_list_users();
                include 'nguoidung/show_taikhoan.php';
                break;
                // case 'edit_query_user':
                //     if (isset($_GET['id_user'])) {
                //         $user_id = $_GET['id_user'];
                //         $result = edit_query_user();
                //     }
                //     include 'nguoidung/update_taikhoan.php';
                //     break;

            case 'user_update';
                if (isset($_GET['id_user']) && ($_GET['id_user']) > 0) {
                    $id_user = $_GET['id_user'];
                    $result = query_update_user($id_user);
                }
                include 'nguoidung/update_taikhoan.php';
                break;

            case 'add_user':
                $err = [];
                $phone = "";
                $query_insert_user = all_user();
                extract($query_insert_user);
                if (isset($_POST['btn_insert']) && ($_POST['btn_insert'])) {
                    $ho_ten = $_POST['ho_ten'];
                    $so_dien_thoai = $_POST['so_dien_thoai'];
                    $email = $_POST['email'];
                    $pass = $_POST['pass'];
                    $r_pass = $_POST['r_pass'];
                    $dia_chi = $_POST['dia_chi'];
                    $justNums = preg_replace("/[^0-9]/", '', $so_dien_thoai);

                    if (empty($ho_ten)) {
                        $err['ho_ten'] = "*";
                    }
                    if (empty($dia_chi)) {
                        $err['dia_chi'] = "*";
                    }
                    if (empty($email)) {
                        $err['email'] = "*";
                    } else {
                        if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                            $err['email'] = " không đúng định dạng";
                        } else {
                            $isEmail = false;
                            foreach ($query_insert_user as $user) {
                                $email_db = $user['email'];
                                if ($email == $email_db) {
                                    $err['email'] = " Email đã trùng";
                                    $isEmail = true;
                                    break;
                                }
                            }
                        }
                    }
                    if (empty($so_dien_thoai)) {
                        $err['so_dien_thoai'] = "*";
                    } else {
                        if (strlen($justNums) == 10) {
                            $isPhoneNum = false;
                            foreach ($query_insert_user as $user) {
                                $phone = $user['so_dien_thoai'];
                                if ($so_dien_thoai == $phone) {
                                    $err['so_dien_thoai'] = " Số điện thoại đã trùng";
                                    $isPhoneNum = true;
                                    break;
                                }
                            }
                        } else {
                            $err['so_dien_thoai'] = " không đúng định dạng";
                        }
                    }
                    if (empty($pass)) {
                        $err['pass'] = "*";
                    }
                    if (empty($r_pass)) {
                        $err['r_pass'] = "*";
                    }
                    // if (empty($checkbox)) {
                    //     $err['checkbox'] = "*";
                    // }
                    if ($pass != $r_pass) {
                        $err['r_pass'] = "Password nhập lại không đúng";
                    }
                    if (empty($err)) {
                        insert_Role($pass);
                        $result = query_insert_role_User();
                        insert_User($email, $ho_ten, $dia_chi, $so_dien_thoai, $result['id_role']);
                        header('Location:http://localhost/duan1/movflx/admin/index.php?act=show_list_users');
                    }
                }
                include 'nguoidung/add_user.php';
                break;


            case 'update_User':
                if (isset($_POST['btn_update']) && ($_POST['btn_update'])) {
                    $id_user = $_POST['id_user'];
                    $email = $_POST['email'];
                    $full_name = $_POST['full_name'];
                    $pass = $_POST['pass'];
                    $dia_chi = $_POST['dia_chi'];
                    $phone = $_POST['phone'];
                    update_Users($id_user, $email, $pass, $full_name, $phone, $dia_chi);
                }
                header('Location:index.php?act=show_list_users');
                // include 'nguoidung/update_taikhoan.php';
                break;
            case 'delete_User';
                if (isset($_GET['id_user']) && ($_GET['id_user']) > 0) {
                    $user_id = $_GET['id_user'];
                    delete_User($user_id);
                }
                header('Location:index.php?act=show_list_users');
                break;
            case 'show_contact';
                $result = show_contact();
                include 'contact/show_contact.php';
                // header('Location:index.php?act=show_list_users');
                break;
            case 'delete_contact':
                if (isset($_GET['id_lien_he']) && ($_GET['id_lien_he']) > 0) {
                    $id_lien_he = $_GET['id_lien_he'];
                    delete_contact($id_lien_he);
                }
                header('Location:index.php?act=show_contact');
                break;
            case 'contact_detail':
                if (isset($_GET['id_lien_he']) && ($_GET['id_lien_he'] > 0)) {
                    $contact_detail = loadone_contact($_GET['id_lien_he']);
                    include 'contact/contact_detail.php';
                }

                break;
                //comment 

                // case 'show_list_cmt':
                //     $list_cmt = show_list_cmt();
                //     include 'binhluan/show_cmt.php';
                //     break;
                // case 'show_list_cmt_user':
                //     $list_cmt = show_list_cmt_user();
                //     include 'binhluan/show_cmt_user.php';
                //     break;

                // case 'delete_cmt';
                //     if (isset($_GET['id_cmt']) && ($_GET['id_cmt']) > 0) {
                //         $cmt_id = $_GET['id_cmt'];
                //         delete_cmt($cmt_id);
                //     }
                //     header('Location:index.php?act=show_list_cmt');
                //     break;

            default:
                include "home.php";
                break;
        }
    } else {
        include "home.php";
    }
    include "footer.php";
    // } else {
    //     header('Location:../index.php');
    // }
} else {
    header('location: ../login_admin/login_admin.php');
}
?>
    