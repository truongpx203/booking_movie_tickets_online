<?php
 function show_rap_update_pc() {
    $sql = "SELECT * FROM rap";
    $result_rap = pdo_query($sql);
    return $result_rap;
}

?>