
<?php

function show_top_phim(){
    $sql ="SELECT phim.*, COUNT(ve.id_ve) AS 'so_luong_dat', suat_chieu.*
    FROM phim
    INNER JOIN suat_chieu ON suat_chieu.id_phim = phim.id_phim
    INNER JOIN ve ON ve.id_suat_chieu = suat_chieu.id_suat_chieu
    WHERE phim.trang_thai_phim = 'Phim đang chiếu'
    GROUP BY suat_chieu.id_phim
    ORDER BY so_luong_dat DESC
    LIMIT 4;    
    ";
    $result = pdo_query($sql);
    return $result;
}
function loadone_phim($id_phim)
{
    $sql = "select * 
    from phim inner join the_loai_phim on the_loai_phim.id_the_loai = phim.id_the_loai
    where id_phim=$id_phim";
    $result = pdo_query_one($sql);
    return $result;
}

function query_ngay($id_phim)
{
    $sql = "SELECT DISTINCT ngay_chieu
    FROM suat_chieu
    WHERE id_phim = $id_phim ORDER BY ngay_chieu ASC";
    $atb_phim = pdo_query($sql);
    return $atb_phim;
}

function query_rap_gio_chieu($id_phim, $ngay)
{
    $sql = "SELECT rap.*, phim.*, suat_chieu.*
    FROM suat_chieu
    JOIN rap ON suat_chieu.id_rap = rap.id_rap
    JOIN phim ON suat_chieu.id_phim = phim.id_phim
    WHERE phim.id_phim = $id_phim AND suat_chieu.ngay_chieu = '$ngay' order by gio_chieu ASC";
    $result = pdo_query($sql);
    return $result;
}


function query_gio_chieu_select($id_phim, $date)
{
    $sql = "select * from suat_chieu where id_phim = $id_phim and ngay_chieu= $date";
    $result = pdo_query($sql);
    return $result;
}

function query_gio_chieu_default($id_phim)
{
    $sql = "SELECT * FROM suat_chieu WHERE id_phim = $id_phim LIMIT 1";
    $result = pdo_query($sql);
    return $result;
}

function show_Pro() {
    $sql = "SELECT * FROM phim 
    INNER JOIN khuyen_mai on khuyen_mai.id_khuyen_mai = phim.id_khuyen_mai 
    INNER JOIN the_loai_phim on the_loai_phim.id_the_loai = phim.id_the_loai;";
    $result_phim = pdo_query($sql);
    return $result_phim;

}

function  insert_Pro($ten_phim,$ngay_phat_hanh,$ngon_ngu,$trailer,$thoi_luong,$trang_thai,$mo_ta,$id_khuyen_mai,$name_img,$id_the_loai){
    $sql = "insert into phim value(null,'$ten_phim','$name_img','$mo_ta','$ngay_phat_hanh','$ngon_ngu','$trailer','$thoi_luong','$trang_thai',$id_khuyen_mai,$id_the_loai)";
    pdo_execute($sql);
}

// function query_updatePro($phim_id){
//     $sql = "SELECT phim.*,rap.* 
//             FROM phim 
//             INNER JOIN rap ON phim.id_rap = rap.id_rap 
//             WHERE id_phim = $phim_id";
//     $result=pdo_query_one($sql);
//     return $result;
// }
function query_updatePro($phim_id) {
    $sql = "select * from phim where id_phim  = ".$phim_id;
    $result=pdo_query_one($sql);
    return $result;
}

function  update_Phim($id_phim,$ten_phim,$ngay_phat_hanh,$ngon_ngu,$trailer,$thoi_luong,$trang_thai,$mo_ta,$id_khuyen_mai,$name_img,$id_the_loai){
    $sql = "update phim set ten_phim='$ten_phim',anh='$name_img',mo_ta='$mo_ta',ngay_phat_hanh='$ngay_phat_hanh',ngon_ngu='$ngon_ngu',trailer='$trailer',thoi_luong='$thoi_luong',trang_thai_phim='$trang_thai',
    id_khuyen_mai=$id_khuyen_mai,id_the_loai=$id_the_loai where id_phim = $id_phim ";
    pdo_execute($sql);
}

function delete_Phim($phim_id){
    $sql = "delete from phim where id_phim = $phim_id";
    pdo_execute($sql);
}



// COMENT ERROL
////
// function show_Pro() {
//     $sql = "SELECT rap.*,phim.* 
//             FROM phim 
//             INNER JOIN rap ON phim.id_rap = rap.id_rap
//     ";
//     $result = pdo_query($sql);
//     return $result;
// }
// // function show_Pro() {
// //     $sql = "SELECT products.*, categories.cate_name, COUNT(comment.pro_id) 'soluong'
// //     FROM products
// //     INNER JOIN categories ON products.cate_id = categories.cate_id
// //     LEFT JOIN comment ON products.pro_id = comment.pro_id
// //     GROUP BY products.pro_id ORDER BY soluong DESC
// //      ";
// //     $result=pdo_query($sql);
// //     return $result;
// // }


// //CRUD product
// function insert_Pro($ten_phim, $ngay_phat_hanh, $ngon_ngu, $trailer, $thoi_luong, $trang_thai, $mo_ta, $id_rap, $id_khuyen_mai, $name_img)
// {
//     $sql = "insert into phim value(null,'$ten_phim','$name_img','$mo_ta','$ngay_phat_hanh','$ngon_ngu','$trailer','$thoi_luong','$trang_thai',$id_rap,$id_khuyen_mai)";
//     pdo_execute($sql);
// }

