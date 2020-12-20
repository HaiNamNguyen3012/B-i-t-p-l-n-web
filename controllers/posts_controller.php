
<?php
require_once('controllers/base_controller.php');
require_once('models/post.php');

class PostsController extends BaseController
{
  function __construct()
  {
    $this->folder = 'posts';
  }

  public function index()
  {
    if (session_status() == PHP_SESSION_NONE) {
      session_start();
  }
    
    $posts = Post::showAllForUser();
    $data = array('posts' => $posts);
    $this->render('index', $data);
  }
  
  public function createPost(){
      isLogin();

      require_once('models/createpost.php');
      $this->folder = 'createpost';
      $post = CreatePost::insertPost();
      $data = array('createpost',$post);
      $this->render('createpost',$data);
    }
}
function isLogin(){
  if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
  if (isset($_SESSION['username']) && isset($_SESSION['vai_tro'])) {
    if ($_SESSION['vai_tro'] == "nguoi_cho_thue"){
      return true;
    }
  }
  return
  header('Location: index.php?controller=error');
}





?>



