<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post">
<?php
echo '<ul>';
$a=1;
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
}
echo '</ul>';
?>
    <input type="submit" value="Xác nhận">  
</form>
<?php var_dump($_POST);
        ?>
</body>
</html>