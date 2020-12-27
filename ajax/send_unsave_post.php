<?php
//var_dump($_POST);
    require_once('../models/savepost.php');
    require_once('../connection.php');
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    if(isset($_SESSION['username'])){
    SavePost::deleteSavePost($_POST['id_room']);
    }
?>