<?php 
    function show_loai_update_phim() {
        $sql = "SELECT * FROM the_loai_phim";
        $result_loai = pdo_query($sql);
        return $result_loai;
    }


    ?>