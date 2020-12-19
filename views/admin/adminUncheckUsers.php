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
            <tr>
                <td>huyvip2000ht</td>
                <td>123123123123123123</td>
                <td>Trần </td>
                <td>Huy</td>
                <td>234567844234567844</td>
                <td>322 Mỹ Đình</td>
                <td>09644049750964404975</td>
                <td>huyvip2000ht@gmail.comcom</td>
                <td><input type="checkbox" name="user'.$a.'" value="'.$uncheckUser->ten_tai_khoan.'"></td>
            </tr>
            <tr>
                <td>huyvip2000ht</td>
                <td>123123123123123123</td>
                <td>Trần </td>
                <td>Huy</td>
                <td>234567844234567844</td>
                <td>322 Mỹ Đình</td>
                <td>09644049750964404975</td>
                <td>huyvip2000ht@gmail.comcom</td>
                <td><input type="checkbox" name="user'.$a.'" value="'.$uncheckUser->ten_tai_khoan.'"></td>
            </tr>
            <tr>
                <td>huyvip2000ht</td>
                <td>123123123123123123</td>
                <td>Trần </td>
                <td>Huy</td>
                <td>234567844234567844</td>
                <td>322 Mỹ Đình</td>
                <td>09644049750964404975</td>
                <td>huyvip2000ht@gmail.comcom</td>
                <td><input type="checkbox" name="user'.$a.'" value="'.$uncheckUser->ten_tai_khoan.'"></td>
            </tr>



        </table>
        <input type="submit" value="Xác nhận">
    </form> 
    <?php var_dump($_POST);
        ?>
</body>
</html>
###views/admin/adminuncheck.php</br>
