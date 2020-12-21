
<?php
class Post
{
  public $id_phong;
  public $tieu_de;
  public $gia;
  public $loai_phong;
  public $dien_tich;
  public $thoi_gian_hien_thi;
  public $ho;
  public $ten;
  public $tentp;
  public $tenqh;
  public $tenxp;
  public $ten_hinh_anh;

  function __construct($id_phong, $tieu_de, $gia, $loai_phong, $dien_tich,$thoi_gian_hien_thi, $ho,$ten,$tentp,$tenqh,$tenxp,$ten_hinh_anh){
    $this->id_phong = $id_phong;    
    $this->tieu_de = $tieu_de;
    $this->gia= $gia;
    $this->loai_phong=$loai_phong;
    $this->dien_tich = $dien_tich;
    $this->thoi_gian_hien_thi = $thoi_gian_hien_thi;
    $this->ho = $ho;
    $this->ten = $ten;
    $this->tentp = $tentp;
    $this->tenqh = $tenqh;
    $this->tenxp = $tenxp;
    $this->ten_hinh_anh = $ten_hinh_anh;
  }

  static function showAllForUser() 
  {
    //controller=posts&province=04&district=043&ward=01324&price=3&square=12&type-room=Chung+cư+mini
    if(isset($_GET['province'])){
      $province_query = "and phong.id_tp = cast( '{$_GET['province']}' as int) ";
    }
    else{
      $province_query = "";
    }
    if(isset($_GET['district'])){
      $district_query = "and phong.id_qh = cast( '{$_GET['district']}' as int)";
    }
    else{
      $district_query = "";
    }
    if(isset($_GET['ward'])){
      $ward_query = "and phong.id_xa = cast( '{$_GET['ward']}' as int) ";
    }
    else{
      $ward_query = "";
    }
    if(isset($_GET['price'])){
      switch ($_GET['price']) {
        case "1": //< 1 triệu
           $price_query = "and phong.gia < 1000000 ";
          break;
        case "2":    //1 -> 2 triệu
          $price_query = "and phong.gia < 2000000 and phong.gia >= 1000000 ";
          break;
        case "3":   //2 -> 3 triệu
          $price_query = "and phong.gia < 3000000 and phong.gia >= 2000000 ";
          break;
        case "4":   //3 -> 4 triệu
          $price_query = "and phong.gia < 4000000 and phong.gia >= 3000000 ";
          break;
        case "5":   //4 -> 5 triệu
          $price_query = "and phong.gia < 5000000 and phong.gia >= 4000000 ";
          break;
        case "7":   //5 -> 7 triệu
          $price_query = "and phong.gia < 7000000 and phong.gia >= 5000000 ";
          break;
        case "10":   //7 -> 10 triệu
          $price_query = "and phong.gia < 10000000 and phong.gia >= 7000000 ";
          break;
        case "15":  //10 -> 15 triệu
          $price_query = "and phong.gia < 1500000 and phong.gia >= 10000000 ";
          break;
        case "25":  //15 -> 25 triệu
          $price_query = "and phong.gia < 25000000 and phong.gia >= 15000000 ";
          break;
        case "30":  //  > 25 triệu
          $price_query = "and  phong.gia >= 25000000 ";
          break;

        default: $price_query = "";  
      }
    }
    else{
      $price_query = "";
    }

    if(isset($_GET['square'])){
      switch ($_GET['price']) {
        case "10": //< 10 
          $square_query = "and phong.dien_tich < 10";
          break;
        case "12": //10 -> 12 m
          $square_query = "and phong.dien_tich < 12 and phong.dien_tich >= 10";
          break;
        case "15": //12 -> 15 m
          $square_query = "and phong.dien_tich < 15 and phong.dien_tich >= 12";
          break;
        case "20": //15 -> 20 m
          $square_query = "and phong.dien_tich < 20 and phong.dien_tich >= 15";
          break;
        case "25": //20 -> 25 m
          $square_query = "and phong.dien_tich < 25 and phong.dien_tich >= 20";
          break;
        case "30": //25 -> 30 m
          $square_query = "and phong.dien_tich < 30 and phong.dien_tich >= 25";
          break;
        case "40": //30 -> 40 m
          $square_query = "and phong.dien_tich < 40 and phong.dien_tich >= 30";
          break;
        case "50": //40 -> 50 m 
          $square_query = "and phong.dien_tich < 50 and phong.dien_tich >= 40";
          break;
        case "75": //50 -> 75 m
          $square_query = "and phong.dien_tich < 75 and phong.dien_tich >= 50";
          break;
        case "100": //< 75 m
          $square_query = "and phong.dien_tich >= 75";
          break;
        default: $square_query = "";

    }
  }
  else{
    $square_query = "";
  }
  if(isset($_GET['type_room'])){
    $type_room_query = "and phong.loai_phong = '{$_GET['type_room']}'";
  }
  else{
    $type_room_query = "";
  }

  $where_query = "where phong.duoc_duyet = 1 ".$province_query." ".$district_query." ".$ward_query." ".$price_query." ".$square_query." ".$type_room_query." ";

  echo $where_query;

    return showPosts($where_query);
  }
  static function showAllForAdmin() 
  {
    $db = DB::getInstance();
    handlingPost($db);
    return showPosts("where phong.duoc_duyet = 0");
  }
  static function showByUser($ten_tai_khoan){
    return showPosts("where phong.duoc_duyet=1 and phong.ten_tai_khoan = '$ten_tai_khoan'");
  }

}


