# controllers/posts_controller.php</br>

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
    session_start();
    //tiến hành kiểm tra là người dùng đã đăng nhập hay chưa
    //nếu chưa, chuyển hướng người dùng ra lại trang đăng nhập
 /*   if (!isset($_SESSION['username'])) {
      header('Location: index.php?controller=login&action=index');
    }*/
    $posts = Post::showAllForUser();
    $data = array('posts' => $posts);
    $this->render('index', $data);
  }
  /*public function showPost()
  {
    $post = Post::find($_GET['id']);
    $data = array('post' => $post);
    $this->render('show', $data);
  }*/
  public function createPost(){
    session_start();
    if (!isset($_SESSION['username'])) {
      header('Location: index.php?controller=login&action=index');
    }

    
      require_once('models/createpost.php');
      $this->folder = 'createpost';
      $post = CreatePost::insertPost();
      $data = array('createpost',$post);
      $this->render('createpost',$data);
    }
    
}





?>



### controllers/posts_controller.php</br>