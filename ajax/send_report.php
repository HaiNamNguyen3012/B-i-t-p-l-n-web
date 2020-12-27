<?php
require_once('../models/report.php');
require_once('../connection.php');
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
if(isset($_SESSION['username'])){
Report::sendReport($_POST['id_room'],$_POST['reason'],$_POST['content']);
}
?>