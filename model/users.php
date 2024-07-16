<?php

function insert_User($email, $ho_ten, $dia_chi, $so_dien_thoai,$id_role)
{
    $sql_user = "INSERT INTO user VALUE(null,'$email','$ho_ten','$so_dien_thoai','$dia_chi','$id_role')";
    pdo_execute($sql_user);
}

function query_insert_role_User()
{
    $sql = "select * from role order by id_role desc limit 1";
    $result = pdo_query_one($sql);
    return $result;
}

function insert_Role($mat_khau)
{
    $sql_thong_tin = "insert into role value(null,1,$mat_khau)";
    pdo_execute($sql_thong_tin);
}

function sign_Users($email, $pass) // them mat khau vao bang role
{
    $sql = "SELECT * FROM user INNER JOIN role on role.id_role = user.id_role 
    where user.email = '$email' and role.mat_khau = '$pass' and role.vai_tro = 1";
    $result = pdo_query_one($sql);
    return $result;
}
function sign_change_pass($email)
{
    $sql = "SELECT * FROM user INNER JOIN role on role.id_role = user.id_role
     where user.email = '$email' and role.vai_tro = 1";
    $result = pdo_query_one($sql);
    return $result;
}

//check thanh toan
function query_user($id_user)
{
    $sql = "select * from user where id_user = $id_user";
    $result = pdo_query_one($sql);
    return $result;
}
function update_info_payment($id_user, $name, $phone, $email, $address)
{
    $sql = "UPDATE user SET ho_ten = '$name', so_dien_thoai = '$phone', email = '$email', dia_chi = '$address' WHERE id_user = $id_user";
    pdo_execute($sql);
}

function insert_info_payment($name, $phone, $email, $address)
{
    $sql = "INSERT INTO user VALUE(null,'$email','$name','$phone','$address')";
    pdo_execute($sql);
}

function query_user_payment($id_user)
{
    $sql = "select * from user where id_user = $id_user";
    $result = pdo_query_one($sql);
    return $result;
}

function check_info(){


}



///

function restore_Pass($user_id, $new_pass)
{
    $sql = "update role INNER JOIN user on role.id_role = user.id_role set mat_khau= '$new_pass' WHERE id_user = '$user_id'";
    pdo_execute($sql);
}

function edit_query_user($user_id, $old_pass)   
{
    $sql = "SELECT * FROM user INNER JOIN role on role.id_role = user.id_role
    where user.id_user = $user_id and role.mat_khau = $old_pass";
    $result = pdo_query_one($sql);
    return $result;
}



///

function update_Users($id_user, $email, $pass, $full_name, $phone, $dia_chi)
{
    $sql = "update user inner join role on role.id_role = user.id_role 
    set email='$email',mat_khau='$pass',ho_ten='$full_name',so_dien_thoai='$phone', dia_chi='$dia_chi' where id_user=$id_user";
    pdo_execute($sql);
}


function query_update_user($id_user) {
    $sql = "select * from user inner join role on role.id_role = user.id_role where id_user = ".$id_user;
    $result=pdo_query_one($sql);
    return $result;
}

function show_list_users()
{
    $sql = "select user.*,role.*
    from user
    inner join role on user.id_role = role.id_role
    where role.vai_tro = 1 
    ";
    $result = pdo_query($sql);
    return $result;
}

function delete_User($user_id)
{
    $sql = "delete from user where id_user = $user_id";
    pdo_execute($sql);
}


function all_user()
{
    $sql = "SELECT * FROM USER";
    $result = pdo_query($sql);
    return $result;
}

function check_tk_admin($email, $pass)
{
    $sql = "SELECT * FROM user INNER JOIN role on user.id_role = role.id_role where user.email='" . $email . "' and role.mat_khau='" . $pass . "'";
    $result = pdo_query($sql);
    if (count($result) >= 0) {
        return $result['0']['vai_tro'];
    } else {
        return 0;
    }
}

function query_transaction_user($id_user) {
    $sql = "SELECT user.*, vnpay.*, ve.*, suat_chieu.*, phim.*, gia_ve.*, rap.*, phong_chieu.*, ghe.* ,ve.trang_thai AS trang_thai_ve
    FROM ve 
    INNER JOIN suat_chieu ON suat_chieu.id_suat_chieu = ve.id_suat_chieu 
    INNER JOIN ghe ON ghe.id_ghe = ve.id_ghe 
    INNER JOIN phong_chieu ON phong_chieu.id_phong_chieu = ghe.id_phong_chieu 
    INNER JOIN rap ON rap.id_rap = phong_chieu.id_rap 
    INNER JOIN gia_ve ON gia_ve.id_gia_ve = ve.id_gia_ve 
    INNER JOIN vnpay ON vnpay.id_pay = ve.id_pay 
    INNER JOIN user ON user.id_user = vnpay.id_user 
    INNER JOIN phim ON phim.id_phim = suat_chieu.id_phim 
    WHERE user.id_user = $id_user
    ORDER BY id_ve ASC
    ";
    $result = pdo_query($sql);
    return $result;
}
