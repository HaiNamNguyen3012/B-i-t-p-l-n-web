<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./icon/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/stylesheets/thongtinphongtronguoichothue.css">
    <script src="../lib/jquery-3.5.1.min.js"></script>
    <title>Thông tin về phòng trọ</title>
</head>

<body>
  <!--  <header class="container-fluid">
        <div class="container">
            <div class="row up">
                <div class="col-sm-4 left">
                    <h1>
                        <a href="../nguoichothue/nguoichothue.html">TT24H</a>
                    </h1>
                </div>
                <div class="col-sm-8 right">
                    <ul>
                        <li>
                            <a href="../nguoichothue/nguoichothue.html">
                                <i class="fas fa-home">Trang chủ</i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fas fa-pen-square">Chỉnh sửa bài đăng</i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fas fa-comment-alt">Nhắn tin</i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fas fa-bell">Thông báo</i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row down">
                <div class="col-sm-6 left">
                    <input type="search" name="search" id="search" placeholder="Tìm kiếm">
                    <span id="icon-search">
                        <i class="fas fa-search"></i>
                    </span>
                </div>
                <div class="col-sm-2 center">
                    <a href="../dangnhap/dangnhap.html">
                        <i class="fas fa-user">Đăng nhập</i>
                    </a>
                </div>
                <div class="col-sm-2 right">
                    <a href="../nguoichothue/dangtin.html">
                        <i class="fas fa-pen-square">Đăng tin</i>
                    </a>
                </div>
            </div>
        </div>
    </header>
