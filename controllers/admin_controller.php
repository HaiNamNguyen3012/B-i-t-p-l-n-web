#controllers/admin_controller.php</br>
<?php
require_once('controllers/base_controller.php');


class AdminController extends BaseController
{
  function __construct()
  {
    $this->folder = 'admin';
  }

  public function index(){
    session_start();
    isLogin();

    $data = array(null) ;
    $this->render('adminIndex',$data);
  }


  public function login()
  {
    require_once('models/adminlogin.php');
    $login = Adminlogin::checkUser();
    $data = array('admin' => $login);
    $this->render('adminlogin', $data);
  }

  public function showUncheckUsers(){
    require_once('models/adminUncheckUsers.php');
    
    isLogin();
    
    $uncheckUsers = AdminUnCheck::showAll();
    $data = array('uncheckUsers'  => $uncheckUsers);
    $this->render('adminUncheckUsers',$data);
  }

  public function showUncheckPosts(){
    require_once('models/post.php');
    isLogin();
    $posts = Post::showAllForAdmin();
    $data = array('posts' => $posts);
    $this->render('adminUncheckPosts', $data);
  }

  public function showUncheckComments(){
    require_once('models/adminUncheckComments.php');
    isLogin();
    $uncheckComments = AdminUnCheckComments::showAll();
    $data = array('uncheckComments'  => $uncheckComments);
    $this->render('adminUncheckComments',$data);
  }
  
  public function showUncheckReports(){
    require_once('models/adminUncheckReports.php');
    isLogin();
    $uncheckReports = AdminUnCheckReports::showAll();
    $data = array('uncheckReports'  => $uncheckReports);
    $this->render('adminUncheckReports',$data);

  }

  
}

function isLogin(){
    session_start();
    if (isset($_SESSION['username']) && isset($_SESSION['vai_tro'])) {
      if ($_SESSION['username'] == "admin" && $_SESSION['vai_tro'] == "admin"){
        return true;
      }
    }
    return
    header('Location: index.php?controller=admin&action=login');
  }
?>
###controllers/admin_controller.php</br>
