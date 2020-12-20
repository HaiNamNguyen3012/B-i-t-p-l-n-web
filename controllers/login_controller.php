
<?php
require_once('controllers/base_controller.php');
require_once('models/login.php');

class LoginController extends BaseController
{
  function __construct()
  {
    $this->folder = 'login';
  }

  public function index()
  {
  
    $login = Login::checkUser();
    $data = array('login' => $login);
    $this->render('login', $data);
  }
  
}
?>

