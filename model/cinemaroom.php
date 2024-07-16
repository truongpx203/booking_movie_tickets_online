<?php
function show_pc() {
    $sql = "SELECT rap.*,phong_chieu.* 
            FROM phong_chieu 
            INNER JOIN rap ON phong_chieu.id_rap = rap.id_rap
    ";
    $result=pdo_query($sql);
    return $result;
}

// CRUD

function insert_pc($ten_phong_chieu,$loai_phong_chieu,$id_rap){
    $sql = "insert into phong_chieu value(null,'$ten_phong_chieu','$loai_phong_chieu','$id_rap')";
    pdo_execute($sql);
}


function query_updatepc($id_phong_chieu){
    $sql = "SELECT phong_chieu.*,rap.* 
            FROM phong_chieu 
            INNER JOIN rap ON phong_chieu.id_rap  = rap.id_rap 
            WHERE id_phong_chieu = $id_phong_chieu";
    $result=pdo_query_one($sql);
    return $result;
}


function update_pc($id_phong_chieu,$ten_phong_chieu,$id_rap){
    $sql = "update phong_chieu set ten_phong_chieu='$ten_phong_chieu',id_rap=$id_rap where id_phong_chieu = $id_phong_chieu ";
    pdo_execute($sql);
}

function  delete_pc($id_phong_chieu){
    $sql = "delete from phong_chieu where id_phong_chieu = $id_phong_chieu";
    pdo_execute($sql);
}



?>