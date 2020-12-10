# routes.php</br>

<?php
$controllers = array(
  'pages' => ['home', 'error'],
  'posts' => ['index','showPost'],
  'post_details' => ['showPost'] ,
  'register' => ['index'],
  'login'  => ['index'],
  
  // bổ sung thêm
); // Các controllers trong hệ thống và các action có thể gọi ra từ controller đó.

// Nếu các tham số nhận được từ URL không hợp lệ (không thuộc list controller và action có thể gọi
// thì trang báo lỗi sẽ được gọi ra.
if (!array_key_exists($controller, $controllers) || !in_array($action, $controllers[$controller])) { // !$controller!='home'||!$action!='home','error'
  // array_key_exists: kiem tra xem $controller co o trong $controllers hay khong
  // in_array : gan tuong tu nhu vay ???
  $controller = 'pages';
  $action = 'error';
}
echo 'controller :'.$controller.'<br>';
echo 'action :'.$action.'<br>';

// Nhúng file định nghĩa controller vào để có thể dùng được class định nghĩa trong file đó
include_once('controllers/' . $controller . '_controller.php');
// require khác include ở chỗ là require nếu ko được sẽ xảy ra error và ko chạy script nữa  
// còn include nếu ko được thì xảy  ra warning và chạy tiếp 

// Tạo ra tên controller class từ các giá trị lấy được từ URL sau đó gọi ra để hiển thị trả về cho người dùng.
$klass = str_replace('_', '', ucwords($controller, '_')) . 'Controller';  //  upper case ở những từ sau '_' và đầu dòng 
// abc_xyz => AbcXyzController 

$controller = new $klass;
$controller->$action();



?>

### routes.php</br>
