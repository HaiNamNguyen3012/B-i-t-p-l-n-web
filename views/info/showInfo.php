<!DOCTYPE html>
    <html lang="en">
    
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <link rel="stylesheet" href="./icon/css/all.min.css">
       <!-- <link rel="stylesheet" href="./assets/stylesheets/nguoichothue.css">        -->
       
        <link rel="stylesheet" href="./assets/stylesheets/ttcn.css?v=<?php echo time(); ?>">
        <title>Trang thông tin cá nhân</title>
    </head>
    <body> 
        
           
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
                            if(isset($_SESSION['username'])){
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
                            
                        </div>
                        
                        <?php
            $i = 0;
            if(count($posts) > 1){   
                echo '<h4>Đang bán</h4>';         
            foreach ($posts as $post) {
                echo 
                ' <div>
                    
                    <div id="phong1">
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
                            <div class="dientich-va-gia">
                                <h4>'.($post->gia/1000000).' triệu</h4>
                                <p>'.$post->dien_tich.' m<sup>2</sup></p>
                            </div>
                            <div id="thong-tin-co-ban1">
                                <p id="infor-owner1">Người đăng: '.$post->ho.' '.$post->ten.'</p>
                                <p id="time1">Thời gian đăng:</p>
                                <p id="city1">'.$post->tentp.', '.$post->tenqh.'</p>
                            </div>
                        </div>
                    </div>
                </div>';

                if (++$i == (count($posts)-1)) break;
                }
            }
            else{
                
            }
            $i = 0;
          //  var_dump($saveposts);
            if(count($saveposts) > 1){
            
                echo '<h4>Đang lưu</h4>'; 
            
                foreach($saveposts as $savepost){
                    echo
                    ' <div>
                    
                    <div id="phong1">
                        <div class="left">
                            <img src="./assets/images/phong_tro/'.$savepost->ten_hinh_anh.'" alt="'.$savepost->ten_hinh_anh.'" width="140" height="140"> 
                        </div>
                        <div class="right">
                            <div class="description-and-link-to-information-of-room">
                                <div class="description">
                                    <h4>' . $savepost->tieu_de . '</h4>
                                </div>
                                <div class="link-to-information-of-room">
                                    <a href="index.php?controller=post_details&action=showPost&id=' . $savepost->id_phong . '">Thông tin về phòng</a>
                                </div>
                            </div>
                            <div class="dientich-va-gia">
                                <h4>'.($savepost->gia/1000000).' triệu</h4>
                                <p>'.$savepost->dien_tich.' m<sup>2</sup></p>
                            </div>
                            <div id="thong-tin-co-ban1">
                                <p id="infor-owner1">Người đăng: '.$savepost->ho.' '.$savepost->ten.'</p>
                                <p id="time1">Thời gian đăng:</p>
                                <p id="city1">'.$savepost->tentp.', '.$savepost->tenqh.'</p>
                            </div>
                        </div>
                    </div>
                </div>';
                if (++$i == (count($saveposts)-1)) break;
                
                }
            }
            else{

            }

            
            ?>
                    </div>
                </div>
            </div>
            
    </body>
</html>
