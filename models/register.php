<?php

class Register
{
  public $id;
  public $ten_tai_khoan;
  public $mat_khau;
  
  public $ho;
  public $ten;
  public $so_CCCD;
  public $dia_chi;
  public $sdt;
  public $email;
  public $la_nguoi_thue;

  public $nhap_lai_mat_khau;

    public function __construct()
    
    {
       
        $this->ten_tai_khoan = $_POST['user-name'];
        $this->mat_khau = $_POST['password'];
        $this->ho = $_POST['first-name'];
        $this->ten = $_POST['last-name'];
        $this->so_CCCD = $_POST['cmt'];
        $this->dia_chi = $_POST['diachi'];
        $this->sdt = $_POST['tel'];
        $this->email = $_POST['email'];
        $this->la_nguoi_thue = $_POST['users'];
        $this->nhap_lai_mat_khau = $_POST['re-password'];
        
        echo "TẠO CONSTRUCT REGISTER";
    }

    
static function insertdb(){
    if(isset($_POST['user-name']) && isset($_POST['password']) && isset($_POST['first-name'])//.........................
    ){
      $db = DB::getInstance();
      $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $user = new Register();
      echo "user user-name: ".$user->ten_tai_khoan;



   /*   if(mysqli_num_rows($db->query("SELECT ten_tai_khoan from nguoi_thue_phong where ten_tai_khoan = $user->ten_tai_khoan"))>0
      || mysqli_num_rows($db->query("SELECT ten_tai_khoan from nguoi_cho_thue   where ten_tai_khoan = $user->ten_tai_khoan"))>0 ){
            ////////// them sau
            echo "ten tai khoan da co nguoi dung";
          }*/   
          // CẦN THÊM SAU !!!!!


      $hash_password = password_hash($user->mat_khau,PASSWORD_DEFAULT);

      echo "</br>".$user->ten_tai_khoan."</br>" .$hash_password."</br> ". $user->ho."</br> ". $user->ten."</br> ". 
      $user->so_CCCD."</br> ". $user->dia_chi."</br> ".$user->sdt."</br> ". $user->email;


      if($user->la_nguoi_thue="nct"){

        $addUser = "INSERT INTO nguoi_thue_phong (id_nguoi_thue_phong, ten_tai_khoan, mat_khau, ho, ten,
                              so_CCCD, dia_chi, sdt, email) 
                    VALUES (NULL, '$user->ten_tai_khoan', '$hash_password', '$user->ho' , '$user->ten', 
                    $user->so_CCCD, '$user->dia_chi','$user->sdt', '$user->email')";
        echo "INSERT người thuê phòng";
        
        }
        else{
          
          $addUser = "INSERT INTO `nguoi_cho_thue` (`id_nguoi_cho_thue`, `ten_tai_khoan`, `mat_khau`, `ho`, `ten`,
                                `so_CCCD`, `dia_chi`, `sdt`, `email`, duoc_duyet) 
                      VALUES (NULL, '$user->ten_tai_khoan', '$hash_password', '$user->ho' , '$user->ten', 
                      $user->so_CCCD, '$user->dia_chi', '$user->sdt', '$user->email', 0)";
          echo "INSERT người cho thuê phòng";
        
        } 
        try{
           $db->exec($addUser);
           echo "New record created successfully";
        }
        catch(PDOException $e){
          echo $addUser . "<br>" . $e->getMessage();
        }

      
      }
  }
  
}




?>