#views/admin/adminuncheck.php</br>
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
                <th>Tên tài khoản</th>
                <th>Mật khẩu</th>
                <th>Họ</th>
                <th>Tên</th>
                <th>Số căn cước công dân</th>
                <th>Địa chỉ</th>
                <th>Số điện thoại</th>
                <th>Email</th>
            </tr>
            
            <?php    
            $a=1;  
            foreach ($uncheckUsers as $uncheckUser) {
                
            echo '
            <tr>
                <td>'.$uncheckUser->ten_tai_khoan.'</td>
                <td>'.$uncheckUser->mat_khau.'</td>
                <td>'.$uncheckUser->ho.'</td>
                <td>'.$uncheckUser->ten.'</td>
                <td>'.$uncheckUser->so_CCCD.'</td>
                <td>'.$uncheckUser->dia_chi.'</td>
                <td>'.$uncheckUser->sdt.'</td>
                <td>'.$uncheckUser->email.'</td>
                <td><input type="checkbox" name="user'.$a.'" value="'.$uncheckUser->ten_tai_khoan.'"></td>
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
###views/admin/adminuncheck.php</br>
