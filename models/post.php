# models/post.php</br>

<?php
class Post
{
  public $id_phong;
  public $tieu_de;
  public $gia;
  public $loai_phong;
  public $dien_tich;
  public $ho;
  public $ten;
  public $tentp;
  public $tenqh;
  public $tenxp;
  public $ten_hinh_anh;

  function __construct($id_phong, $tieu_de, $gia, $loai_phong, $dien_tich, $ho,$ten,$tentp,$tenqh,$tenxp,$ten_hinh_anh){
    $this->id_phong = $id_phong;    
    $this->tieu_de = $tieu_de;
    $this->gia= $gia;
    $this->loai_phong=$loai_phong;
    $this->dien_tich = $dien_tich;
    $this->ho = $ho;
    $this->ten = $ten;
    $this->tentp = $tentp;
    $this->tenqh = $tenqh;
    $this->tenxp = $tenxp;
    $this->ten_hinh_anh = $ten_hinh_anh;
  }

  static function showAllForUser() 
  {
    $list = [];
    $db = DB::getInstance();
    $req1 = $db->query('SELECT 
                        phong.id_phong, phong.tieu_de, phong.gia, phong.loai_phong, phong.dien_tich, 
                        nguoi_cho_thue.ho, nguoi_cho_thue.ten, 
                        tinh_thanh_pho.name as tentp, quan_huyen.name as tenqh,  xa_phuong_thi_tran.name as tenxp 
                        FROM phong 
                        inner join nguoi_cho_thue on phong.id_nguoi_cho_thue = nguoi_cho_thue.id_nguoi_cho_thue
                        inner join tinh_thanh_pho on  cast( tinh_thanh_pho.matp as int) = phong.id_tp
                        inner join quan_huyen on cast( quan_huyen.maqh as int) = phong.id_qh
                        inner join xa_phuong_thi_tran on cast( xa_phuong_thi_tran.xaid as int) = phong.id_xa
                        where phong.duoc_duyet=1
                        LIMIT 20;');


    foreach ($req1->fetchAll() as $item) {
      $req2 = $db->prepare('SELECT * from hinh_anh where id_phong=:id_phong LIMIT 1');
      $req2->execute(array('id_phong' => $item['id_phong']));
      $img = $req2->fetch();
      

      $list[] = new Post($item['id_phong'], $item['tieu_de'],$item['gia'], $item['loai_phong'], $item['dien_tich'], 
                         $item['ho'], $item['ten'], 
                         $item['tentp'], $item['tenqh'], $item['tenxp'], $img['ten_hinh_anh']);    // biến $list lưu các giá trị truy vấn 
    }

    return $list;
  }
  static function showAllForAdmin() 
  {
    $list = [];
    $db = DB::getInstance();

    handlingPost($db);

    $req1 = $db->query('SELECT 
                        phong.id_phong, phong.tieu_de, phong.gia, phong.loai_phong, phong.dien_tich, 
                        nguoi_cho_thue.ho, nguoi_cho_thue.ten, 
                        tinh_thanh_pho.name as tentp, quan_huyen.name as tenqh,  xa_phuong_thi_tran.name as tenxp 
                        FROM phong 
                        inner join nguoi_cho_thue on phong.id_nguoi_cho_thue = nguoi_cho_thue.id_nguoi_cho_thue
                        inner join tinh_thanh_pho on  cast( tinh_thanh_pho.matp as int) = phong.id_tp
                        inner join quan_huyen on cast( quan_huyen.maqh as int) = phong.id_qh
                        inner join xa_phuong_thi_tran on cast( xa_phuong_thi_tran.xaid as int) = phong.id_xa
                        where phong.duoc_duyet = 0
                        LIMIT 20;');


    foreach ($req1->fetchAll() as $item) {
      $req2 = $db->prepare('SELECT * from hinh_anh where id_phong=:id_phong LIMIT 1');
      $req2->execute(array('id_phong' => $item['id_phong']));
      $img = $req2->fetch();
      

      $list[] = new Post($item['id_phong'], $item['tieu_de'],$item['gia'], $item['loai_phong'], $item['dien_tich'], 
                         $item['ho'], $item['ten'], 
                         $item['tentp'], $item['tenqh'], $item['tenxp'], $img['ten_hinh_anh']);    // biến $list lưu các giá trị truy vấn 
    }

    return $list;
  }

}
function handlingPost($db){
  if(empty($_POST)){
    echo "Khong can xu li";
}
else {
    foreach($_POST as $posts ){
        
        
        $query="UPDATE phong SET duoc_duyet = '1' WHERE `phong`.`id_phong` = $posts;";

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

### models/post.php</br>