function showPosts($where_query){  // $where_query dạng "where duoc_duyet=1 "
  require_once('models/pagination.php');
  $list = [];
  $db = DB::getInstance();
  $query = "SELECT 
            phong.id_phong, phong.tieu_de, phong.gia, phong.loai_phong, phong.dien_tich, phong.thoi_gian_hien_thi, 
            nguoi_cho_thue.ho, nguoi_cho_thue.ten, 
            tinh_thanh_pho.name as tentp, quan_huyen.name as tenqh,  xa_phuong_thi_tran.name as tenxp 
            FROM phong 
            inner join nguoi_cho_thue on phong.ten_tai_khoan = nguoi_cho_thue.ten_tai_khoan
            inner join tinh_thanh_pho on  cast( tinh_thanh_pho.matp as int) = phong.id_tp
            inner join quan_huyen on cast( quan_huyen.maqh as int) = phong.id_qh
            inner join xa_phuong_thi_tran on cast( xa_phuong_thi_tran.xaid as int) = phong.id_xa
            ";
  $pagination = Pagination::paginationPost($where_query);
  $limit_query = "LIMIT $pagination->start, $pagination->limit";
  echo $limit_query;
  $query = "$query $where_query $limit_query";  // SELECT ..... FROM phong.... where.... limit...
  echo $query;
  $req1 = $db->query($query);


  foreach ($req1->fetchAll() as $item) {
    $req2 = $db->prepare('SELECT * from hinh_anh where id_phong=:id_phong LIMIT 1');
    $req2->execute(array('id_phong' => $item['id_phong']));
    $img = $req2->fetch();
    
    $item['thoi_gian_hien_thi'] = handlingTime($item['thoi_gian_hien_thi']);
    $list[] = new Post($item['id_phong'], $item['tieu_de'],$item['gia'], $item['loai_phong'], $item['dien_tich'],  $item['thoi_gian_hien_thi'] , 
                       $item['ho'], $item['ten'], 
                       $item['tentp'], $item['tenqh'], $item['tenxp'], $img['ten_hinh_anh']);    // biến $list lưu các giá trị truy vấn 
  }
  

  $list[] = array('start' => $pagination->start, 'limit' => $pagination->limit , 'current_page' =>$pagination->current_page , 'total_page' => $pagination->total_page);
  
  
  return $list;

}

function handlingTime($time){
  date_default_timezone_set('Asia/Ho_Chi_Minh');
  $date = time();
  $subtract = $date - strtotime($time);
  if($subtract > 60){     // phut
    if($subtract > 3600){  // gio 
      if($subtract > 86400){   //ngay
        if($subtract > 604800){ //tuan
          if($subtract > 2592000){  //thang
            if($subtract > 31536000){ //nam
              $subtract = round($subtract/31536000).' năm';   //  năm nhuận năm ko nhuận
            }
            else{
              $subtract = round($subtract/2592000).' tháng';  // 30 ngày = 1 tháng
            }
          }
          else{
            $subtract = round($subtract/604800).' tuần';
          }
        }
        else{
          $subtract = round($subtract/86400).' ngày';
        }
      }
      else{
        $subtract = round($subtract/3600).' giờ';
      }
    }
    else{
      $subtract = round($subtract/60).' phút';
    }
  }
  return $subtract;
}



function handlingPost($db){
  if(empty($_POST)){
    echo "Khong can xu li";
}
else {
    foreach($_POST as $posts ){
        
        
        $query="UPDATE phong SET duoc_duyet = '1', thoi_gian_hien_thi=now() WHERE `phong`.`id_phong` = $posts;";

        try{
            $db->exec($query);
            echo "New record created successfully";
          }
          catch(PDOException $e){
            echo $query . "<br>" . $e->getMessage();
          }

    }
}
}

?>

