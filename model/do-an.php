<?php 

function show_do_an(){
    $sql = "SELECT * from do_an order by id_do_an desc limit 3";
    $result = pdo_query($sql);
    return $result;    

}


?>