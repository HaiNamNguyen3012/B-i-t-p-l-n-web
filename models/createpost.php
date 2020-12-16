#models/createpost.php
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
       
        $this->nguoi_cho_thue = $_SESSION['user-name']; 
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
        $this->tieu_de = $_POST['tieu_de'];
        $this->noi_dung = $_POST['noi_dung'];
        $this->chung_chu = $_POST['chung_chu'];
        $this->phong_tam_chung = $_POST['phong_tam_chung'];
        $this->nong_lanh = $_POST['nong_lanh'];
        $this->phong_bep = $_POST['phong_bep'];
        $this->dieu_hoa = $_POST['dieu_hoa'];
        $this->ban_cong = $_POST['ban_cong'];
        $this->dien_nuoc = $_POST['dien_nuoc'];
        $this->tu_lanh = $_POST['tu_lanh'];
        $this->may_giat = $_POST['may_giat'];
        $this->giuong_tu = $_POST['giuong_tu'];
        

        
   //     echo "TẠO CONSTRUCT REGISTER";
    }

    
static function insertPost(){
    
  if(enoughInfo()){
      $db = DB::getInstance();
      $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $post = new CreatePost();
      
      $query="INSERT INTO phong (id_phong, id_nguoi_cho_thue, dia_chi, id_xa, id_qh, id_tp, gan_dia_diem, loai_phong, so_luong_phong, gia, tinh_theo, dien_tich,
                           thoi_gian_hien_thi, thoi_gian_dang_bai, duoc_duyet, duoc_thue, tieu_de, noi_dung, 
                           chung_chu, phong_tam_chung, nong_lanh, phong_bep, dieu_hoa, ban_cong, dien_nuoc, tu_lanh, may_giat, giuong_tu) 
                VALUES (NULL, '$post->nguoi_cho_thue', '$post->dia_chi', '$post->xa_phuong', '$post->quan_huyen', '$post->thanh_pho', '$post->gan_dia_diem', '$post->loai_phong', '$post->so_luong_phong', '$post->gia', '$post->tinh_theo', '$post->dien_tich',
                          '', now(), '0', '0', '$post->tieu_de', '$post->noi_dung', 
                            '$post->chung_chu', '$post->phong_tam_chung', '$post->nong_lanh', '$post->phong_bep', '$post->dieu_hoa', '$post->ban_cong', '$post->dien_nuoc', '$post->tu_lanh', '$post->may_giat', '$post->giuong_tu')";
      echo $query;
      /*try{
        $db->exec($query);
        echo "New record created successfully";
      }
      catch(PDOException $e){
        echo $query . "<br>" . $e->getMessage();
      } */

/*
          if($user->la_nguoi_thue="nct"){

            $addUser = "INSERT INTO nguoi_thue_phong (id_nguoi_thue_phong, ten_tai_khoan, mat_khau, ho, ten,
                                  so_CCCD, dia_chi, sdt, email) 
                        VALUES (NULL, '$user->ten_tai_khoan', '$hash_password', '$user->ho' , '$user->ten', 
                        $user->so_CCCD, '$user->dia_chi','$user->sdt', '$user->email')";
           // echo "INSERT người thuê phòng";
            
            }
            else{
              
              $addUser = "INSERT INTO nguoi_cho_thue (id_nguoi_cho_thue, ten_tai_khoan, mat_khau, ho, ten,
                                    so_CCCD, dia_chi, sdt, email, duoc_duyet) 
                          VALUES (NULL, '$user->ten_tai_khoan', '$hash_password', '$user->ho' , '$user->ten', 
                          $user->so_CCCD, '$user->dia_chi', '$user->sdt', '$user->email', 0)";
           //   echo "INSERT người cho thuê phòng";
            
            } 
            try{
              $db->exec($addUser);
              echo "New record created successfully";
            }
            catch(PDOException $e){
              echo $addUser . "<br>" . $e->getMessage();
            }

      
      }*/
    }
    else{
      echo "Vui lòng nhập số liệu";
    }
  }
  
}

function enoughInfo(){
  return (isset($_POST['dia_chi'])); 
  
}


?>
###models/createpost.php
