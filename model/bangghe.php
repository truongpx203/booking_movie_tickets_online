<?php
function show_ghe() {
    $sql = "select * from ghe";
    $result_ghe= pdo_query($sql);
    return  $result_ghe;

}

//crud

function  insert_ghe($ten_ghe,$trang_thai,$gia,$loai_ghe,$id_phong_chieu){
    $sql = "insert into ghe value(null,'$ten_ghe','$trang_thai','$gia','$loai_ghe','$id_phong_chieu')";
    pdo_execute($sql);
}
function query_updateghe($id_ghe) {
    $sql = "select * from ghe where id_ghe = ".$id_ghe;
    $result=pdo_query_one($sql);
    return $result;
}

function update_ghe($id_ghe ,$ten_ghe,$trang_thai,$gia,$loai_ghe){
    $sql = "update ghe set ten_ghe='$ten_ghe',trang_thai='$trang_thai',gia='$gia',loai_ghe='$loai_ghe' where id_ghe = $id_ghe ";
    pdo_execute($sql);
}

function  delete_ghe($id_ghe){
    $sql = "delete from ghe where id_ghe = $id_ghe";
    pdo_execute($sql);
}

?>