-->
    <div class="content container-fluid">
        <div class="information-header">
            <h4>Thông tin về phòng trọ</h4>
        </div>
        <div class="container main-content">
            <div class="row">
                <div class="left col-sm-7">

                    <div class="image"> 
                    <?php
                        echo
                        '<div class="slideshow-container">';
                        $i=1;
                        foreach($post_details->cac_hinh_anh as $hinh_anh){
                            
                            echo 
                            '<div class="mySlides">
                                <div class="numbertext"></div>
                                <img src="./assets/images/phong_tro/'.$hinh_anh['ten_hinh_anh'].'" alt="">

                                <div class="text">'.$post_details->thoi_gian_hien_thi.' trước</div>
                            </div>';
                            $i++;
                        }
                        echo
                        '
                            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                            <a class="next" onclick="plusSlides(1)">&#10095;</a>
                        </div>
                        <div style="text-align:center">';
                        $i=1;
                        foreach($post_details->cac_hinh_anh as $hinh_anh){
                            echo 
                            '<span class="dot" onclick="currentSlide('.$i.')"></span>';
                            $i++;
                        }
                        echo
                        '</div>'
                   
                        
                    ?> 
                    </div>
                    <!--
                    <div class="image">
                        <div class="slideshow-container">
                            <div class="mySlides">
                                <div class="numbertext">1/3</div>
                                <img src="./assets/images/phong_tro/dog.jpg" alt="">
                                <div class="text">Ảnh Một</div>
                            </div>
                            <div class="mySlides">
                                <div class="numbertext">2/3</div>
                                <img src="./image/2.jpg" alt="">
                                <div class="text">Ảnh Hai</div>
                            </div>
                            <div class="mySlides">
                                <div class="numbertext">3/3</div>
                                <img src="./image/3.jpg" alt="">
                                <div class="text">Ảnh Ba</div>
                            </div>
                            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                            <a class="next" onclick="plusSlides(1)">&#10095;</a>
                        </div>
                        <div style="text-align:center">
                            <span class="dot" onclick="currentSlide(1)"></span>
                            <span class="dot" onclick="currentSlide(2)"></span>
                            <span class="dot" onclick="currentSlide(3)"></span>
                        </div>

                    </div>  -->
                    <div class="information">
                        <?php
                       /* echo 
                        'Tiêu đề: '.$post_details->tieu_de.'/////
                        </br>;
                        Nội dung: '.$post_details->noi_dung.'/////
                        </br>
                        Giá: '.$post_details->gia.'////
                        </br>
                        Loại phòng: '.$post_details->loai_phong.'
                        </br>
                        Diện tích: '.$post_details->dien_tich.' m<sup>2</sup>///
                        </br>
                        Địa chỉ:'.$post_details->dia_chi.'//
                        </br>
                        '.$post_details->tentp.'//
                        </br>
                        '.$post_details->tenqh.'//
                        </br>
                        '.$post_details->tenxp.'//
                        </br>
                        Gần địa điểm: '.$post_details->gan_dia_diem.'//
                        </br>
                        Số lượng phòng: '.$post_details->so_luong_phong.' ////
                        </br>
                        Tính tiền theo từng '.$post_details->tinh_theo.'
                        </br>
                        
                        Thời gian đăng bài: '.$post_details->thoi_gian_dang_bai.'
                        </br>
                        Được thuê: '.$post_details->duoc_thue.'
                        </br>
                        Đăng bởi: '.$post_details->ho.' '.$post_details->ten.'//
                        </br>
                        Số điện thoại: '.$post_details->sdt.'//
                        </br>
                        Chung chủ:'.$post_details->chung_chu.'//
                        </br>
                        Phòng tắm chung: '.$post_details->phong_tam_chung.'///
                        </br>
                        Bình nóng lạnh: '.$post_details->nong_lanh.'
                        </br>
                        Phòng bếp: '.$post_details->phong_bep.'///
                        </br>
                        Điều hòa: '.$post_details->dieu_hoa.'///
                        </br>
                        Ban công: '.$post_details->ban_cong.'///
                        </br>
                        Điện nước: '.$post_details->dien_nuoc.'/////
                        </br>
                        Tủ lanh: '.$post_details->tu_lanh.'
                        </br>
                        Máy giặt: '.$post_details->may_giat.'
                        </br>
                        Giường tủ: '.$post_details->giuong_tu.'
                        </br>
                        Ảnh: '.$post_details->cac_hinh_anh[0]['ten_hinh_anh'].''. sua lai sau'.
                        </br>
  
                       ';*/?>
                       <?php
                        
                        echo '
                        <h4>'.$post_details->tieu_de.'</h4>
                        <div class="dientich-va-gia">
                            <div class="left">
                                <p id="price">'.$post_details->gia.'</p>
                                <p id="square">'.$post_details->dien_tich.' m<sup>2</sup></p>
                            </div>
                            <div class="right">
                                <div class="statistivs">
                                    <i class="far fa-heart"></i>
                                    <p>69</p>
                                    <p>Lượt lưu tin</p>
                                </div>
                            </div>
                        </div>
                        <div class="description">
                            <h4>'.$post_details->so_luong_phong.' phòng '.$post_details->loai_phong.', '.$post_details->dia_chi.', '.$post_details->tenxp.', '.$post_details->tenqh.', '.$post_details->tentp.'</h4>
                            <h4> Gần '.$post_details->gan_dia_diem.'</h4>   <!-- mới thêm-->
                            <p>'.$post_details->noi_dung.'</p>
                            <p>'.$post_details->sdt.'</p>                   <!-- mới thêm-->
                        </div>
                        <div class="condition">
                            <div class="left">
                                <p>'.$post_details->chung_chu.'</p>
                                <p>'.$post_details->phong_bep.'</p>
                                <p>'.$post_details->phong_tam_chung.'</p>
                            </div>
                            <div class="right">
                                <p>'.$post_details->dieu_hoa.'</p>
                                <p>'.$post_details->ban_cong.'</p>
                                <p>'.$post_details->nong_lanh.'</p>
                                <p>'.$post_details->dien_nuoc.'</p>
                                <p>Tiện ích khác: '.$post_details->tu_lanh.' '.$post_details->may_giat.' '.$post_details->giuong_tu.'</p>            <!-- cần sửa lại    --> 
                            </div>
                        </div>';
                        
                        
                        ?>
                    </div>
                </div>
                <div class="right col-sm-3">
                    <div class="person-information">
                        <div class="up">
                            <div class="left">
                            </div>
                            <div class="center"><?php echo $post_details->ho.' '.$post_details->ten; ?></div>
                            <div class="right">
                                <a href="./index.php?controller=info&action=showInfo&username=<?php echo $post_details->ten_tai_khoan; ?>">Xem trang</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--
        <footer class="container-fluid">
            <div class="appWrapper-DesktopFooter">
                <div class="appWrapper-DesktopFooter-container">
                    <section class="appWrapper-DesktopFooter-container-top">
                        <div class="appWrapper-DesktopFooter-item">
                            <p class="appWrapper-DesktopFooter-heading">Hỗ trợ khách hàng</p>
                            <ul class="appWrapper-Footer-ul">
                                <li class="appWrapper-Footer"><a href="#">Trung tâm trợ giúp</a></li>
                                <li class="appWrapper-Footer"><a href="#">An toàn giao dịch</a></li>
                                <li class="appWrapper-Footer"><a href="#">Quy định và quyền lợi</a></li>
                                <li class="appWrapper-Footer"><a href="#">Liên hệ hỗ trợ</a></li>
                            </ul>

                        </div>
                        <div class="appWrapper-DesktopFooter-item">
                            <p class="appWrapper-DesktopFooter-heading">TT24</p>
                            <ul class="appWrapper-Footer-ul">
                                <li class="appWrapper-Footer"><a href="/gioithieu/gioithieu.html">Giới thiệu</a></li>
                                <li class="appWrapper-Footer"><a href="#">Truyền thông</a></li>
                            </ul>

                        </div>
                        <div class="appWrapper-DesktopFooter-item-col">
                            <div class="appWrapper-DesktopFooter-item">
                                <p class="appWrapper-DesktopFooter-heading">Liên hệ</p>
                                <ul class="appWrapper-Footer-ul approw">
                                    <li class="appWrapper-Footer-icon"><img src="https://static.chotot.com/storage/default/facebook.svg"></li>
                                    <li class="appWrapper-Footer-icon"><img src="https://static.chotot.com/storage/default/google.svg"></li>
                                    <li class="appWrapper-Footer-icon"><img src="https://static.chotot.com/storage/default/youtube.svg"></li>
                                </ul>

                            </div>
                        </div>
                    </section>
                    <section class="appWrapper-DesktopFooter-container-bottom">
                        <p>Trang web được thiết kế bởi Huy Trần, Trọng Tấn, Hải Nam</p>
                    </section>
                </div>
            </div>
        </footer>
                    -->
        <script src="./assets/javascripts/thongtinphongtronguoichothue.js"></script>
</body>

</html>
