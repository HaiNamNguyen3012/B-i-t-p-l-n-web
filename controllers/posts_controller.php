
<?php
require_once('controllers/base_controller.php');
require_once('models/post.php');

class PostsController extends BaseController
{
  function __construct()
  {
    $this->folder = 'posts';
  }

  public function index(){
    if (session_status() == PHP_SESSION_NONE) {
      session_start();
  }
    require_once('models/province.php');
    
    $posts = Post::showAllForUser();
    $provinces = Province::show();
    $data = array('posts' => $posts , 'provinces' => $provinces );
    $this->render('post', $data);
  }
  
  public function createPost(){
      isLogin();
      require_once('models/createpost.php');
      require_once('models/province.php');
      $this->folder = 'createpost';
      if(isAdmin()){
        $post = CreatePost::insertPostForAdmin();
      }
      else{
        $post = CreatePost::insertPost();
      }
      
      $provinces = Province::show();
      $data = array('createpost' => $post , 'provinces' => $provinces);
      $this->render('createpost',$data);
    }
}
function isLogin(){
  if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
  if (isset($_SESSION['username']) && isset($_SESSION['vai_tro'])) {
    if ($_SESSION['vai_tro'] == "nguoi_cho_thue" || $_SESSION['vai_tro'] == "admin"){
      return true;
    }
  }
  return
  header('Location: index.php?controller=error');
}
function isAdmin(){
  if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
  if (isset($_SESSION['username']) && isset($_SESSION['vai_tro'])) {
    if ($_SESSION['vai_tro'] == "admin"){
      return true;
    }
  }
  return false;
}





?>



