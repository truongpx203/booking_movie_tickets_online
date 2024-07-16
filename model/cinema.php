<?php
function show_rap() {
    $sql = "select * from rap";
    $result_cinema = pdo_query($sql);
    return $result_cinema;

}

function show_he_thong_rap(){
    $sql = "select * from rap order by id_rap desc limit 8";
    $result = pdo_query($sql);
    return $result;
}

// crud rạp

function insert_rap($ten_rap,$dia_diem,$name_img){
    $sql = "insert into rap value(null,'$ten_rap','$dia_diem','$name_img')";
    pdo_execute($sql);
}


function query_updaterap($id_rap) {
    $sql = "select * from rap where id_rap = ".$id_rap;
    $result=pdo_query_one($sql);
    return $result;
}
function update_rap($id_rap,$ten_rap,$dia_diem,$name_img){
    $sql = "update rap set ten_rap='$ten_rap',dia_diem='$dia_diem', img='$name_img' where id_rap  = $id_rap ";
    pdo_execute($sql);
}

function  delete_rap($id_rap){
    $sql = "delete from rap where id_rap = $id_rap";
    pdo_execute($sql);
}

?>