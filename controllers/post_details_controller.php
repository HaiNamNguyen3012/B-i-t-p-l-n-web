# controllers/post_details_controller.php</br>
<?php
require_once('controllers/base_controller.php');
require_once('models/post_detail.php');

class PostDetailsController extends BaseController
{
  function __construct()
  {
    $this->folder = 'post_details';
  }

 /* public function index()
  {
    $posts = Post::all();
    $data = array('posts' => $posts);
    $this->render('index', $data);
  }*/
  public function showPost()
  {
    
    
    $post_details = PostDetail::find($_GET['id']);
    $data = array('post_details' => $post_details);
    $this->render('show', $data);
  }
}


?>
### controllers/post_details_controller.php</br>