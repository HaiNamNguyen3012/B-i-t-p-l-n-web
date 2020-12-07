#views/post_details/show.php
<?php
  echo 
    'Tiêu đề: '.$post_details->tieu_de.'
    </br>;
    Nội dung: '.$post_details->noi_dung.'
    </br>
    Giá: '.$post_details->gia.'
    </br>
    Loại phòng: '.$post_details->loai_phong.'
    </br>
    Diện tích: '.$post_details->dien_tich.' m<sup>2</sup>
    </br>
    Số nhà:'.$post_details->so_nha.'
    </br>
    Đường: '.$post_details->duong.'
    </br>
    '.$post_details->tentp.'
    </br>
    '.$post_details->tenqh.'
    </br>
    '.$post_details->tenxp.'
    </br>
    Gần địa điểm: '.$post_details->gan_dia_diem.'
    </br>
    Số lượng phòng: '.$post_details->so_luong_phong.'
    </br>
    Tính tiền theo từng '.$post_details->tinh_theo.'
    </br>
    
    Thời gian đăng bài: '.$post_details->thoi_gian_dang_bai.'
    </br>
    Được thuê: '.$post_details->duoc_thue.'
    </br>
    Đăng bởi: '.$post_details->ho.' '.$post_details->ten.'
    </br>
    Số điện thoại: '.$post_details->sdt.'
    </br>
    Chung chủ:'.$post_details->chung_chu.'
    </br>
    Phòng tắm chung: '.$post_details->phong_tam_chung.'
    </br>
    Bình nóng lạnh: '.$post_details->nong_lanh.'
    </br>
    Phòng bếp: '.$post_details->phong_bep.'
    </br>
    Điều hòa: '.$post_details->dieu_hoa.'
    </br>
    Ban công: '.$post_details->ban_cong.'
    </br>
    Điện nước: '.$post_details->dien_nuoc.'
    </br>
    Tủ lanh: '.$post_details->tu_lanh.'
    </br>
    Máy giặt: '.$post_details->may_giat.'
    </br>
    Giường tủ: '.$post_details->giuong_tu.'
    </br>
    Ảnh: '.$post_details->cac_hinh_anh[0]['ten_hinh_anh'].''./* sua lai sau*/'.
    </br>
    
   
   
   ';
    var_dump($post_details->cac_hinh_anh);
?>
###views/post_details_details/show.php