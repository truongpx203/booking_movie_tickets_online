<?php
function show_sc() {
    $sql = "SELECT phim.*,suat_chieu.* 
            FROM suat_chieu 
            INNER JOIN phim ON suat_chieu.id_phim = phim.id_phim
    ";
    $result=pdo_query($sql);
    return $result;
}

//crud

function insert_sc($ngay_chieu,$gio_chieu,$id_phim,$id_rap){
    $sql = "insert into suat_chieu value(null,'$ngay_chieu','$gio_chieu','$id_phim','$id_rap')";
    pdo_execute($sql);
}

function query_updatesc($id_suat_chieu){
    $sql = "SELECT suat_chieu.*,phim.* 
            FROM suat_chieu 
            INNER JOIN phim ON suat_chieu.id_phim = phim.id_phim
            WHERE id_suat_chieu = $id_suat_chieu";
    $result=pdo_query_one($sql);
    return $result;
}


function update_sc($id_suat_chieu,$ngay_chieu,$gio_chieu,$id_phim,$id_rap){
    $sql = "update suat_chieu set ngay_chieu='$ngay_chieu',gio_chieu='$gio_chieu',id_phim=$id_phim,id_rap=$id_rap where id_suat_chieu = $id_suat_chieu ";
    pdo_execute($sql);
}

function  delete_sc($id_suat_chieu){
    $sql = "delete from suat_chieu where id_suat_chieu = $id_suat_chieu";
    pdo_execute($sql);
}


?>