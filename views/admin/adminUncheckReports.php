
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
            <tr>
                <td>123123123123</td>
                <td>2345672345623456723456</td>
                <td>234567234567234567234567</td>
                <td>Nội dung phản cảm</td>
                <td>Ảnh khỏa thân, đồi trụy không phù hợp </td>
                <td>2020-12-19 14:50:16</td>
                
                <td><input type="checkbox" name="user'.$a.'" value="'.$report->id_bao_cao.'"></td>
            </tr>
            <tr>
                <td>123123123123</td>
                <td>2345672345623456723456</td>
                <td>234567234567234567234567</td>
                <td>Nội dung phản cảm</td>
                <td>Ảnh khỏa thân, đồi trụy không phù hợp </td>
                <td>2020-12-19 14:50:16</td>
                
                <td><input type="checkbox" name="user'.$a.'" value="'.$report->id_bao_cao.'"></td>
            </tr>
            <tr>
                <td>123123123123</td>
                <td>2345672345623456723456</td>
                <td>234567234567234567234567</td>
                <td>Nội dung phản cảm</td>
                <td>Ảnh khỏa thân, đồi trụy không phù hợp </td>
                <td>2020-12-19 14:50:16</td>
                
                <td><input type="checkbox" name="user'.$a.'" value="'.$report->id_bao_cao.'"></td>
            </tr>
            

        </table>
        <input type="submit" value="Xác nhận">
    </form> 
    <?php var_dump($_POST);
        ?>
</body>
</html>

