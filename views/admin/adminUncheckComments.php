
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <table>
            <tr>
                <th>ID người dùng</th>
                <th>ID bình luận</th>
                <th>ID phòng</th>
                <th>Nội dung</th>
                <th>Được duyệt</th>
                <th>Đánh giá</th>
                <th>Thời gian bình luận</th>
                <th>Phê duyệt bình luận</th>
                
            </tr>
            
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
            <tr>
                <td>123456123456</td>
                <td>123456123456</td>
                <td>123456123456</td>
                <td>Wow phòng đẹp quá, hôm nào mình qua đây xem được vậy nhỉ ???</td>
                <td>0</td>
                <td>5</td>
                <td>2020-12-19 14:50:16</td>
                
                <td><input type="checkbox" name="user'.$a.'" value="'.$comment->id_binh_luan.'"></td>
            </tr>
            <tr>
                <td>123456123456</td>
                <td>123456123456</td>
                <td>123456123456</td>
                <td>Wow phòng đẹp quá, hôm nào mình qua đây xem được vậy nhỉ ???</td>
                <td>0</td>
                <td>5</td>
                <td>2020-12-19 14:50:16</td>
                
                <td><input type="checkbox" name="user'.$a.'" value="'.$comment->id_binh_luan.'"></td>
            </tr>
            <tr>
                <td>123456123456</td>
                <td>123456123456</td>
                <td>123456123456</td>
                <td>Wow phòng đẹp quá, hôm nào mình qua đây xem được vậy nhỉ ???</td>
                <td>0</td>
                <td>5</td>
                <td>2020-12-19 14:50:16</td>
                
                <td><input type="checkbox" name="user'.$a.'" value="'.$comment->id_binh_luan.'"></td>
            </tr>


        </table>
        <input type="submit" value="Xác nhận">
    </form> 
    <?php var_dump($_POST);
        ?>
</body>
</html>

