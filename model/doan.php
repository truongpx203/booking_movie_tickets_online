<?php
function show_food() {
        $sql = "select * from do_an";
        $result_do_an = pdo_query($sql);
        return $result_do_an;

}
//CRUD 
function insert_food($ten_do_an,$gia,$name_img,$mo_ta,$so_luong){
    $sql = "insert into do_an value(null,'$ten_do_an','$gia','$name_img','$mo_ta','$so_luong')";
    pdo_execute($sql);
}

function  query_updatefood($id_do_an) {
    $sql = "select * from do_an where id_do_an = ".$id_do_an;
    $result=pdo_query_one($sql);
    return $result;
}
function update_food($id_do_an ,$ten_do_an,$gia,$name_img,$mo_ta,$so_luong){
    $sql = "update do_an set ten_do_an='$ten_do_an',gia='$gia',img='$name_img',mo_ta='$mo_ta',so_luong='$so_luong' where id_do_an = $id_do_an ";
    pdo_execute($sql);
}

function  delete_food($id_do_an){
    $sql = "delete from do_an where id_do_an = $id_do_an";
    pdo_execute($sql);
}

?>