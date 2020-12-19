<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="../lib/jquery-3.5.1.min.js"></script>
    <link rel="stylesheet" href="./icon/css/all.min.css">
    <link rel="stylesheet" href="./assets/stylesheets/nguoichothue.css">
    <link rel="stylesheet" href="./dangtin.html">
    <title>Trang chủ</title>
</head>

<body>
    <header class="container-fluid">
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
                    <a href="./dangtin.html">
                        <i class="far fa-edit">Đăng tin</i>
                    </a>
                </div>
            </div>
        </div>
    </header>

    <div class="container-fluid content">
        <div class="container main-content-header">
            <h4>Các phòng tôi cho thuê</h4>
        </div>
        <div class="container main-content">
        <?php
            foreach ($posts as $post) {
            
                echo 
                '<div id="phong1">
                    <div class="left">
                        <img src="./assets/images/phong_tro/'.$post->ten_hinh_anh.'" alt="'.$post->ten_hinh_anh.'" width="140" height="140"> 
                    </div>
                    <div class="right">
                        <div class="description-and-link-to-information-of-room">
                            <div class="description">
                                <h4>' . $post->tieu_de . '</h4>
                            </div>
                            <div class="link-to-information-of-room">
                                <a href="index.php?controller=post_details&action=showPost&id=' . $post->id_phong . '">Thông tin về phòng</a>
                            </div>
                        </div>
                        <p>'.$post->dien_tich.' m<sup>2</sup></p>
                        <h4>'.($post->gia/1000000).' triệu</h4>
                        <div id="thong-tin-co-ban1">
                            <p id="infor-owner1">Người đăng: '.$post->ho.' '.$post->ten.'</p>
                            <p id="time1">Thời gian đăng</p>
                            <p id="city1">'.$post->tentp.', '.$post->tenqh.'</p>
                        </div>
                    </div>
                </div>';
                    }
            ?>
            <!--
            <div id="phong1">
                <div class="left">Ảnh</div>
                <div class="right">
                    <div class="description-and-link-to-information-of-room">
                        <div class="description">
                            <h4>Miêu tả</h4>
                        </div>
                        <div class="link-to-information-of-room">
                            <a href="../thongtinphongtro/thongtinphongtronguoichothue.html">Thông tin về phòng</a>
                        </div>
                    </div>
                    <p>Diện tích</p>
                    <h4>Giá</h4>
                    <div id="thong-tin-co-ban1">
                        <p id="infor-owner1">Người đăng</p>
                        <p id="time1">Thời gian đăng</p>
                        <p id="city1">Tỉnh thành phố phòng cho thuê</p>
                    </div>
                </div>
            </div>
            -->
            
        </div>
    </div>
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
</body>

</html>
