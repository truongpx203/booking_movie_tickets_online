<?php
function show_km() {
    $sql = "select * from khuyen_mai";
    $result_khuyen_mai = pdo_query($sql);
    return $result_khuyen_mai;

}
function khuyen_mai(){
    $sql = "select * from khuyen_mai";
    $result = pdo_query($sql);
    return $result;
}


function show_khuyen_mai(){
    $sql = "select * from khuyen_mai order by id_khuyen_mai desc limit 8";
    $result = pdo_query($sql);
    return $result;
}
//crud
function  insert_km($ten_khuyen_mai,$name_img,$chiet_khau,$ngay_ap_dung){
    $sql = "insert into khuyen_mai value(null,'$ten_khuyen_mai','$name_img','$chiet_khau','$ngay_ap_dung')";
    pdo_execute($sql);
}

function  query_updatekm($id_khuyen_mai) {
    $sql = "select * from khuyen_mai where id_khuyen_mai = ".$id_khuyen_mai;
    $result=pdo_query_one($sql);
    return $result;
}

function  update_km($id_khuyen_mai ,$ten_khuyen_mai,$name_img,$chiet_khau, $ngay_ap_dung){
    $sql = "update khuyen_mai set ten_khuyen_mai='$ten_khuyen_mai',img='$name_img',chiet_khau='$chiet_khau',ngay_ap_dung='$ngay_ap_dung' where id_khuyen_mai = $id_khuyen_mai ";
    pdo_execute($sql);
}

function   delete_km($id_khuyen_mai){
    $sql = "delete from khuyen_mai where id_khuyen_mai = $id_khuyen_mai";
    pdo_execute($sql);
}

function loadone_khuyen_mai($id_khuyen_mai)  {
    $sql = "select * from khuyen_mai where id_khuyen_mai = ".$id_khuyen_mai;
    $result=pdo_query_one($sql);
    return $result;
}

?>