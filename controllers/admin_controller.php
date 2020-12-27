
<?php
require_once('controllers/base_controller.php');


class AdminController extends BaseController
{
  function __construct()
  {
    $this->folder = 'admin';
  }

  public function index(){
    
    isLogin();

    $data = array(null) ;
    $this->adminRender('adminIndex',$data);
  }


  public function login()
  {
    require_once('models/adminlogin.php');
    $login = Adminlogin::checkUser();
    $data = array('admin' => $login);
    $this->render('adminlogin', $data);
  }

  public function showUncheckUsers(){
    require_once('models/info.php');
    
    isLogin();
    
    $uncheckUsers = Info::showAll();
    $data = array('uncheckUsers'  => $uncheckUsers);
    $this->adminRender('adminUncheckUsers',$data);
  }

  public function showUncheckPosts(){
    require_once('models/post.php');
    isLogin();
    $posts = Post::showAllForAdmin();
    $data = array('posts' => $posts);
    $this->adminRender('adminUncheckPosts', $data);
  }

  public function showUncheckComments(){
    require_once('models/comment.php');
    isLogin();
    $uncheckComments = Comment::showAll();
    $data = array('uncheckComments'  => $uncheckComments);
    $this->adminRender('adminUncheckComments',$data);
  }
  
  public function showUncheckReports(){
    require_once('models/report.php');
    isLogin();
    $uncheckReports = Report::showAll();
    $data = array('uncheckReports'  => $uncheckReports);
    $this->adminRender('adminUncheckReports',$data);

  }

  
}

function isLogin(){
  if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
    if (isset($_SESSION['username']) && isset($_SESSION['vai_tro'])) {
      if ($_SESSION['username'] == "admin" && $_SESSION['vai_tro'] == "admin"){
        return true;
      }
    }
    return
    header('Location: index.php?controller=admin&action=login');
  }
?>

