#models/adminlogin.php</br>
<?php

class Adminlogin{
    public $ten_tai_khoan;
    public $mat_khau;

    public function __construct()
    {
        $this->ten_tai_khoan=strip_tags(addslashes($_POST['user-name']));
        $this->mat_khau=strip_tags(addslashes($_POST['password']));
    }    
    static function checkUser(){
        
        var_dump($_POST);
        if(enoughInfo()){
            $db = DB::getInstance();
           // $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $admin = new Adminlogin();

           

            $query="SELECT * , count(*) as tong from admin where ten_tai_khoan='$admin->ten_tai_khoan'";
            echo $query;//////////////////////// loi loi
            
            $req = $db->query($query);
            $info= $req->fetch();
            

            if($info['tong']==1){
                
                    if(/*password_verify($admin->mat_khau,$info['mat_khau'])*/

                        // them mat khau
                        $admin->mat_khau==$info['mat_khau']){
                        //lưu vào session
                        session_start();
                        $_SESSION['username']=$admin->ten_tai_khoan;
                        $_SESSION['vai_tro'] = "admin";
                        echo "đăng nhập thành công";
                        header('Location: index.php?controller=admin');
                    }
                    else{
                        echo "mat khau ko dung";
                    }
            }
            else{
                echo "ten dang nhap khong dung";
            }
        }
        else{
            echo "vui long nhap du thong tin";
        }
    }
  
}
function enoughInfo(){
        return (isset($_POST['user-name'])&&isset($_POST['password']));
    }
    ?>
###models/adminlogin.php</br>