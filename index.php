<?php
ob_start();
session_start();
include "model/pdo.php";
include "model/phim.php";
include "view/header.php";
include "model/users.php";
include "model/dat-ve.php";
include "model/do-an.php";
include "model/ghe.php";
include "model/suat-chieu.php";
include "model/rap.php";
include "model/thanh_vien.php";
include "model/cinema.php";
include "model/khuyenmai.php";
include "model/contact.php";

$show_top_phim = show_top_phim();

$show_rap = show_he_thong_rap();
$show_promotion = show_khuyen_mai();

$phim_dangchieu = show_phim_dangchieu();
$phim_sapchieu = show_phim_sapchieu();
$phim_vebantruoc = show_phim_vebantruoc();

$show_the_loai_phim = show_the_loai_phim();
$show_movie = show_movie();

// show phim theo thể loại
$show_phim_bomtan = show_phim_bomtan();
$show_phim_hoathinh = show_phim_hoathinh();
$show_phim_tamly = show_phim_tamly();
$show_phim_kinhdi = show_phim_kinhdi();

$show_do_an = show_do_an();
$list_ghe = list_ghe();

$all_user = all_user();

$khuyen_mai = khuyen_mai();
if (!isset($_SESSION['my_show']) || count($_SESSION['my_show']) === 0) {
    $_SESSION['my_show'] = []; // Khởi tạo mảng nếu chưa có
}
if (!isset($_SESSION['my_ticket']) || count($_SESSION['my_ticket']) === 0) {
    $_SESSION['my_ticket'] = []; // Khởi tạo mảng nếu chưa có
}
if (!isset($_SESSION['my_seat']) || count($_SESSION['my_seat']) === 0) {
    $_SESSION['my_seat'] = []; // Khởi tạo mảng nếu chưa có
}
if (!isset($_SESSION['my_bonus']) || count($_SESSION['my_bonus']) === 0) {
    $_SESSION['my_bonus'] = []; // Khởi tạo mảng nếu chưa có
}
if (!isset($_SESSION['my_info']) || count($_SESSION['my_info']) === 0) {
    $_SESSION['my_info'] = []; // Khởi tạo mảng nếu chưa có
}
if (!isset($_SESSION['my_total'])) {
    $_SESSION['my_total'] = []; // Khởi tạo mảng nếu chưa có
};

