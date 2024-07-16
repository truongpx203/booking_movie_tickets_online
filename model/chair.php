<?php 
    function show_ghe_update_ve() {
        $sql = "SELECT * FROM ghe";
        $result_ghe = pdo_query($sql);
        return $result_ghe;
    } 
?>