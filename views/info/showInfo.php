<!DOCTYPE html>
    <html lang="en">
    
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <link rel="stylesheet" href="./icon/css/all.min.css">
        <link rel="stylesheet" href="./assets/stylesheets/nguoichothue.css">
        <link rel="stylesheet" href="./dangtin.html">
        <link rel="stylesheet" href="./assets/stylesheets/ttcn.css">
        <title>Trang thông tin cá nhân</title>
    </head>
    <body> 
        <!---    <header class="container-fluid">
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
                                        <i class="fas fa-shopping-cart"> Tôi cho thuê </i>
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
                        <div class="col-sm-3 center">
                            <a href="../dangnhap/dangnhap.html">
                                <i class="fas fa-user-secret"> 
                                    Đăng nhập
                                </i>
                            </a>
                        </div>
                        <div class="col-sm-2 right">
                            <a href="../nguoichothue/dangtin.html">
                                <i class="far fa-edit">Đăng tin</i>
                            </a>
                        </div>
                    </div>
                </div>
            </header>
-->
            <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
                <a class="nav-link" href="../nguoichothue/nguoichothue.html">TT24</a>
                <a class="nav-link" href="#"> >> Trang cá nhân của tan</a>
            </nav>
            <div class="main-container">
                <div class="container cstt">
                    <div class="title">Thông tin cá nhân</div>
                    <div class="row pull">
                        <div class="img col-md-3 col-sm-12">
                            <div class="images">
                                <img src="/assets/images/Trend-Avatar-Facebook .jpg" height="120",width="120">
                            </div> 
                            <div class="file-upload">
                                    <input type="file"/>
                                    <i class="fa fa-arrow-up"></i>
                            </div>
                        </div>
                        <div class="col-md-9 col-sm-12 info">
                            <?php 
                            if (session_status() == PHP_SESSION_NONE) {
                                session_start();
                            }
                            
                            if($info->ten_tai_khoan == $_SESSION['username']){
                                echo
                            '<div class="col-xs-12">
                                <ul>
                                    <li>
                                        <div class="item1">
                                            <span>Tên đăng nhập</span>
                                        </div>
                                        <div class="item2">
                                            <span>'.$info->ten_tai_khoan.'</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="item1">
                                            <span>Họ</span>
                                        </div>
                                        <div class="item2">
                                            <span>'.$info->ho.'</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="item1">
                                            <span>Tên</span>
                                        </div>
                                        <div class="item2">
                                            <span>'.$info->ten.'</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="item1">
                                            <span>Số điện thoại</span>
                                        </div>
                                        <div class="item2">
                                            <span>'.$info->sdt.'</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="item1">
                                            <span>Email</span>
                                        </div>
                                        <div class="item2">
                                            <span class="item3" title="abc@gmail.com">'.$info->email.'</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="item1">
                                            <span>Địa chỉ</span>
                                        </div>
                                        <div class="item2">
                                            <span>'.$info->dia_chi.'</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="item1">
                                            <span>Chứng minh thư</span>
                                        </div>
                                        <div class="item2">
                                            <span>'.$info->so_CCCD.'</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <a href="./index.php?controller=info&action=editInfo" style=text-decoration:none;>
                                <button type="button" class="btn btn-block">Chỉnh sửa thông tin</button>
                            </a>
                            <a href="./index.php?controller=signout" style=text-decoration:none;>
                                <button type="button" class="btn btn-block">Đăng xuất</button>
                            </a>'
                            ;
                            }
                            else{
                                echo
                                '<div class="col-xs-12">
                                <ul>
                                    <li>
                                        <div class="item1">
                                            <span>Họ</span>
                                        </div>
                                        <div class="item2">
                                            <span>'.$info->ho.'</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="item1">
                                            <span>Tên</span>
                                        </div>
                                        <div class="item2">
                                            <span>'.$info->ten.'</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="item1">
                                            <span>Số điện thoại</span>
                                        </div>
                                        <div class="item2">
                                            <span>'.$info->sdt.'</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="item1">
                                            <span>Email</span>
                                        </div>
                                        <div class="item2">
                                            <span class="item3" title="abc@gmail.com">'.$info->email.'</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="item1">
                                            <span>Địa chỉ</span>
                                        </div>
                                        <div class="item2">
                                            <span>'.$info->dia_chi.'</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            ';
                            }
                            ?>
                            <!--<div class="col-xs-12">
                                <ul>
                                    <li>
                                        <div class="item1">
                                            <span>Tên đăng nhập</span>
                                        </div>
                                        <div class="item2">
                                            <span>tan</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="item1">
                                            <span>Họ</span>
                                        </div>
                                        <div class="item2">
                                            <span>Phạm</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="item1">
                                            <span>Tên</span>
                                        </div>
                                        <div class="item2">
                                            <span>tan</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="item1">
                                            <span>Số điện thoại</span>
                                        </div>
                                        <div class="item2">
                                            <span>0123456789</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="item1">
                                            <span>Email</span>
                                        </div>
                                        <div class="item2">
                                            <span class="item3" title="abc@gmail.com">abc@gmail.com</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="item1">
                                            <span>Địa chỉ</span>
                                        </div>
                                        <div class="item2">
                                            <span>Hà nội</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="item1">
                                            <span>Chứng minh thư</span>
                                        </div>
                                        <div class="item2">
                                            <span>0123456789</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <a href="./trangcstt.html" style=text-decoration:none;>
                                <button type="button" class="btn btn-block">Chỉnh sửa thông tin</button>
                            </a>    -->
                        </div>
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
                    </div>
                </div>
            </div>
            
    </body>
</html>