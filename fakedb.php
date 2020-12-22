<?php 
require_once('connection.php');
$db = DB::getInstance();
  $query = "SELECT count(*) as tong from phong";
  $total_records = $db->query($query)->fetch()['tong'];
  var_dump($total_records);
  $current_page = isset($_GET['page']) ? $_GET['page'] : 1;
  $limit = 20;
  $total_page = ceil($total_records / $limit);


  ?>