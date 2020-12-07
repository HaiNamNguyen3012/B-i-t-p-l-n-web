# views/posts/index.php</br>

<?php
echo '<ul>';
foreach ($posts as $post) {
  echo 
  '<li>
    <a href="index.php?controller=post_details&action=showPost&id=' . $post->id_phong . '">' . $post->tieu_de . '</a>
    <ul>
      <li>Giá: '.$post->gia.'</li>
      <li>Loại phòng: '.$post->loai_phong.'</li>
      <li>Diện tích: '.$post->dien_tich.' m<sup>2</sup></li>
      <li>Đăng bởi: '.$post->ho.' '.$post->ten.'</li>
      <li>'.$post->tentp.'</li>
      <li>'.$post->tenqh.'</li>
      <li>'.$post->tenxp.'</li>
      <li>Ảnh: '.$post->ten_hinh_anh.'</li>

    </ul>
  </li>';
}
echo '</ul>';
?>

### views/posts/index.php</br>
