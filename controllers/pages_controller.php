# controllers/pages_controller.php</br>

<?php
require_once('controllers/base_controller.php');

class PagesController extends BaseController
{
  function __construct()      //hàm khởi tạo
  {
    $this->folder = 'pages';
  }

  public function home()
  {
    $data = array(
      'name' => 'Sang Beo',
      'age' => 22
    );
    $this->render('home', $data);
  }

  public function error()
  {
    $this->render('error');
  }
}
?>
### controllers/pages_controller.php</br>
