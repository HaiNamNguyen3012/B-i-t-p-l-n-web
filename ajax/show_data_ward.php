<?php
require_once('../models/ward.php');
require_once('../connection.php');
$datas =  Ward::show($_POST['quan_huyen']);           ////

echo '<option style="display:none" disabled selected value>Nhập xã phường</option>';

foreach($datas as $data ){
    echo 
    '<option value="'.$data->xaid.'">'.$data->name.'</option>'; 
}




?>