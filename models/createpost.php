<?php

class CreatePost
{
  
  public $nguoi_cho_thue; 
  public $dia_chi;
  public $xa_phuong;
  public $quan_huyen;
  public $thanh_pho;
  public $gan_dia_diem;
  public $loai_phong;
  public $so_luong_phong;
  public $gia;
  public $tinh_theo;
  public $dien_tich;
  public $thoi_han_dang_bai;
  public $tieu_de;
  public $noi_dung;
  public $chung_chu;
  public $phong_tam_chung;
  public $nong_lanh;
  public $phong_bep;
  public $dieu_hoa;
  public $ban_cong;
  public $dien_nuoc;
  public $tu_lanh;
  public $may_giat;
  public $giuong_tu;
  public $cac_anh;

    public function __construct()
    
    {
       
        $this->nguoi_cho_thue = $_SESSION['username']; 
        $this->dia_chi = $_POST['dia_chi'];
        $this->xa_phuong = $_POST['xa_phuong'];
        $this->quan_huyen = $_POST['quan_huyen'];
        $this->thanh_pho = $_POST['thanh_pho'];
        $this->gan_dia_diem = $_POST['gan_dia_diem'];
        $this->loai_phong = $_POST['loai_phong'];
        $this->so_luong_phong = $_POST['so_luong_phong'];
        $this->gia = $_POST['gia'];
        $this->tinh_theo = $_POST['tinh_theo'];
        $this->dien_tich = $_POST['dien_tich'];
        $this->thoi_han_dang_bai = $_POST['thoi_han_dang_bai'];
        $this->tieu_de = $_POST['tieu_de'];
        $this->noi_dung = $_POST['noi_dung'];
        $this->chung_chu = $_POST['chung_chu'];
        $this->phong_tam_chung = $_POST['phong_tam_chung'];
        $this->nong_lanh = $_POST['nong_lanh'];
        $this->phong_bep = $_POST['phong_bep'];
        $this->dieu_hoa = $_POST['dieu_hoa'];
        $this->ban_cong = $_POST['ban_cong'];
        $this->dien_nuoc = $_POST['dien_nuoc'];
        if(isset($_POST['tu_lanh'])) $this->tu_lanh = $_POST['tu_lanh'];
        if(isset($_POST['may_giat'])) $this->may_giat = $_POST['may_giat'];
        if(isset($_POST['giuong_tu'])) $this->giuong_tu = $_POST['giuong_tu'];
        $this->cac_anh = $_FILES['cac_anh'];

        
   //     echo "TẠO CONSTRUCT REGISTER";
    }

    
static function insertPost(){
    var_dump($_SESSION);
    echo $_SESSION['username'];
  if(enoughInfo()){
      $db = DB::getInstance();
      $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $post = new CreatePost();
      
      
      $id = getId($db);
      imageHandling($db,$id);


      $query="INSERT INTO phong (id_phong, ten_tai_khoan, dia_chi, id_xa, id_qh, id_tp, gan_dia_diem, loai_phong, so_luong_phong, gia, tinh_theo, dien_tich,
                           thoi_gian_hien_thi, thoi_gian_dang_bai,thoi_han_dang_bai, duoc_duyet, duoc_thue, tieu_de, noi_dung, 
                           chung_chu, phong_tam_chung, nong_lanh, phong_bep, dieu_hoa, ban_cong, dien_nuoc, tu_lanh, may_giat, giuong_tu) 
                VALUES (NULL, '$post->nguoi_cho_thue', '$post->dia_chi', '$post->xa_phuong', '$post->quan_huyen', '$post->thanh_pho', '$post->gan_dia_diem', '$post->loai_phong', '$post->so_luong_phong', '$post->gia', '$post->tinh_theo', '$post->dien_tich',
                          '', now(), $post->thoi_han_dang_bai ,'0', '0', '$post->tieu_de', '$post->noi_dung', 
                            '$post->chung_chu', '$post->phong_tam_chung', '$post->nong_lanh', '$post->phong_bep', '$post->dieu_hoa', '$post->ban_cong', '$post->dien_nuoc', '$post->tu_lanh', '$post->may_giat', '$post->giuong_tu')";
      echo $query;
   
      try{
        $db->exec($query);
        echo "New record created successfully";
      }
      catch(PDOException $e){
        echo $query . "<br>" . $e->getMessage();
      } 


    }
    else{
      echo "Vui lòng nhập số liệu";
    }
  }
  
}

function enoughInfo(){
  return (isset($_POST['dia_chi'])); 
  
}
function getId($db){
  $query = "SELECT AUTO_INCREMENT
            FROM information_schema.tables
            WHERE table_name = 'phong'
            AND table_schema = 'phong_tro' ;";
  
  $id =  $db->query($query)->fetch();
  return $id['AUTO_INCREMENT'];

}
function imageHandling($db,$id_phong){
  extract($_POST);
  $error=array();
  $extension=array("jpeg","jpg","png","gif");
  foreach($_FILES["cac_anh"]["tmp_name"] as $key=>$tmp_name) {
      $file_name=$_FILES["cac_anh"]["name"][$key];
      $file_tmp=$_FILES["cac_anh"]["tmp_name"][$key];
      $ext=pathinfo($file_name,PATHINFO_EXTENSION);

      if(in_array($ext,$extension)) {
          if(!file_exists("assets/images/phong_tro/".$file_name)) {
              move_uploaded_file($file_tmp=$_FILES["cac_anh"]["tmp_name"][$key],"assets/images/phong_tro/".$file_name);
              echo "filename".$file_name;
              insertImageToDb($db,$id_phong,$file_name);
          }
          else {
              $filename=basename($file_name,$ext);
              $newFileName=$filename.time().".".$ext;
              echo "newfilename".$newFileName;
              move_uploaded_file($file_tmp=$_FILES["cac_anh"]["tmp_name"][$key],"assets/images/phong_tro/".$newFileName);
              insertImageToDb($db,$id_phong,$newFileName);
          }
      }
      else {
          array_push($error,"$file_name, ");
      }
  }
}
function insertImageToDb($db,$id_phong,$ten_anh){
  $query = "INSERT INTO hinh_anh (id_hinh_anh, ten_hinh_anh, id_phong) VALUES (NULL, '$ten_anh', '$id_phong')";
  try{
    $db->exec($query);
    echo "New record created successfully";
    echo $ten_anh."</br>";
  }
  catch(PDOException $e){
    echo $query . "</br>" . $e->getMessage();
  } 
}

?>
