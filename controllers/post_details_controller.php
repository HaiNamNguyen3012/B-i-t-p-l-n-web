<?php
require_once('controllers/base_controller.php');
require_once('models/post_detail.php');

class PostDetailsController extends BaseController
{
  function __construct()
  {
    $this->folder = 'post_details';
  }

 
  public function showPost()
  {
    if (session_status() == PHP_SESSION_NONE) {
      session_start();
  }
    require_once('models/comment.php');
    require_once('models/savepost.php');
    $comments = Comment::showByRoom($_GET['id']);
    $post_details = PostDetail::find($_GET['id']);
    $save_post = SavePost::showNumberSave($_GET['id']);
    if(isset($_SESSION['username'])){
      $is_save = SavePost::isSave($_GET['id']);
    }
    else{
      $is_save = "";
    }
    $data = array('post_details' => $post_details , 'comments' => $comments, 'save_post' => $save_post , 'is_save' => $is_save);
    $this->render('show', $data);
  }
}


?>
