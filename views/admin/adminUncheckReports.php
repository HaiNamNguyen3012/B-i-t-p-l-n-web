
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
                        <h3 class="page-title">Report</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="card card-small overflow-hidden mb-4">
                            <div class="card-header bg-dark">
                                <h6 class="text-white">Báo cáo của người dùng</h6>
                            </div>
                            <div class="card-body p-0 pb-3 bg-dark text-center">
                                <table class="table table-dark mb-0">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th scope="col" class="border-bottom-0">ID báo cáo</th>
                                            <th scope="col" class="border-bottom-0">ID người dùng</th>
                                            <th scope="col" class="border-bottom-0">ID phòng</th>
                                            <th scope="col" class="border-bottom-0">Lí do</th>
                                            <th scope="col" class="border-bottom-0">Nội dung</th>
                                            <th scope="col" class="border-bottom-0">Thời gian báo cáo</th>
                                            <th scope="col" class="border-bottom-0">Phê duyệt</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>123123123123</td>
                                            <td>5544545656564</td>
                                            <td>25566454546</td>
                                            <td>Nội dung phản cảm</td>
                                            <td>Anh nóng, ảnh khỏa thân, ảnh đồ trụy, gây phản cảm</td>
                                            <td>2020-12-19 14:50:16</td>
                                            <td><input type="checkbox" name="" value=""></td>
                                        </tr>
                                        <tr>  
                                            <td>123123123123</td>
                                            <td>5544545656564</td>
                                            <td>25566454546</td>
                                            <td>Nội dung không đúng</td>
                                            <td>ảnh không chính xác</td>
                                            <td>2020-12-19 14:50:16</td>
                                            <td><input type="checkbox" name="" value=""></td>
                                        </tr>
                                        <tr>
                                            <td>123123123123</td>
                                            <td>5544545656564</td>
                                            <td>25566454546</td>
                                            <td>Nội dung phản cảm</td>
                                            <td>Anh nóng, ảnh khỏa thân</td>
                                            <td>2020-12-19 14:50:16</td>
                                            <td><input type="checkbox" name="" value=""></td>
                                        </tr>
                                        <tr>
                                            <td>123123123123</td>
                                            <td>5544545656564</td>
                                            <td>25566454546</td>
                                            <td>Nội dung phản cảm</td>
                                            <td>Anh nóng, ảnh khỏa thân</td>
                                            <td>2020-12-19 14:50:16</td>
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
        <table>
            <tr>
                <th>ID báo cáo</th>
                <th>ID người dùng</th>
                <th>ID phòng</th>
                <th>Lí do</th>
                <th>Nội dung</th>
                <th>Thời gian báo cáo</th>
                <th>Xóa báo cáo</th>
            </tr>
            
            <?php    
            $a=1;  
            foreach ($uncheckReports as $report) {
                
            echo '
            <tr>
                <td>'.$report->id_bao_cao.'</td>
                <td>'.$report->id_nguoi_dung.'</td>
                <td>'.$report->id_phong_tro.'</td>
                <td>'.$report->li_do.'</td>
                <td>'.$report->noi_dung.'</td>
                <td>'.$report->thoi_gian_bao_cao.'</td>
                
                <td><input type="checkbox" name="user'.$a.'" value="'.$report->id_bao_cao.'"></td>
            </tr>';
            $a++;
            }
            ?>
            
            

        </table>
        <input type="submit" value="Xác nhận">
    </form> 
    <?php var_dump($_POST);
        ?>
</body>
</html>