if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        case 'search_Items':
            if (isset($_POST['keyw']) && ($_POST['keyw'] != "")) {
                $keyw = $_POST['keyw'];
                $result = show_Pro_Key($keyw);
            } else {
                $keyw = "";
                $result = show_Pro_Key($keyw);
            }
            include 'view/search_phim.php';
            break;
        case 'movie-item':
            include 'view/movie-item.php';
            break;
        case 'movie_show_schedule':
            include 'view/lich-chieu/movie-show-schedule.php';
            break;
        case 'movie_show_theater':
            include 'view/lich-chieu/movie-show-theater.php';
            break;
        case 'theaters':
            include 'view/he-thong-rap/list-theaters.php';
            break;
        case 'theater_details':
            if (isset($_GET['id_rap']) && ($_GET['id_rap'] > 0)) {
                $theater_detail = loadone_rap($_GET['id_rap']) ;
                include 'view/he-thong-rap/theater_details.php';
            } else {
                include 'view/he-thong-rap/list-theaters.php';
            }
            break;
        case 'events':
            include 'view/khuyen-mai-va-su-kien/sale-events.php';
            break;
        case 'events_details':
            if (isset($_GET['id_khuyen_mai']) && ($_GET['id_khuyen_mai'] > 0)) {
                $events_detail = loadone_khuyen_mai($_GET['id_khuyen_mai']);
                include 'view/khuyen-mai-va-su-kien/events_details.php';
            } else {
                include 'view/khuyen-mai-va-su-kien/sale-events.php';
            }
            break;
        case 'movie_details':
            if (isset($_GET['id_phim'])) {
                $id_phim = $_GET['id_phim'];
                $movie_detail = loadone_phim($id_phim);
                extract($movie_detail);
                $ngay_suat_chieu = query_ngay($id_phim);
            }
            $ngay = isset($_GET['date']) ? $_GET['date'] : date('Y-m-d');
            $rap_va_gio_chieu = query_rap_gio_chieu($id_phim, $ngay);
            include 'view/movie-details.php';
            break;
            // qua trinh dat ve

        case 'chon_rap_ca_chieu':
            if (isset($_POST['btn_rap_ca_chieu']) && ($_POST['btn_rap_ca_chieu'])) {
                $id_phim = $_POST['id_phim'];
                $id_suat_chieu = $_POST['id_suat_chieu'];
                $id_rap = $_POST['id_rap'];
                $add_show = [$id_phim, $id_suat_chieu, $id_rap];
                $_SESSION['my_show'] = [$add_show];
                header('Location:index.php?act=dat_ve');
            }
            include 'view/movie-details.php';
            break;
        case 'dat_ve':
            $my_show = $_SESSION['my_show'];
            $id_rap = $my_show[0][2];
            $show_ve = show_ve_phong_chieu($id_rap);
            if (isset($_POST['btn_dat_ve']) && ($_POST['btn_dat_ve'])) {
                $my_ticket = [];
                foreach ($show_ve as $ve_item) {
                    $id_gia_ve = $ve_item['id_gia_ve'];
                    $id_phong_chieu = $ve_item['id_phong_chieu'];
                    $ten_ve = $_POST['ten_' . $id_gia_ve];
                    $gia_ve = $_POST['gia_' . $id_gia_ve];
                    $id_phong_chieu_select = $_POST[$id_phong_chieu];
                    if (isset($id_phong_chieu_select) && $id_phong_chieu_select == $id_phong_chieu) {
                        $my_ticket[] = [
                            'id_phong_chieu' => $id_phong_chieu,
                            'id_gia_ve' => $id_gia_ve,
                            'ten_gia_ve' => $ten_ve,
                            'gia_ve' => $gia_ve,
                        ];
                    }
                    // if ($so_luong > 0) {
                    //     $my_ticket[] = [
                    //         'id_gia_ve' => $id_gia_ve,
                    //         'ten_gia_ve' => $ten_ve,
                    //         'gia_ve' => $gia_ve,
                    //         'so_luong' => $so_luong,
                    //     ];
                    // }
                }
                $_SESSION['my_ticket'] = $my_ticket;

                header('Location:index.php?act=dat_ghe');
            }
            $id_phim = $_SESSION['my_show'][0][0];
            $id_suat_chieu = $_SESSION['my_show'][0][1];
            $id_rap = $_SESSION['my_show'][0][2];
            $phim_da_chon = query_suat_chieu($id_phim, $id_suat_chieu, $id_rap);

            include 'view/datghe_bongnc/web/chon_ve.php';

            break;
        case 'dat_ghe':
            $id_phong_chieu = $_SESSION['my_ticket'][0]['id_phong_chieu'];
            $show_hang_ghe_A = show_hang_ghe_A($id_phong_chieu);
            $show_hang_ghe_B = show_hang_ghe_B($id_phong_chieu);
            $show_hang_ghe_C = show_hang_ghe_C($id_phong_chieu);
            $show_hang_ghe_D = show_hang_ghe_D($id_phong_chieu);
            $show_hang_ghe_E = show_hang_ghe_E($id_phong_chieu);
            $show_hang_ghe_F = show_hang_ghe_F($id_phong_chieu);
            $show_hang_ghe_G = show_hang_ghe_G($id_phong_chieu);
            $show_hang_ghe_H = show_hang_ghe_H($id_phong_chieu);
            $show_hang_ghe_I = show_hang_ghe_I($id_phong_chieu);
            $show_hang_ghe_J = show_hang_ghe_J($id_phong_chieu);

            if (isset($_POST['btn_dat_ghe']) && ($_POST['btn_dat_ghe'])) {
                $selected_seats = [];
                foreach ($show_hang_ghe_A as $ghe_A) {
                    $ten_ghe_A = $ghe_A['ten_ghe'];
                    $gia_ghe_A = $ghe_A['gia'];
                    $id_ghe_A = $ghe_A['id_ghe'];
                    $trang_thai_ghe = $ghe_A['trang_thai'];
                    if (isset($_POST[$ten_ghe_A]) && $_POST[$ten_ghe_A] === $ten_ghe_A && $trang_thai_ghe == 0) {
                        $selected_seats[] = [
                            'ten_ghe' => $ten_ghe_A,
                            'gia' => $gia_ghe_A,
                            'id_ghe' => $id_ghe_A
                        ];
                    }
                }
                foreach ($show_hang_ghe_B as $ghe_B) {
                    $ten_ghe_B = $ghe_B['ten_ghe'];
                    $gia_ghe_B = $ghe_B['gia'];
                    $id_ghe_B = $ghe_B['id_ghe'];
                    $trang_thai_ghe = $ghe_B['trang_thai'];
                    if (isset($_POST[$ten_ghe_B]) && $_POST[$ten_ghe_B] === $ten_ghe_B && $trang_thai_ghe == 0) {
                        $selected_seats[] = [
                            'ten_ghe' => $ten_ghe_B,
                            'gia' => $gia_ghe_B,
                            'id_ghe' => $id_ghe_B
                        ];
                    }
                }
                foreach ($show_hang_ghe_C as $ghe_C) {
                    $ten_ghe_C = $ghe_C['ten_ghe'];
                    $gia_ghe_C = $ghe_C['gia'];
                    $id_ghe_C = $ghe_C['id_ghe'];
                    $trang_thai_ghe = $ghe_C['trang_thai'];
                    if (isset($_POST[$ten_ghe_C]) && $_POST[$ten_ghe_C] === $ten_ghe_C && $trang_thai_ghe == 0) {
                        $selected_seats[] = [
                            'ten_ghe' => $ten_ghe_C,
                            'gia' => $gia_ghe_C,
                            'id_ghe' => $id_ghe_C
                        ];
                    }
                }
                foreach ($show_hang_ghe_D as $ghe_D) {
                    $ten_ghe_D = $ghe_D['ten_ghe'];
                    $gia_ghe_D = $ghe_D['gia'];
                    $id_ghe_D = $ghe_D['id_ghe'];
                    $trang_thai_ghe = $ghe_D['trang_thai'];
                    if (isset($_POST[$ten_ghe_D]) && $_POST[$ten_ghe_D] === $ten_ghe_D && $trang_thai_ghe == 0) {
                        $selected_seats[] = [
                            'ten_ghe' => $ten_ghe_D,
                            'gia' => $gia_ghe_D,
                            'id_ghe' => $id_ghe_D
                        ];
                    }
                }
                foreach ($show_hang_ghe_E as $ghe_E) {
                    $ten_ghe_E = $ghe_E['ten_ghe'];
                    $gia_ghe_E = $ghe_E['gia'];
                    $id_ghe_E = $ghe_E['id_ghe'];
                    $trang_thai_ghe = $ghe_E['trang_thai'];
                    if (isset($_POST[$ten_ghe_E]) && $_POST[$ten_ghe_E] === $ten_ghe_E && $trang_thai_ghe == 0) {
                        $selected_seats[] = [
                            'ten_ghe' => $ten_ghe_E,
                            'gia' => $gia_ghe_E,
                            'id_ghe' => $id_ghe_E
                        ];
                    }
                }
                foreach ($show_hang_ghe_F as $ghe_F) {
                    $ten_ghe_F = $ghe_F['ten_ghe'];
                    $gia_ghe_F = $ghe_F['gia'];
                    $id_ghe_F = $ghe_F['id_ghe'];
                    $trang_thai_ghe = $ghe_F['trang_thai'];
                    if (isset($_POST[$ten_ghe_F]) && $_POST[$ten_ghe_F] === $ten_ghe_F && $trang_thai_ghe == 0) {
                        $selected_seats[] = [
                            'ten_ghe' => $ten_ghe_F,
                            'gia' => $gia_ghe_F,
                            'id_ghe' => $id_ghe_F
                        ];
                    }
                }
                foreach ($show_hang_ghe_G as $ghe_G) {
                    $ten_ghe_G = $ghe_G['ten_ghe'];
                    $gia_ghe_G = $ghe_G['gia'];
                    $id_ghe_G = $ghe_G['id_ghe'];
                    $trang_thai_ghe = $ghe_G['trang_thai'];
                    if (isset($_POST[$ten_ghe_G]) && $_POST[$ten_ghe_G] === $ten_ghe_G && $trang_thai_ghe == 0) {
                        $selected_seats[] = [
                            'ten_ghe' => $ten_ghe_G,
                            'gia' => $gia_ghe_G,
                            'id_ghe' => $id_ghe_G
                        ];
                    }
                }
                foreach ($show_hang_ghe_H as $ghe_H) {
                    $ten_ghe_H = $ghe_H['ten_ghe'];
                    $gia_ghe_H = $ghe_H['gia'];
                    $id_ghe_H = $ghe_H['id_ghe'];
                    $trang_thai_ghe = $ghe_H['trang_thai'];
                    if (isset($_POST[$ten_ghe_H]) && $_POST[$ten_ghe_H] === $ten_ghe_H && $trang_thai_ghe == 0) {
                        $selected_seats[] = [
                            'ten_ghe' => $ten_ghe_H,
                            'gia' => $gia_ghe_H,
                            'id_ghe' => $id_ghe_H
                        ];
                    }
                }
                foreach ($show_hang_ghe_I as $ghe_I) {
                    $ten_ghe_I = $ghe_I['ten_ghe'];
                    $gia_ghe_I = $ghe_I['gia'];
                    $id_ghe_I = $ghe_I['id_ghe'];
                    $trang_thai_ghe = $ghe_I['trang_thai'];
                    if (isset($_POST[$ten_ghe_I]) && $_POST[$ten_ghe_I] === $ten_ghe_I && $trang_thai_ghe == 0) {
                        $selected_seats[] = [
                            'ten_ghe' => $ten_ghe_I,
                            'gia' => $gia_ghe_I,
                            'id_ghe' => $id_ghe_I
                        ];
                    }
                }
                foreach ($show_hang_ghe_J as $ghe_J) {
                    $ten_ghe_J = $ghe_J['ten_ghe'];
                    $gia_ghe_J = $ghe_J['gia'];
                    $id_ghe_J = $ghe_J['id_ghe'];
                    $trang_thai_ghe = $ghe_J['trang_thai'];
                    if (isset($_POST[$ten_ghe_J]) && $_POST[$ten_ghe_J] === $ten_ghe_J && $trang_thai_ghe == 0) {
                        $selected_seats[] = [
                            'ten_ghe' => $ten_ghe_J,
                            'gia' => $gia_ghe_J,
                            'id_ghe' => $id_ghe_J
                        ];
                    }
                }
                $_SESSION['my_seat'] = $selected_seats;
                header('Location:index.php?act=dat_bong_nuoc');
            }
            include 'view/datghe_bongnc/web/datghe.php';
            break;

        case 'dat_bong_nuoc':
            if (isset($_POST['btn_bong_nuoc']) && ($_POST['btn_bong_nuoc'])) {
                $my_bong_nuoc = [];
                foreach ($show_do_an as $doan_item) {
                    $id_do_an = $doan_item['id_do_an'];
                    $so_luong = $_POST['so_luong_' . $id_do_an];
                    $ten_do_an = $_POST['ten_' . $id_do_an];
                    $gia_do_an = $_POST['gia_' . $id_do_an];
                    if ($so_luong > 0) {
                        $my_bong_nuoc[] = [
                            'id_do_an' => $id_do_an,
                            'ten_do_an' => $ten_do_an,
                            'gia_do_an' => $gia_do_an,
                            'so_luong' => $so_luong,
                        ];
                    }
                }
                $_SESSION['my_bonus'] = $my_bong_nuoc;
                header('Location:index.php?act=view_cart');
            }
            include 'view/datghe_bongnc/web/dat_bong_nuoc.php';
            break;
        case 'huy_dat_ve':
            $list_sessions = ['my_show', 'my_ticket', 'my_seat', 'my_bonus', 'my_info', 'my_total'];
            foreach ($list_sessions as $session) {
                unset($_SESSION[$session]);
            }
            header('Location:index.php');
            break;
        case 'view_cart':
            $tong_tien = 0;
            $tong_tien_bonus = 0;
            // $tong_tien_ghe = 0;
            $tong_tien_ve = 0;
            foreach ($_SESSION['my_ticket'] as $type => $ticket) {
                $tong_tien_ve =  $ticket['gia_ve'];
            }
            foreach ($_SESSION['my_bonus'] as $type => $bonus) {
                $tong_tien_bonus += $bonus['so_luong'] * $bonus['gia_do_an'];
            }
            // foreach ($_SESSION['my_seat'] as $type => $seat) {
            //     $tong_tien_ghe = $tong_tien_ghe + $seat['gia'];
            // }
            $tong_tien = $tong_tien_ve + $tong_tien_bonus;
            foreach ($khuyen_mai as $km) {
                $date = date('Y-m-d');
                $ngay_ap_dung = $km['ngay_ap_dung'];
                if ($date == $ngay_ap_dung) {
                    $var = $km['chiet_khau'];
                    $giam_gia = ($tong_tien_ve + $tong_tien_bonus) * $var / 100;
                    $tong_tien -= $giam_gia;
                    break;
                }
            }
            $_SESSION['my_total'] = [$tong_tien];
            $id_phim = $_SESSION['my_show'][0][0];
            $id_suat_chieu = $_SESSION['my_show'][0][1];
            $id_rap = $_SESSION['my_show'][0][2];
            $phim_da_chon = query_suat_chieu($id_phim, $id_suat_chieu, $id_rap);
            include 'view/datghe_bongnc/web/giohang.php';
            break;
        case 'thanh_toan':

            if (isset($_POST['redirect'])) {
                $name = $_POST['name'];
                $phone = $_POST['phone'];
                $email = $_POST['email'];
                $address = $_POST['address'];
                $_SESSION['my_info'] = [
                    'name' => $name,
                    'phone' => $phone,
                    'email' => $email,
                    'address' => $address
                ];
            }
            if (isset($_POST['redirect'])) {
                $vnp_Url = "https://sandbox.vnpayment.vn/paymentv2/vpcpay.html";

                $vnp_Returnurl = "http://localhost/duan1/movflx/index.php?act=xac_minh_thanh_toan";
                $vnp_TmnCode = "KA1BV3N8";
                $vnp_HashSecret = "12GUKMUAGMQR4QW57D26MKG56RCYN9G8";
                $vnp_TxnRef = rand(00, 9999);
                $vnp_OrderInfo = "Thanh toán vé xem phim";
                $vnp_OrderType = "billpayment";
                $vnp_Amount = $_SESSION['my_total'][0] * 100;
                $vnp_Locale = 'vn';
                $vnp_BankCode = 'NCB';
                $vnp_IpAddr = $_SERVER['REMOTE_ADDR'];

                $inputData = array(
                    "vnp_Version" => "2.1.0",
                    "vnp_TmnCode" => $vnp_TmnCode,
                    "vnp_Amount" => $vnp_Amount,
                    "vnp_Command" => "pay",
                    "vnp_CreateDate" => date('YmdHis'),
                    "vnp_CurrCode" => "VND",
                    "vnp_IpAddr" => $vnp_IpAddr,
                    "vnp_Locale" => $vnp_Locale,
                    "vnp_OrderInfo" => $vnp_OrderInfo,
                    "vnp_OrderType" => $vnp_OrderType,
                    "vnp_ReturnUrl" => $vnp_Returnurl,
                    "vnp_TxnRef" => $vnp_TxnRef,

                );

                if (isset($vnp_BankCode) && $vnp_BankCode != "") {
                    $inputData['vnp_BankCode'] = $vnp_BankCode;
                }

                ksort($inputData);
                $query = "";
                $i = 0;
                $hashdata = "";
                foreach ($inputData as $key => $value) {
                    if ($i == 1) {
                        $hashdata .= '&' . urlencode($key) . "=" . urlencode($value);
                    } else {
                        $hashdata .= urlencode($key) . "=" . urlencode($value);
                        $i = 1;
                    }
                    $query .= urlencode($key) . "=" . urlencode($value) . '&';
                }

                $vnp_Url = $vnp_Url . "?" . $query;
                if (isset($vnp_HashSecret)) {
                    $vnpSecureHash =   hash_hmac('sha512', $hashdata, $vnp_HashSecret); //  
                    $vnp_Url .= 'vnp_SecureHash=' . $vnpSecureHash;
                }
                $returnData = array(
                    'code' => '00', 'message' => 'success', 'data' => $vnp_Url
                );
                if (isset($_POST['redirect'])) {
                    header('Location: ' . $vnp_Url);
                    die();
                } else {
                    echo json_encode($returnData);
                }
            }
            include 'view/datghe_bongnc/web/giohang.php';
            break;
        case 'xac_minh_thanh_toan':
            // Xử lý khi thanh toán thành công
            if (isset($_GET['vnp_ResponseCode']) && $_GET['vnp_ResponseCode'] == '00') {
                $vnp_Amount = $_GET['vnp_Amount'];
                $vnp_BankCode = $_GET['vnp_BankCode'];
                $vnp_BankTranNo = $_GET['vnp_BankTranNo'];
                $vnp_CardType = $_GET['vnp_CardType'];
                $vnp_Orderinfo = $_GET['vnp_OrderInfo'];
                $vnp_PayDate = $_GET['vnp_PayDate'];
                $vnp_ResponseCode = $_GET['vnp_ResponseCode'];
                $vnp_TmnCode = $_GET['vnp_TmnCode'];
                $vnp_TransactionNo = $_GET['vnp_TransactionNo'];
                $vnp_TransactionStatus = $_GET['vnp_TransactionStatus'];
                $vnp_TxnRef = $_GET['vnp_TxnRef'];
                $vnp_SecureHash = $_GET['vnp_SecureHash'];

                //tao ve va user truoc sau do moi them duoc bang vnpay
                $info_user = $_SESSION['my_user'];
                if (isset($_SESSION['my_user'])) {
                    if (isset($info_user['id_user'], $info_user['ho_ten'], $info_user['email'], $info_user['phone'], $info_user['dia_chi'])) {
                        $info = $_SESSION['my_info'];
                        if (
                            $info_user['ho_ten'] != $info['name'] ||
                            $info_user['email'] != $info['email'] ||
                            $info_user['phone'] != $info['phone'] ||
                            $info_user['dia_chi'] != $info['address']
                        ) {
                            $id_user = $info_user['id_user'];
                            $name = $info['name'];
                            $phone = $info['phone'];
                            $email = $info['email'];
                            $address = $info['address'];
                            update_info_payment($id_user, $name, $phone, $email, $address);
                        }
                    }
                }
                //insert vnpay
                $id_user = $info_user['id_user'];
                $user = query_user_payment($id_user);
                if(empty($_SESSION['my_bonus'])){
                    $id_do_an = 0;
                    $bong_nuoc[] = [
                        'id_do_an' => $id_do_an
                    ];
                    $_SESSION['my_bonus'] = $bong_nuoc;
                }
                $list_do_an = $_SESSION['my_bonus'];
                foreach ($list_do_an as $do_an_item) {
                    $id_user = $user['id_user'];
                    $id_do_an = $do_an_item['id_do_an'];
                    insert_vnpay(
                        $id_user,
                        $id_do_an,
                        $vnp_Amount,
                        $vnp_BankCode,
                        $vnp_BankTranNo,
                        $vnp_CardType,
                        $vnp_Orderinfo,
                        $vnp_PayDate,
                        $vnp_ResponseCode,
                        $vnp_TmnCode,
                        $vnp_TransactionNo,
                        $vnp_TransactionStatus,
                        $vnp_TxnRef,
                        $vnp_SecureHash
                    );
                }
                $payment = query_payment($id_user);
                //insert ve
                $id_suat_chieu = $_SESSION['my_show'][0][1];
                $trang_thai = 'chưa lấy vé';
                $id_pay = $payment['id_pay'];
                $list_ghe = $_SESSION['my_seat'];
                $id_gia_ve = $_SESSION['my_ticket']['0']['id_gia_ve'];
                $count = count($list_ghe);
                for ($i = 0; $i < $count; $i++) {
                    $id_ghe = $list_ghe[$i]['id_ghe'];
                    insert_ve($id_suat_chieu, $id_ghe, $trang_thai, $id_gia_ve, $id_pay);
                    update_trang_thai_ghe($id_ghe);
                }
                header('Location:index.php?act=thanh_toan_thanh_cong');
            } else {
                header('Location:index.php?act=thanh_toan_that_bai');
            }
            break;
        case 'thanh_toan_thanh_cong':
            include 'view/datghe_bongnc/web/thong-bao/tt_thanh_cong.php';
            break;
        case 'thanh_toan_that_bai':
            include 'view/datghe_bongnc/web/thong-bao/tt_that_bai.php';
            break;
        case 'contact':
            $err = [];
            if (isset($_POST['btn_contact']) && ($_POST['btn_contact'])) {
                $email = $_POST['email'];
                $ho_ten = $_POST['ho_ten'];
                $chu_de = $_POST['chu_de'];
                $noi_dung = $_POST['noi_dung'];
                date_default_timezone_set('Asia/Ho_Chi_Minh');
                $ngayHienTai = date("Y-m-d");
                $ngay_gui = $ngayHienTai;

                if (empty($email)) {
                    $err['email'] = "* Email không được để trống";
                } else {
                    if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                        $err['email'] = " không đúng định dạng";
                    }
                }
                if (empty($ho_ten)) {
                    $err['ho_ten'] = "* Họ tên không được để trống";
                }
                if (empty($chu_de)) {
                    $err['chu_de'] = "* Chủ đề không được để trống";
                }
                if (empty($noi_dung)) {
                    $err['noi_dung'] = "* Nội dung không được để trống";
                }
                if (empty($err)) {
                    insert_contact($email, $chu_de, $ho_ten, $noi_dung, $ngay_gui);
                    echo " <script>
                   Swal.fire({
                       title: 'Good job!',
                       text: 'Bạn đã gửi thành công',
                       icon: 'success',
                       confirmButtonText: 'Cool'
                     })</script>";
                }
            }

            include 'view/lien-he/contact.php';
            break;
        case 'login':
            $err = [];
            if (isset($_POST['btn_signin']) && ($_POST['btn_signin'])) {
                $email = $_POST['email'];
                $pass = $_POST['pass'];
                $check_user = sign_Users($email, $pass);

                if (empty($email)) {
                    $err['email'] = "*";
                } else {
                    if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                        $err['email'] = " không đúng định dạng";
                    }
                }
                if (empty($pass)) {
                    $err['pass'] = "*";
                }
                if (empty($err)) {
                    $erro = "Đăng nhập thất bại: Email hoặc mật khẩu bị sai";
                }
                if ($check_user) {
                    $_SESSION['my_user'] = [
                        'id_user' => $check_user['id_user'],
                        'email' => $check_user['email'],
                        'phone' => $check_user['so_dien_thoai'],
                        'ho_ten' => $check_user['ho_ten'],
                        'dia_chi' => $check_user['dia_chi']
                    ];
                    header('Location:index.php?act=thanh_vien');
                    // }

                }
            }

            include 'account/signin.php';
            break;
        case 'thanh_vien':
            $user = $_SESSION['my_user'];
            $id_user = $user['id_user'];
            $result = query_transaction_user($id_user);
            include 'account/thanhvien.php';
            break;
        case 'quenmk':
            $err = [];
            if (isset($_POST['btn_verify']) && $_POST['btn_verify']) {
                $email = $_POST['email'];
                $result = sign_change_pass($email);

                if (empty($email)) {
                    $err['email'] = "Email không được để trống";
                } else {
                    if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                        $err['email'] = "Email không đúng định dạng";
                    }
                }
                if (empty($err)) {
                    $erro = "Email không tồn tại";
                }
                if ($result) {
                    $_SESSION['change_password'] = $result;
                    header('Location:index.php?act=doimk');
                }
            }
            include 'account/quenmk.php';
            break;
        case 'doimk':
            $err = [];
            if (isset($_POST['btn_restore']) && ($_POST['btn_restore'])) {
                $old_pass = $_POST['old_pass'];
                $new_pass_1 = $_POST['new_pass_1'];
                $new_pass_2 = $_POST['new_pass_2'];
                $user_id = $_POST['id_user'];
                $result = edit_query_user($user_id, $old_pass);

                if (empty($old_pass)) {
                    $err['old_pass'] = "*";
                }
                if (empty($new_pass_1)) {
                    $err['new_pass_1'] = "*";
                }
                if (empty($new_pass_2)) {
                    $err['new_pass_2'] = "*";
                }
                if ($new_pass_1 != $new_pass_2) {
                    $err['new_pass_2'] = "Password nhập lại không đúng";
                }
                if (empty($err)) {
                    $erro = "Nhập sai mật khẩu cũ";
                }
                if ($result && $new_pass_1 == $new_pass_2) {
                    restore_Pass($user_id, $new_pass_2);
                    header('Location:index.php?act=login');
                }
            }
            include 'account/doimk.php';
            break;

         case 'user_change_password':
            $err = [];
            if (isset($_POST['btn_restore']) && ($_POST['btn_restore'])) {
                $old_pass = $_POST['old_pass'];
                $new_pass_1 = $_POST['new_pass_1'];
                $new_pass_2 = $_POST['new_pass_2'];
                $user_id = $_POST['id_user'];
                $result = edit_query_user($user_id, $old_pass);

                if (empty($old_pass)) {
                    $err['old_pass'] = "*";
                }
                if (empty($new_pass_1)) {
                    $err['new_pass_1'] = "*";
                }
                if (empty($new_pass_2)) {
                    $err['new_pass_2'] = "*";
                }
                if ($new_pass_1 != $new_pass_2) {
                    $err['new_pass_2'] = "Password nhập lại không đúng";
                }
                if (empty($err)) {
                    $erro = "Nhập sai mật khẩu cũ";
                }
                if ($result && $new_pass_1 == $new_pass_2) {
                    restore_Pass($user_id, $new_pass_2);
                    header('Location:index.php?act=thanh_vien');     
                }
            }
            include 'account/user_change_password.php';
            break;    
        case 'register':
            $err = [];
            $phone = "";
            $query_insert_user = all_user();
            extract($query_insert_user);
            if (isset($_POST['btn_register']) && ($_POST['btn_register'])) {
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
                    header('Location:index.php?act=login');
                }
            }
            include 'account/signup.php';
            break;
        case 'logout':
            session_unset();
            header('location: index.php');
            break;
        case 'register_insert_thong_tin':
            break;
        default:
            include 'view/home.php';
            break;
    }
} else {
    include 'view/home.php';
}

include "view/footer.php";
