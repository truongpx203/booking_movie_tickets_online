<?php 
function show_contact() {
    $sql = "SELECT * FROM lien_he";
    $result = pdo_query($sql);
    return $result;

}
function delete_contact($id_lien_he){
    $sql = "delete from lien_he where id_lien_he = $id_lien_he";
    pdo_execute($sql);
}

function insert_contact($email, $chu_de, $ho_ten, $noi_dung, $ngay_gui)
{
    $sql_user = "INSERT INTO lien_he VALUE(null,'$email','$ho_ten','$chu_de','$noi_dung','$ngay_gui')";
    pdo_execute($sql_user);
}

function loadone_contact($id_lien_he){
    $sql = "SELECT * FROM lien_he  where id_lien_he = ".$id_lien_he;
    $result = pdo_query_one($sql);
    return $result;
}

?>