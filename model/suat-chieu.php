<?php 
   function query_suat_chieu($id_phim,$id_suat_chieu,$id_rap) {
    $sql = "select phim.*,suat_chieu.*,rap.* 
    from suat_chieu
    inner join phim on suat_chieu.id_phim = phim.id_phim
        inner join rap on suat_chieu.id_rap = rap.id_rap
        where suat_chieu.id_phim = $id_phim and suat_chieu.id_suat_chieu = $id_suat_chieu and suat_chieu.id_rap = $id_rap";
    $result = pdo_query_one($sql);
    return $result;
   }
?>