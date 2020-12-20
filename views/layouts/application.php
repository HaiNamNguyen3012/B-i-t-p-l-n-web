
<DOCTYPE html>
<html>
   <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./icon/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
 <!--   <link rel="stylesheet" href="./assets/stylesheets/thongtinphongtronguoichothue.css">    -->
   
    <link rel="stylesheet" href="./assets/stylesheets/header.css">
    <link rel="stylesheet" href="./assets/stylesheets/footer.css">


    <script src="../lib/jquery-3.5.1.min.js"></script>
  </head>
  <body>
    <header class="container-fluid">
            <div class="container">
                <div class="row up">
                    <div class="col-sm-4 left">
                        <h1>
                            <a href="./index.php?controller=posts">TT24H</a>
                        </h1>
                    </div>
                    <div class="col-sm-8 right">
                        <ul>
                            <li>
                                <a href="./index.php?controller=posts">
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
                        <?php 
                        if (session_status() == PHP_SESSION_NONE) {
                            session_start();
                        }
                        if(isset($_SESSION['username'])){
                            echo '
                        <a href="./index.php?controller=info&action=showInfo&username='.$_SESSION['username'].'">
                        <i class="fas fa-user">'.$_SESSION['username'].'</i>
                        </a>';
                        }
                        else{
                            echo '
                        
                        <a href="./index.php?controller=login">
                        <i class="fas fa-user">Đăng nhập</i>
                        </a>';
                        }
                        
                        ?>
                        
                    </div>
                    
                        <?php
                            if(isset($_SESSION['vai_tro'])){
                                if($_SESSION['vai_tro'] == "nguoi_cho_thue" || $_SESSION['vai_tro'] == "admin"){
                                    echo '
                    <div class="col-sm-2 right">
                        <a href="./index.php?controller=posts&action=createPost">
                        <i class="fas fa-pen-square">Đăng tin</i>
                        </a>
                    </div>';

                                }
                            }
                            

                        ?>
                        
                    
                </div>
            </div>
        </header>
        <?= @$content ?>
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
                                        <li class="appWrapper-Footer-icon"><img src="./assets/images/facebook.svg"></li>
                                        <li class="appWrapper-Footer-icon"><img src="./assets/images/google.svg"></li>
                                        <li class="appWrapper-Footer-icon"><img src="./assets/images/youtube.svg"></li>
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

