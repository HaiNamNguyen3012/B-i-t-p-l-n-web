
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="./icon/css/all.min.css">
    <link rel="stylesheet" href="./assets/stylesheets/admin.css">
    <link rel="stylesheet" href="./assets/stylesheets/admintable.css">
    <title>Admin sửa bình luận</title>
</head>
<body>
        <div class="wrapper d-flex align-items-stretch">
        <nav id="sidebar">
                <div class="navbar-brand">
                    <a href="./index.php?controller=posts" class="logo">
                        TT24
                    </a>
                </div>
          
                <ul class="sidebar-menu">
                
                    <li><a class="sub-menu" href="./index.php?controller=admin&action=showUncheckUsers">
                        <i class="fa fa-user"></i>
                        <span>Duyệt người cho thuê</span></a>
                    </li>
                    <li><a class="sub-menu" style="padding-right:25px ;" href="./index.php?controller=admin&action=showUncheckPosts">
                        <i class="fa fa-building"></i>
                        <span>Duyệt các bài đăng</span></a>
                    </li>
                    <li><a class="sub-menu"  style="padding-right: 15px ;" href="./index.php?controller=admin&action=showUncheckComments">
                        <i class="fa fa-comments" ></i>
                        <span>Duyệt các bình luận</span></a>
                    </li>
                    <li><a class="sub-menu" style="padding-right: 20px ;" href="./index.php?controller=admin&action=showUncheckReports">
                        <i class="fa fa-gavel"></i>
                        <span>Duyệt các báo cáo</span></a>
                    </li>
                    <li><a class="sub-menu" style="padding-right: 90px;" href="./admintk.html">
                        <i class="fa fa-chart-bar"></i>
                        <span>Thống kê</span></a>
                    </li>
                    <li><a class="sub-menu" style="padding-right: 90px;" href="./index.php?controller=admin&action=login">
                        <i class="fa fa-sign-out-alt"></i>
                        <span>Đăng xuất</span></a>
                    </li>
                </ul>
            </nav>
            <div id="content">
                <form method="post">
                    <div class="page-header row">
                        <div class="col-12 col-sm-4 text-center text-sm-left">
                            <h3 class="page-title">Comment</h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="card card-small overflow-hidden mb-4">
                                <div class="card-header bg-dark">
                                    <h6 class="text-white">Bình luận của người dùng</h6>
                                </div>
                                <div class="card-body p-0 pb-3 bg-dark text-center">
                                    <table class="table table-dark mb-0">
                                        <thead class="thead-dark">
                                            <tr>
                                                <th scope="col" class="border-bottom-0">ID người dùng</th>
                                                <th scope="col" class="border-bottom-0">ID bình luận</th>
                                                <th scope="col" class="border-bottom-0">ID phòng</th>
                                                <th scope="col" class="border-bottom-0">Nội dung</th>
                                                <th scope="col" class="border-bottom-0">Được duyệt</th>
                                                <th scope="col" class="border-bottom-0">Đánh giá</th>
                                                <th scope="col" class="border-bottom-0">Thời gian bình luận</th>
                                                <th scope="col" class="border-bottom-0">Phê duyệt</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php    
                                            $a=1;  
                                            foreach ($uncheckComments as $comment) {
                                                
                                            echo '
                                            <tr>
                                                <td>'.$comment->id_nguoi_dung.'</td>
                                                <td>'.$comment->id_binh_luan.'</td>
                                                <td>'.$comment->id_phong_tro.'</td>
                                                <td>'.$comment->noi_dung.'</td>
                                                <td>'.$comment->duoc_duyet.'</td>
                                                <td>'.$comment->may_sao.'</td>
                                                <td>'.$comment->thoi_gian_binh_luan.'</td>
                                                
                                                <td><input type="checkbox" name="user'.$a.'" value="'.$comment->id_binh_luan.'"></td>
                                            </tr>';
                                            $a++;
                                            }
                                            ?>

                                            
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <footer id="footer">
                        <div class="but">
                        <a>                
                            <input type="submit" class="btn btn-dark" value="Xác nhận"></input></a>               
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
                </form>
            </div>

        </div>
        
            
            

        
</body>
</html>

