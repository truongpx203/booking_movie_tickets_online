<?php 
    function show_phim_update_sc() {
        $sql = "SELECT * FROM phim";
        $result_phim = pdo_query($sql);
        return $result_phim;
    }
    ?>