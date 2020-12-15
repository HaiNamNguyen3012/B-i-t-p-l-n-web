#controllers/admin_controller.php</br>
<?php
require_once('controllers/base_controller.php');


class AdminController extends BaseController
{
  function __construct()
  {
    $this->folder = 'admin';
  }

  public function login()
  {
    require_once('models/adminlogin.php');
    $login = Adminlogin::checkUser();
    $data = array('admin' => $login);
    $this->render('adminlogin', $data);
  }
  public function showUncheckUsers(){
    require_once('models/adminuncheck.php');
    
    session_start();
    if (!isset($_SESSION['username'])) {
        header('Location: index.php?controller=admin&action=login');
    }
    
    $uncheckUsers = AdminUnCheck::showAll();
    $data = array('uncheckUsers'  => $uncheckUsers);
    $this->render('adminuncheck',$data);
  }

  
}
?>
###controllers/admin_controller.php</br>
