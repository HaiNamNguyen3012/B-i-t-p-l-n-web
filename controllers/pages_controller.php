# controllers/pages_controller.php</br>

<?php
require_once('controllers/base_controller.php');

class PagesController extends BaseController
{
  function __construct()      //hàm khởi tạo
  {
    $this->folder = 'pages';
  }

  

  public function error()
  {
    $this->render('error');
  }
}
?>
### controllers/pages_controller.php</br>
