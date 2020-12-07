<?php


require_once('connection.php');
$db = DB::getInstance();

for($i=0;$i<1000;$i++){
$req2 = $db->prepare("INSERT INTO `phong` (`id_phong`, `id_nguoi_cho_thue`, `so_nha`, `duong`, `id_xa`, `id_qh`, `id_tp`, `gan_dia_diem`, `loai_phong`, `so_luong_phong`, `gia`, `tinh_theo`, `dien_tich`, `thoi_gian_hien_thi`, `thoi_gian_dang_bai`, `duoc_duyet`, `duoc_thue`, `tieu_de`, `noi_dung`) VALUES (NULL, '2', '444', 'Nguyễn Khánh Toàn', '592', '1', '1', 'Bến xe Mỹ Đình', 'chung cư mini', '4', '1200000', 'quý', '14', '2020-12-03 20:32:21', '2020-12-03 20:32:21', '0', '0', 'Phòng cho thuê', 'ẹo ẹo');");

$ok=$req2->fetchAll();


$a = $db->prepare("INSERT INTO `info` (`id_info`, `chung_chu`, `phong_tam_chung`, `nong_lanh`, `phong_bep`, `dieu_hoa`, `ban_cong`, `dien_nuoc`, `tu_lanh`, `may_giat`, `giuong_tu`) VALUES (NULL, '0', '0', '0', '1', '1', '1', 'giá dân', '0', '0', '0');");
$a ->fetchAll();




}

?>