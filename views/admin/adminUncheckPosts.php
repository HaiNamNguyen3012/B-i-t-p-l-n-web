<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./icon/css/all.min.css">
    <link rel="stylesheet" href="./assets/stylesheets/admin.css">
    <link rel="stylesheet" href="./assets/stylesheets/admintable.css">
</head>
<body>



<div class="wrapper d-flex align-items-stretch">
<nav id="sidebar">
                
          
                <ul class="sidebar-menu">
                
                    <li><a class="sub-menu" href="/bai-tap-lon-web/index.php?controller=admin&action=showUncheckUsers">
                        <i class="fa fa-user"></i>
                        <span>Duyệt người cho thuê</span></a>
                    </li>
                    <li><a class="sub-menu" style="padding-right:30px ;" href="/bai-tap-lon-web/index.php?controller=admin&action=showUncheckPosts">
                        <i class="fa fa-building"></i>
                        <span>Duyệt các phòng</span></a>
                    </li>
                    <li><a class="sub-menu"  style="padding-right: 15px ;" href="/bai-tap-lon-web/index.php?controller=admin&action=showUncheckComments">
                        <i class="fa fa-comments" ></i>
                        <span>Duyệt các bình luận</span></a>
                    </li>
                    <li><a class="sub-menu" style="padding-right: 20px ;" href="/bai-tap-lon-web/index.php?controller=admin&action=showUncheckReports">
                        <i class="fa fa-gavel"></i>
                        <span>Duyệt các báo cáo</span></a>
                    </li>
                </ul>
            </nav>
            <div class="content">
                <div class="page-header row">
                    <div class="col-12 col-sm-4 text-center text-sm-left">
                        <h3 class="page-title">Posts</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="card card-small overflow-hidden mb-4">
                            <div class="card-header bg-dark">
                                <h6 class="text-white">Bài đăng của người dùng</h6>
                            </div>
                            <div class="card-body p-0 pb-3 bg-dark text-center">
                                <table class="table table-dark mb-0">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th scope="col" class="border-bottom-0">ID</th>
                                            <th scope="col" class="border-bottom-0">Giá</th>
                                            <th scope="col" class="border-bottom-0">Loại phòng</th>
                                            <th scope="col" class="border-bottom-0">Diện tích</th>
                                            <th scope="col" class="border-bottom-0">Người đăng</th>
                                            <th scope="col" class="border-bottom-0">Tỉnh/thành phố</th>
                                            <th scope="col" class="border-bottom-0">Quận/huyện</th>
                                            <th scope="col" class="border-bottom-0">Xã/phường</th>
                                            <th scope="col" class="border-bottom-0">Phê duyệt</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>123456</td>
                                            <td>3 triệu</td>
                                            <td>Chung cư mini</td>
                                            <td>20 m<SUP>2</SUP></td>
                                            <td>Trần Huy</td>
                                            <td>Hà Nội</td>
                                            <td>Cầu Giấy</td>
                                            <td>Dịch Vọng</td>
                                            <td><input type="checkbox" name="" value=""></td>
                                        </tr>
                                        <tr>  
                                            <td>123456</td>
                                            <td>3 triệu</td>
                                            <td>Chung cư mini</td>
                                            <td>20 m<SUP>2</SUP></td>
                                            <td>Trần Huy</td>
                                            <td>Hà Nội</td>
                                            <td>Cầu Giấy</td>
                                            <td>Dịch Vọng</td>
                                            <td><input type="checkbox" name="" value=""></td>
                                        </tr>
                                        <tr>
                                            <td>123456</td>
                                            <td>3 triệu</td>
                                            <td>Chung cư mini</td>
                                            <td>20 m<SUP>2</SUP></td>
                                            <td>Trần Huy</td>
                                            <td>Hà Nội</td>
                                            <td>Cầu Giấy</td>
                                            <td>Dịch Vọng</td>
                                            <td><input type="checkbox" name="" value=""></td>
                                        </tr>
                                        <tr>
                                            <td>123456</td>
                                            <td>3 triệu</td>
                                            <td>Chung cư mini</td>
                                            <td>20 m<SUP>2</SUP></td>
                                            <td>Trần Huy</td>
                                            <td>Hà Nội</td>
                                            <td>Cầu Giấy</td>
                                            <td>Dịch Vọng</td>
                                            <td><input type="checkbox" name="" value=""></td>
                                        </tr>
                                        <tr>
                                            <td>123456</td>
                                            <td>3 triệu</td>
                                            <td>Chung cư mini</td>
                                            <td>20 m<SUP>2</SUP></td>
                                            <td>Trần Huy</td>
                                            <td>Hà Nội</td>
                                            <td>Cầu Giấy</td>
                                            <td>Dịch Vọng</td>
                                            <td><input type="checkbox" name="" value=""></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <footer id="footer">
                    <div class="but">
                    <a href="#">                
                        <button type="button" class="btn btn-dark" >Xác nhận</button></a>               
                    </div>
                    <ul class="pagination">
                
                        <li class="page-item active"><a class="page-link" href="#">Trước</a></li>
                
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                
                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                
                        <li class="page-item"><a class="page-link" href="#">5</a></li>
                
                        <li class="page-item"><a class="page-link" href="#">Sau</a></li>
                
                    </ul>
                </footer>
            </div>

        </div>
        

  <form method="post">
      <?php
      echo '<ul>';
      $a=1;
      $i = 0;
      if(count($posts) > 1){
      foreach ($posts as $post) {
        echo 
        '<li>
          <a href="index.php?controller=post_details&action=showPost&id=' . $post->id_phong . '">' . $post->tieu_de . '</a>
          <ul>
            <li>ID :'.$post->id_phong.'</li>
            <li>Giá: '.$post->gia.'</li>
            <li>Loại phòng: '.$post->loai_phong.'</li>
            <li>Diện tích: '.$post->dien_tich.' m<sup>2</sup></li>
            <li>Đăng bởi: '.$post->ho.' '.$post->ten.'</li>
            <li>'.$post->tentp.'</li>
            <li>'.$post->tenqh.'</li>
            <li>'.$post->tenxp.'</li>
            <li>Ảnh: '.$post->ten_hinh_anh.'</li>
            <li><input type="checkbox" name="user'.$a.'" value="'.$post->id_phong.'"></li>
          </ul>
        </li>';
        $a++;
        if (++$i == (count($posts)-1)) break;
        }
      }
      else {
        echo "Không có phòng nào phù hợp yêu cầu của bạn !!!";
      }
      echo '</ul>';
      ?>
      



      <input type="submit" value="Xác nhận">  
  </form>
<?php var_dump($_POST);
        ?>
</body>
</html>