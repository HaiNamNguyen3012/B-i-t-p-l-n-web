<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="../lib/jquery-3.5.1.min.js"></script>
    <link rel="stylesheet" href="./icon/css/all.min.css">
    <link rel="stylesheet" href="./assets/stylesheets/nguoichothue.css?v=<?php echo time(); ?>">
    
    <title>Trang chủ</title>
    <script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
    <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <title>Trang chủ</title>
</head>

<body>
    <form method="get" action="" id="form">
        <div class="filter container">
            <div class="row filter-children">
                <select id="controller" name="controller" style="display: none;">
                    <option value="posts"></option>
                </select>
               <!-- <div class="col-sm-1 filter-children-children">
                    <button>
                        <i class="fas fa-filter"></i>
                        <p>Lọc</p>
                    </button>
                </div>-->
                
                <div class="col-sm-10 select">
                    <select name="thanh_pho" id="province" class="province">
                        <option  style="display:none" disabled selected value>Nhập tỉnh thành phố</option>
                            <?php 
                                foreach($provinces as $province){
                                echo'
                                <option value="'.$province->matp.'">'.$province->name.'</option>'; 
                                }
                            ?>
                    </select>
                    <select name="quan_huyen" id="district" class ="district" >
                            <option  style="display:none" disabled selected value>Nhập quận huyện</option>
                    </select>  
                    <select name="xa_phuong" id="ward" class = "ward">
                        <option  style="display:none" disabled selected value>Nhập xã phường</option>
                    </select>
                    <select name="price" id="price">
                        <option  style="display:none" disabled selected value>Nhập giá phòng</option>
                        <option value="1">< 1 triệu</option>
                        <option value="2">1 -> 2 triệu</option>
                        <option value="3">2 -> 3 triệu</option>
                        <option value="4">3 -> 4 triệu</option>
                        <option value="5">4 -> 5 triệu</option>
                        <option value="7">5 -> 7 triệu</option>
                        <option value="10">7 -> 10 triệu</option>
                        <option value="15">10 -> 15 triệu</option>
                        <option value="25">15 -> 25 triệu</option>
                        <option value="30">> 25 triệu</option>
                    </select>
                    <select name="square" id="square">
                        <option  style="display:none" disabled selected value>Nhập diện tích</option>
                        <option value="10">< 10 m</option>
                        <option value="12">10 -> 12 m</option>
                        <option value="15">12 -> 15 m</option>
                        <option value="20">15 -> 20 m</option>
                        <option value="25">20 -> 25 m</option>
                        <option value="30">25 -> 30 m</option>
                        <option value="40">30 -> 40 m</option>
                        <option value="50">40 -> 50 m</option>
                        <option value="75">50 -> 75 m</option>
                        <option value="100">> 75 m</option>
                    </select>
                    <select name="type_room" id="type_room">
                        <option  style="display:none" disabled selected value>Nhập loại phòng</option>
                        <option value="Phòng trọ">Phòng trọ</option>
                        <option value="Chung cư mini">Chung cư mini</option>
                        <option value="Nhà nguyên căn">Nhà nguyên căn</option>
                        <option value="Chung cư nguyên căn">Chung cư nguyên căn</option>
                    </select>
                </div>
                <div class="col-sm-1 submit">
                    <input type="submit">
                </div>
            </div>
        </div>
    </form>
    <div class="container-fluid content"><!--
        <div class="container main-content-header">
            <h4>Các phòng tôi cho thuê</h4>
        </div>  -->
        <div class="container main-content">
        <?php
            $i = 0;
            if(count($posts) > 1){
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
                        <h4>'.($post->gia > 1000000 ? $post->gia/1000000 .' triệu' : $post->gia/100000 .' trăm nghìn').'</h4>
                        <div id="thong-tin-co-ban1">
                            <p id="infor-owner1">Người đăng: '.$post->ho.' '.$post->ten.'</p>
                            <p id="time1">'.$post->thoi_gian_hien_thi.' trước</p>
                            <p id="city1">'.$post->tentp.', '.$post->tenqh.'</p>
                        </div>
                    </div>
                </div>';
                    
                        if (++$i == (count($posts)-1)) break;
                    }
                }
                else {
                    echo "Không có phòng nào phù hợp yêu cầu của bạn !!!";
                }

                   
            ?>
            
        </div>
    </div>
    <div class="paginations" style="text-align: center">
           <?php 
           
            $current_page = $posts[count($posts)-1]['current_page'];
            $total_page = $posts[count($posts)-1]['total_page'];
            // nếu current_page > 1 và total_page > 1 mới hiển thị nút prev
            if ($current_page > 1 && $total_page > 1){
                echo '<a href="index.php?controller=posts&page='.($current_page-1).'" class="text-center" >  Trang trước  </a>  ';
            }
 
            // Lặp khoảng giữa

            if($current_page<=2){
                $start=1;
            }
            else{
                $start = $current_page -2;

            }
            if($current_page <= $total_page - 2){
                $finish = $current_page + 2;

            }
            else{
                $finish = $total_page;
            }


            for ($i = 1; $i <= $total_page; $i++){
                // Nếu là trang hiện tại thì hiển thị thẻ span
                // ngược lại hiển thị thẻ a
                if ($i == $current_page){
                    echo '<span>  Trang '.$i.'  </span> ';
                }
                else{
                    echo '<a  href="index.php?controller=posts&page='.$i.'" class="text-center">  Trang '.$i.'  </a>';
                }
            }
 
            // nếu current_page < $total_page và total_page > 1 mới hiển thị nút prev
            if ($current_page < $total_page && $total_page > 1){
                echo '<a href="index.php?controller=posts&page='.($current_page+1).'" class="text-center">  Trang sau  </a> ';
            }
           ?>
    </div>
    


        <script type="text/javascript">
		$("#province").change(function(){
			$.ajax({
				method: "POST",// phương thức dữ liệu được truyền đi
				url: "ajax/show_data.php",// gọi đến file server show_data.php để xử lý
				data: $("#form").serialize(),//lấy toàn thông tin các fields trong form bằng hàm serialize của jquery
				success : function(response){//kết quả trả về từ server nếu gửi thành công
                  //  console.log(response);
                    $('#district').children().not(':first').remove();
                    $('#district').children().replaceWith(response);
                   
                    $('#ward').children().not(':first').remove();
                    $('#ward').children().replaceWith('<option  style="display:none" disabled selected value>Nhập xã phường</option>');
                  //  console.log('okokoko');
				}
			});
        });
        $("#district").change(function(){
			$.ajax({
				method: "POST",// phương thức dữ liệu được truyền đi
				url: "ajax/show_data_ward.php",// gọi đến file server show_data.php để xử lý
				data: $("#form").serialize(),//lấy toàn thông tin các fields trong form bằng hàm serialize của jquery
				success : function(response){//kết quả trả về từ server nếu gửi thành công
                  //  console.log(response);
                    $('#ward').children().not(':first').remove();
                    $('#ward').children().replaceWith(response);
                  //  console.log('nonono');
				}
			});
        });
        
		
</script>
</body>

</html>
