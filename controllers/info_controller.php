<?php
require_once('controllers/base_controller.php');


class InfoController extends BaseController
{
  function __construct()
  {
    $this->folder = 'info';
  }

  public function editInfo(){
    require_once('models/info.php');        
    isLogin();
    $info = Info::edit();
    $data = array('info' => $info);
    $this->render('editInfo', $data);

  }


  public function showInfo()
  {
    require_once('models/info.php');
    require_once('models/post.php');
    $info = Info::show($_GET['username']);
    
    $posts = Post::showByUser($_GET['username']);
    $saveposts = Post::showAllSavePost($_GET['username']);
    $data = array('info' => $info, 'posts' => $posts, 'saveposts' => $saveposts);
    $this->render('showInfo', $data);
  }
  
  
}

function isLogin(){
  if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
    
    if (isset($_SESSION['username']) && isset($_SESSION['vai_tro'])) {
      
        return true;
      
    }
    return
    header('Location: index.php?controller=error');    
  }
?>
