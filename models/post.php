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

  static function all() /// sua lai
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
                        LIMIT 20;');

   // $req2 = $db->prepare('SELECT * from hinh_anh where id_phong=:id_phong LIMIT 1');
  //  $req2->execute(array('id_phong' => $item['id_phong']));


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
  static function find($id_phong) // chua sua
  {
    echo "dùng find id";
    $db = DB::getInstance();
    $req = $db->prepare('SELECT * FROM phong 
                          inner join nguoi_cho_thue on phong.id_nguoi_cho_thue=nguoi_cho_thue.id_nguoi_cho_thue
                          inner join tinh_thanh_pho on  cast(tinh_thanh_pho.matp as int)  = phong.id_tp
                          inner join quan_huyen on cast(quan_huyen.maqh as int) = phong.id_qh
                          inner join xa_phuong_thi_tran on cast(xa_phuong_thi_tran.xaid as int) = phong.id_xa
                          inner join info on info.id_info= phong.id_phong
                          WHERE id_phong = :id_phong');  ///////
    $req->execute(array('id_phong' => $id_phong));

    $item = $req->fetch();
    if (isset($item['id_phong'])) {
      return new Post($item['id_phong'], $item['ho'], $item['ten'], 
                      $item['tieu_de'], $item['noi_dung'], $item['so_nha'], $item['duong'], 
                      $item['gan_dia_diem'], $item['loai_phong'], $item['so_luong_phong'], // thieu dia chi
                      $item['gia'], $item['tinh_theo'], $item['dien_tich'], $item['thoi_gian_hien_thi']);
    }
    return null;
  }
}

?>

### models/post.php</br>