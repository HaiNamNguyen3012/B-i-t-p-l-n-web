<?php
  
    class Info {
        public $ten_tai_khoan;
        public $ho;
        public $ten;
        public $so_CCCD;
        public $dia_chi;
        public $sdt;
        public $email;

        function __construct($ten_tai_khoan,$ho,$ten,$so_CCCD,$dia_chi,
        $sdt,$email){
            $this->ten_tai_khoan=$ten_tai_khoan;
            $this->ho = $ho;
            $this->ten = $ten;
            $this->so_CCCD =$so_CCCD;
            $this->dia_chi = $dia_chi;
            $this->sdt = $sdt;
            $this->email = $email;    

        }
        
        static public function show($username){
            $db = DB::getInstance();
            $query = "SELECT * FROM nguoi_cho_thue WHERE ten_tai_khoan='$username'";
            
            
            $infoUser = $db->query($query)->fetch();
            
            if(empty($infoUser)){
                $query = "SELECT * FROM nguoi_thue_phong WHERE ten_tai_khoan='$username'";
                
                $infoUser = $db->query($query)->fetch();
            }
            

            if(!is_null($infoUser)){
                return new Info($infoUser['ten_tai_khoan'],$infoUser['ho'],$infoUser['ten'],
                $infoUser['so_CCCD'],$infoUser['dia_chi'],$infoUser['sdt'],$infoUser['email']);
            }

            return null;
        }


        static public function edit(){
            $db = DB::getInstance(); 
            $vai_tro = $_SESSION['vai_tro'];
            $username= $_SESSION['username'];
            
            handlingInfo($db,$vai_tro,$username);
            
            $query = "SELECT * FROM $vai_tro WHERE ten_tai_khoan='$username'";
            $infoUser = $db->query($query)->fetch();
            var_dump($infoUser);
            

            if(!is_null($infoUser)){
                return new Info($infoUser['ten_tai_khoan'],$infoUser['ho'],$infoUser['ten'],
                $infoUser['so_CCCD'],$infoUser['dia_chi'],$infoUser['sdt'],$infoUser['email']);
            }

            return null;     
        }
        static function showAll(){          // admin
      
            $list = [];
            $db = DB::getInstance();
    
    
            handlingUser($db);
    
    
            $req = $db->query('SELECT 
                                *
                                FROM nguoi_cho_thue 
                                where duoc_duyet = 0
                             /*   LIMIT 20  */
                                ;');
    
        
    
            
            foreach ($req->fetchAll() as $item) {
                $list[] = new Info($item['ten_tai_khoan'],$item['ho'], $item['ten'], $item['so_CCCD'], 
                                $item['dia_chi'], $item['sdt'], 
                                $item['email']);    // biến $list lưu các giá trị truy vấn 
            }
    
            return $list;
            }
        
    }
    
    function handlingInfo($db,$vai_tro,$username){
        if(empty($_POST)){
            //echo "Khong can xu li";
        }
        else {
            
                
                $query="UPDATE $vai_tro SET ho= '{$_POST['ho']}' , ten= '{$_POST['ten']}' , so_CCCD= {$_POST['so_CCCD']} ,
                        dia_chi= '{$_POST['dia_chi']}' , sdt = '{$_POST['sdt']}' ,email= '{$_POST['email']}'  
                        WHERE ten_tai_khoan = '$username';";
                echo $query;
    
                try{
                    $db->exec($query);
                    echo "New record created successfully";
                  }
                  catch(PDOException $e){
                    echo $query . "<br>" . $e->getMessage();
                  }
    
            
        }
    }
    function mb_ucfirst($string)
    {
        $firstChar = mb_substr($string, 0, 1, "UTF-8");
        $then = mb_substr($string, 1, null, "UTF-8");
        return mb_strtoupper($firstChar, "UTF-8") . $then;
    }
    function handlingUser($db){
        if(empty($_POST)){
            //echo "Khong can xu li";
        }
        else {
            foreach($_POST as $user ){
                
                $query="UPDATE nguoi_cho_thue SET duoc_duyet = 1 WHERE ten_tai_khoan = '$user';";
               
    
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
