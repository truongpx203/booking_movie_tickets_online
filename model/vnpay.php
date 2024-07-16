<?php 
    function  show_pay_update_ve() {
        $sql = "SELECT * FROM vnpay";
        $result_pay = pdo_query($sql);
        return $result_pay;
    } 
?>