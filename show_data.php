<?php
require_once('models/district.php');
require_once('connection.php');
$datas =  District::show($_POST['thanh_pho']);           ///

echo '<option style="display:none" disabled selected value>Nhập quận huyện</option>';

foreach($datas as $data ){
    echo 
    '<option value="'.$data->maqh.'">'.$data->name.'</option>'; 
}





?>