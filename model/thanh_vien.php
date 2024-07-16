<?php 

function show_thongtin_user(){
    $sql = "SELECT * from user where id_user = 19";
    $result = pdo_query($sql);
    return $result;    

}

function ls_giaodich(){
    $sql = "SELECT * FROM ve INNER JOIN user on user.id_user = ve.id_user INNER JOIN suat_chieu on suat_chieu.id_suat_chieu = ve.id_suat_chieu;";
    $result = pdo_query($sql);
    return $result;    

    
}

?>