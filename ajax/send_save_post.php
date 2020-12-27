<?php
//var_dump($_POST);
    require_once('../models/savepost.php');
    require_once('../connection.php');
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }

  
    if(isset($_SESSION['username'])){
        
        SavePost::createSavePost($_POST['id_room']);
    }
   // echo "hfshdasidasd";

?>