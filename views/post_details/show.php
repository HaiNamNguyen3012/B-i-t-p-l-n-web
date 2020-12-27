<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./icon/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/stylesheets/thongtinphongtronguoichothue.css?v=<?php echo time(); ?>">
    <!-- <script src="../../assets/javascripts/lib/jquery-3.5.1.min.js"></script> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Thông tin về phòng trọ</title>
</head>

<body>
    <!--              HINH ANH          -->
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
                   <!--              THONG TIN PHONG          -->  
                    <div class="information">
                       
                      
                       <?php
                       
                        echo '
                        <h4>'.$post_details->tieu_de.'</h4>
                        <div class="dientich-va-gia">
                            <div class="left">
                                <p id="price">'.$post_details->gia.'</p>
                                <p id="square">'.$post_details->dien_tich.' m<sup>2</sup></p>
                            </div>
                            '.(isset($_SESSION['username']) ? '' : '<a href="./index.php?controller=login" style="text-decoration:none">').'
                                <div class="right">
                                
                                    <div class="statistivs">
                                        
                                            <button class="saveHome hoverPulse pan typeReversed">
                                                <span class="stackIcons left">
                                                    <i class="iconHeartEmpty typeReversed iconOnly far fa-heart"></i>
                                                    <i class="iconHeartActive iconOnly hide fas fa-heart"></i>
                                                </span>
                                                <div class="right">
                                                    <p class=""total">'.$save_post['tong'].'</p>
                                                    <p>lượt lưu tin</p>
                                                </div>
                                            </button>
                                        
                                    </div>
                                </div>
                                '.(isset($_SESSION['username']) ? '' : '</a>').'
                        </div>';

                     


                        echo '
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
                                <p>'.$post_details->dieu_hoa.'</p>
                            </div>
                            <div class="right">
                                
                                <p>'.$post_details->ban_cong.'</p>
                                <p>'.$post_details->nong_lanh.'</p>
                                <p>'.$post_details->dien_nuoc.'</p>
                                <p>Tiện ích khác: '.$post_details->tu_lanh.' '.$post_details->may_giat.' '.$post_details->giuong_tu.'</p>            <!-- cần sửa lại    --> 
                            </div>
                        </div>';
                    
                        
                        ?>
                    </div>
                     <!--              BAO CAO          -->
                    <div class="report">
                        <?php
                        echo'
                        '.(isset($_SESSION['username']) ? '' : '<a href="./index.php?controller=login" style="text-decoration:none">').'
                        <div class="button-report">
                            <button onclick="hideAndUnhideFormReport();">Báo cáo phòng</button>
                        </div>
                        '.(isset($_SESSION['username']) ? '' : '</a>');
                        ?>
                        <div class="form-report" style="display: none;">
                            <form class="form_report">
                                <h3>Form báo cáo phòng</h3>
                                <div class="reason">
                                    <p>Lý do bạn báo cáo</p>
                                    <input type="radio" id="reason1" class="report_reason" name="report_reason" value="Tin đăng hết hạn">
                                    <label for="reason1">Tin đăng hết hạn</label><br>
                                    
                                    <input type="radio" id="reason2" class="report_reason"  name="report_reason" value="Phòng không đúng thông tin">
                                    <label for="reason2">Phòng không đúng thông tin</label><br>

                                    <input type="radio" id="reason3" class="report_reason"  name="report_reason" value="Lừa đảo">
                                    <label for="reason3">Lừa đảo</label><br>

                                    <input type="radio" id="reason4" class="report_reason"  name="report_reason" value="Trùng lặp">
                                    <label for="reason4">Trùng lặp</label><br>

                                    <input type="radio" id="reason5" class="report_reason"  name="report_reason" value="Không liên lạc được">
                                    <label for="reason5">Không liên lạc được</label><br>

                                    <textarea  name="report_content" class="report_content" id="another-reason" cols="30" rows="10" placeholder="Nội dung"></textarea><br>
                                    
                                    <input type="button" id="addReport" value="Gửi báo cáo">
                                    <p id="report_alert" style="display: none;">Báo cáo của bạn đã được gửi đi</p>
                                </div>
                            </form>
                        </div>
                         <!--              BINH LUAN          -->
                        <div class="comment">
                            <?php
                            echo'
                            '.(isset($_SESSION['username']) ? '' : '<a href="./index.php?controller=login" style="text-decoration:none">').'
                            <div class="form_comment">
                                <form id = "comment_form">
                                    <textarea name="comment_content" class="comment_content" id="bodyText" cols="30" rows="10" placeholder="Đánh giá của bạn về phòng"></textarea>
                                    <br>
                                    <input type="button" id="addComment" value="Thêm bình luận" />
                                    <p id="alert" style="display: none;">Bình luận của bạn đang được duyệt</p>
                                </form>
                            </div>
                            '.(isset($_SESSION['username']) ? '' : '</a>');
                            ?>
                            <div class="user-comment">
                                <?php
                                $i=1;
                                    foreach($comments as $comment){
                                        echo '
                                        <div id="user-comment-'.$i.'">
                                            <b>'.($comment->id_nguoi_dung == $post_details->ten_tai_khoan ? $comment->id_nguoi_dung.' (chủ phòng )' : $comment->id_nguoi_dung).'</b>
                                            <p>'.$comment->noi_dung.'</p>
                                            <p>'.$comment->thoi_gian_binh_luan.' trước </p>
                                        </div>';
                                        $i++;
                                    }
                                ?>

                                
                            </div>
                        </div>
                    </div>
                    
                </div>
                     <!--              NGUOI DANG          -->
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
        
        <script src="./assets/javascripts/thongtinphongtronguoichothue.js?v=<?php echo time(); ?>"></script>
        <script type="text/javascript">
            $("#addComment").on("click" , function(){
                if($(".comment_content").val() == ""){
                    alert("Vui lòng nhập đủ bình luận");
                }
                else{
                    $.ajax({
                        method: "POST",// phương thức dữ liệu được truyền đi
                        url: "ajax/send_comment.php",// gọi đến file server show_data.php để xử lý
                        data: { comment_content : $(".comment_content").val() , id_room :<?php echo json_encode($_GET['id']); ?>},//lấy toàn thông tin các fields trong form bằng hàm serialize của jquery
                        success : function(response){//kết quả trả về từ server nếu gửi thành công
                            $("#bodyText").val('');
                            $("#alert").show();
                        
                            
                        }, 
                    });
                }
            });
            $("#addReport").on("click" , function(){
                if($(".report_content").val() == "" || !$(".report_content").val() || 
                    $(".report_reason").val() == "" || !$(".report_reason").val() /*|| !$(".report_reason").is("checked")*/){
                    alert($(".report_reason").val());
                    //alert("Vui lòng nhập đủ thông tin báo cáo");
                }
                else{
                    $.ajax({
                        method: "POST",// phương thức dữ liệu được truyền đi
                        url: "ajax/send_report.php",// gọi đến file server show_data.php để xử lý
                        data: { content : $(".report_content").val() , reason : $(".report_reason:checked").val() , id_room :<?php echo json_encode($_GET['id']); ?>},//lấy toàn thông tin các fields trong form bằng hàm serialize của jquery
                        success : function(response){//kết quả trả về từ server nếu gửi thành công
                            $(".report_content").val('');
                            $("#report_alert").show();
                        
                            
                        }, 
                    });
                }
            });
        </script>
        <script>
            $(".saveHome").click(function() {
            $(".stackIcons i").toggleClass("hide");
            });
        </script>
        <?php
            if($is_save){
                echo 
            '<script>
                $(".saveHome").click();
                var $is_save = true;
            </script>
            ';
            }
            else{
                echo
                '<script>
                var $is_save = false;
                </script>';
            }
        ?>

        <script>
            $(".saveHome").on("click" , function(){
                if($is_save){
                    console.log('bo luu');
                    
                    $.ajax({
                        method: "POST",// phương thức dữ liệu được truyền đi
                        url: "ajax/send_unsave_post.php",// gọi đến file server show_data.php để xử lý
                        data: { id_room :<?php echo json_encode($_GET['id']); ?>},//lấy toàn thông tin các fields trong form bằng hàm serialize của jquery
                        success : function(response){//kết quả trả về từ server nếu gửi thành công
                           console.log(response);
                            
                           console.log($(".total").html());
                        
                            
                        }, 
                    });

                    $is_save = false;
                }
                else{
                    console.log('luu');
                    
                    $.ajax({
                        method: "POST",// phương thức dữ liệu được truyền đi
                        url: "ajax/send_save_post.php",// gọi đến file server show_data.php để xử lý
                        data: { id_room :<?php echo json_encode($_GET['id']); ?>},//lấy toàn thông tin các fields trong form bằng hàm serialize của jquery
                        success : function(response){//kết quả trả về từ server nếu gửi thành công
                           
                            console.log(response);
                            console.log($(".total").html());
                        }, 
                    });
                    $is_save = true;
                }
            });
        </script>
</body>

</html>
