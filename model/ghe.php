<?php 

function list_ghe(){
    $sql = "select * from ghe";
    $result = pdo_query($sql);
    return $result;
}

function show_hang_ghe_A($id_phong_chieu){
    $sql = "SELECT * FROM ghe WHERE ten_ghe LIKE 'A%' AND id_phong_chieu = $id_phong_chieu ORDER BY id_ghe ASC limit 12";
    $result = pdo_query($sql);
    return $result;
    
}

function show_hang_ghe_B($id_phong_chieu){
    $sql = "SELECT * FROM ghe WHERE ten_ghe LIKE 'B%' AND id_phong_chieu = $id_phong_chieu ORDER BY id_ghe ASC limit 12";
    $result = pdo_query($sql);
    return $result;
    
}

function show_hang_ghe_C($id_phong_chieu){
    $sql = "SELECT * FROM ghe WHERE ten_ghe LIKE 'C%' AND id_phong_chieu = $id_phong_chieu ORDER BY id_ghe ASC limit 12";
    $result = pdo_query($sql);
    return $result;
    
}

function show_hang_ghe_D($id_phong_chieu){
    $sql = "SELECT * FROM ghe WHERE ten_ghe LIKE 'D%' AND id_phong_chieu = $id_phong_chieu ORDER BY id_ghe ASC limit 12";
    $result = pdo_query($sql);
    return $result;
    
}

function show_hang_ghe_E($id_phong_chieu){
    $sql = "SELECT * FROM ghe WHERE ten_ghe LIKE 'E%' AND id_phong_chieu = $id_phong_chieu ORDER BY id_ghe ASC limit 12";
    $result = pdo_query($sql);
    return $result;
    
}

function show_hang_ghe_F($id_phong_chieu){
    $sql = "SELECT * FROM ghe WHERE ten_ghe LIKE 'F%' AND id_phong_chieu = $id_phong_chieu ORDER BY id_ghe ASC limit 12";
    $result = pdo_query($sql);
    return $result;
    
}

function show_hang_ghe_G($id_phong_chieu){
    $sql = "SELECT * FROM ghe WHERE ten_ghe LIKE 'G%' AND id_phong_chieu = $id_phong_chieu ORDER BY id_ghe ASC limit 12";
    $result = pdo_query($sql);
    return $result;
    
}

function show_hang_ghe_H($id_phong_chieu){
    $sql = "SELECT * FROM ghe WHERE ten_ghe LIKE 'H%' AND id_phong_chieu = $id_phong_chieu ORDER BY id_ghe ASC limit 12";
    $result = pdo_query($sql);
    return $result;
    
}

function show_hang_ghe_I($id_phong_chieu){
    $sql = "SELECT * FROM ghe WHERE ten_ghe LIKE 'I%' AND id_phong_chieu = $id_phong_chieu ORDER BY id_ghe ASC limit 12";
    $result = pdo_query($sql);
    return $result;
    
}

function show_hang_ghe_J($id_phong_chieu){
    $sql = "SELECT * FROM ghe WHERE ten_ghe LIKE 'J%' AND id_phong_chieu = $id_phong_chieu ORDER BY id_ghe ASC limit 12";
    $result = pdo_query($sql);
    return $result;
    
}

function update_trang_thai_ghe($id_ghe){
    $sql = "update ghe set trang_thai = '1' where id_ghe = $id_ghe";
    pdo_execute($sql);
}




?>
