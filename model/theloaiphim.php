<?php
function show_Loai_phim() {
    $sql = "select the_loai_phim.*,count(phim.id_the_loai) 'so_luong'
    from the_loai_phim
    inner join phim on phim.id_the_loai = the_loai_phim.id_the_loai
    group by phim.id_the_loai
    ";
    $result_the_loai = pdo_query($sql);
    return $result_the_loai;

}


// CRUD

function insert_loai_phim($ten_the_loai){
    $sql = "insert into the_loai_phim value(null,'$ten_the_loai')";
    pdo_execute($sql);
}

function  query_updateloai($id_the_loai) {
    $sql = "select * from the_loai_phim where id_the_loai = ".$id_the_loai;
    $result=pdo_query_one($sql);
    return $result;
}
function   update_loai($id_the_loai,$ten_the_loai){
    $sql = "update the_loai_phim set ten_the_loai='$ten_the_loai' where id_the_loai = $id_the_loai ";
    pdo_execute($sql);
}

function  delete_loai($id_the_loai){
    $sql = "delete from the_loai_phim where id_the_loai = $id_the_loai";
    pdo_execute($sql);
}


?>