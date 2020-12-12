

<?php
require_once('controllers/base_controller.php');
require_once('models/register.php');

class RegisterController extends BaseController
{
  function __construct()
  {
    $this->folder = 'register';
  }

  public function index()
  {
  
    $register = Register::insertdb();
    $data = array('register' => $register);
    $this->render('register', $data);
  }
  
}
?>

