<?php 
    function  show_gia_ve_update_ve() {
        $sql = "SELECT * FROM gia_ve";
        $result_gia_ve = pdo_query($sql);
        return $result_gia_ve;
    } 
?>