// function query_updatePro($phim_id)
// {
//     $sql = "SELECT phim.*,rap.* 
//             FROM phim 
//             INNER JOIN rap ON phim.id_rap = rap.id_rap 
//             WHERE id_phim = $phim_id";
//     $result = pdo_query_one($sql);
//     return $result;
// }

// function update_Phim($id_phim, $ten_phim, $ngay_phat_hanh, $ngon_ngu, $trailer, $thoi_luong, $trang_thai, $mo_ta, $id_rap, $id_khuyen_mai, $name_img)
// {
//     $sql = "update phim set ten_phim='$ten_phim',anh='$name_img',mo_ta='$mo_ta',ngay_phat_hanh='$ngay_phat_hanh',ngon_ngu='$ngon_ngu',trailer='$trailer',thoi_luong='$thoi_luong',trang_thai_phim='$trang_thai',
//     id_rap = $id_rap,id_khuyen_mai=$id_khuyen_mai where id_phim = $id_phim ";
//     pdo_execute($sql);
// }

// function delete_Phim($phim_id)
// {
//     $sql = "delete from phim where id_phim = $phim_id";
//     pdo_execute($sql);
// }


// chi tiet san pham

// function detail_Item($pro_id) {
//     $sql = "SELECT products.*, categories.cate_name
//     FROM products
//     INNER JOIN categories ON products.cate_id = categories.cate_id WHERE products.pro_id = $pro_id";
//     $result=pdo_query_one($sql);
//     return $result;
// }
// //show pro theo danh muc
// function show_Pro_Cate($cate_id) {
//     $sql = "SELECT *
//     FROM products
//     WHERE cate_id = ".$cate_id;
//     $result=pdo_query($sql);
//     return $result;
// }

// //show san pham moi trang chu
// function show_Pro_New(){
//     $sql = "select * from products order by pro_id desc limit 6 ";
//     $result = pdo_query($sql);
//     return $result;
// }

// //show product with keywords
// function show_Pro_Key($keyw = "") {
//     $sql = "SELECT products.*, categories.cate_name, COUNT(comment.pro_id) AS soluong
//     FROM products
//     INNER JOIN categories ON products.cate_id = categories.cate_id
//     LEFT JOIN comment ON products.pro_id = comment.pro_id
//     WHERE products.pro_name LIKE '%$keyw%'
//     GROUP BY products.pro_id
//     ORDER BY soluong DESC;";
//     $result = pdo_query($sql);
//     return $result;
// }

//show phim ra trang chu
function show_phim_dangchieu()
{
    $sql = "select * from phim where trang_thai_phim='Phim đang chiếu' order by id_phim desc";
    $result = pdo_query($sql);
    return $result;
}


function show_phim_sapchieu()
{
    $sql = "select * from phim where trang_thai_phim='Phim Sắp chiếu' order by id_phim desc";
    $result = pdo_query($sql);
    return $result;
}

function show_phim_vebantruoc()
{
    $sql = "select * from phim where trang_thai_phim='Vé bán trước' order by id_phim desc";

    $result = pdo_query($sql);
    return $result;
}


function suat_chieu()
{
    $sql = "SELECT phim.*, rap.*, suat_chieu.* FROM phim 
   INNER JOIN rap ON phim.id_rap = rap.id_rap INNER JOIN suat_chieu 
   ON phim.id_phim = suat_chieu.id_phim WHERE DATE(suat_chieu.ngay_chieu)";
    $result = pdo_query($sql);
    return $result;
}


function show_Pro_Key($keyw = "")
{
    $sql = "SELECT * FROM phim INNER JOIN the_loai_phim on the_loai_phim.id_the_loai = phim.id_the_loai
    WHERE phim.ten_phim LIKE '%$keyw%' AND phim.trang_thai_phim = 'Phim đang chiếu'
    ORDER BY id_phim DESC";
    $result = pdo_query($sql);
    return $result;
}

function show_the_loai_phim()
{
    $sql = "SELECT * FROM the_loai_phim order by id_the_loai ASC";
    $result = pdo_query($sql);
    return $result;
}

function show_movie()
{
    $sql = "SELECT * FROM phim INNER JOIN the_loai_phim on the_loai_phim.id_the_loai = phim.id_the_loai order by id_phim desc";
    $result = pdo_query($sql);
    return $result;
}

// show phim theo thể loại

function show_phim_bomtan()
{
    $sql = "SELECT * FROM phim INNER JOIN the_loai_phim on the_loai_phim.id_the_loai = phim.id_the_loai WHERE ten_the_loai = 'Bom tấn' order by id_phim desc";
    $result = pdo_query($sql);
    return $result;
}

function show_phim_hoathinh()
{
    $sql = "SELECT * FROM phim INNER JOIN the_loai_phim on the_loai_phim.id_the_loai = phim.id_the_loai WHERE ten_the_loai = 'Hoạt hình' order by id_phim desc";
    $result = pdo_query($sql);
    return $result;
}

function show_phim_tamly()
{
    $sql = "SELECT * FROM phim INNER JOIN the_loai_phim on the_loai_phim.id_the_loai = phim.id_the_loai WHERE ten_the_loai = 'Tâm lý' order by id_phim desc";
    $result = pdo_query($sql);
    return $result;
}

function show_phim_kinhdi()
{
    $sql = "SELECT * FROM phim INNER JOIN the_loai_phim on the_loai_phim.id_the_loai = phim.id_the_loai WHERE ten_the_loai = 'Kinh dị' order by id_phim desc";
    $result = pdo_query($sql);
    return $result;
}
