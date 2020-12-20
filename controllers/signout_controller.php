<?php
require_once('controllers/base_controller.php');


class SignoutController extends BaseController
{
  function __construct()
  {
   // $this->folder = 'signout';
  }

  public function index()
  {
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    session_destroy();
    header('Location: index.php?controller=posts');
  }
}
?>