<?php
require_once('../models/comment.php');
require_once('../connection.php');
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
if(isset($_SESSION['username'])){
    Comment::sendComment($_POST['id_room'],$_POST['comment_content']);
}
?>