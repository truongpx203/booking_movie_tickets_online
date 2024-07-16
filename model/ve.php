<?php
function show_ve() {
    $sql = "SELECT * FROM ve 
    INNER JOIN suat_chieu on suat_chieu.id_suat_chieu = ve.id_suat_chieu 
    INNER JOIN ghe on ghe.id_ghe = ve.id_ghe 
    INNER JOIN phong_chieu on phong_chieu.id_phong_chieu = ghe.id_phong_chieu
    INNER JOIN rap on rap.id_rap = phong_chieu.id_rap
    INNER JOIN gia_ve on gia_ve.id_gia_ve = ve.id_gia_ve 
    INNER JOIN vnpay on vnpay.id_pay = ve.id_pay";
    $result = pdo_query($sql);
    return $result;

}


function show_user_buy(){
    $sql = "select vnpay.*,count(ve.id_pay) 'so_luong_ve',user.*,count(distinct suat_chieu.id_phim) as 'so_phim_da_xem'
    from vnpay
    inner join ve on ve.id_pay = vnpay.id_pay
    inner join suat_chieu on suat_chieu.id_suat_chieu = ve.id_suat_chieu
    inner join user on user.id_user = vnpay.id_user 
    group by user.id_user order by so_luong_ve desc
    ";
    $result = pdo_query($sql);
    return $result;

}

// CRUD

function   insert_ve($trang_thai,$id_suat_chieu,$id_ghe,$id_gia_ve,$id_pay){
    $sql = "insert into ve value(null,'$trang_thai',$id_suat_chieu,$id_ghe,$id_gia_ve,$id_pay)";
    pdo_execute($sql);
}

function query_update_ve($id_ve) {
    $sql = "select * from ve where id_ve  = ".$id_ve;
    $result=pdo_query_one($sql);
    return $result;
}

function  update_ve($id_ve,$trang_thai,$id_suat_chieu,$id_ghe,$id_gia_ve,$id_pay){
    $sql = "update ve set trang_thai='$trang_thai',id_suat_chieu='$id_suat_chieu',id_ghe=$id_ghe,id_gia_ve=$id_gia_ve,id_pay=$id_pay where id_ve = $id_ve ";
    pdo_execute($sql);
}

function delete_ve($id_ve){
    $sql = "delete from ve where id_ve = $id_ve";
    pdo_execute($sql);
}


?>