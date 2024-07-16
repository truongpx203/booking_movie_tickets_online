<?php 
    function show_suat_chieu_update_ve() {
        $sql = "SELECT * FROM suat_chieu";
        $result_sc = pdo_query($sql);
        return $result_sc;
    } 
?>