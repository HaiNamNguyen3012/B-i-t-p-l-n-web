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
    if (session_status() == PHP_SESSION_NONE) {
      session_start();
  }
    
    $post_details = PostDetail::find($_GET['id']);
    $data = array('post_details' => $post_details);
    $this->render('show', $data);
  }
}


?>
