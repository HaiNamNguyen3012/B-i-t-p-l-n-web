<?php
    class SavePost{
        public $id_phong_tro;
        public function __construct($id_phong_tro) {
            $this->id_phong_tro = $id_phong_tro;
        }


        static function createSavePost($id_room){
            $db = DB::getInstance();
            if (session_status() == PHP_SESSION_NONE) {
                session_start();
            }
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
            $query="INSERT INTO phong_tro_nguoi_luu (id_phong_tro, id_nguoi_luu_bai) VALUES ($id_room, '{$_SESSION['username']}')";
            echo $query;
        
            try{
                $db->exec($query);
            //    echo "New record created successfully";
            }
            catch(PDOException $e){
                echo $query . "<br>" . $e->getMessage();
            } 
        }
        static function deleteSavePost($id_room){
            $db = DB::getInstance();
            if (session_status() == PHP_SESSION_NONE) {
                session_start();
            }
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            $query="DELETE FROM phong_tro_nguoi_luu WHERE id_phong_tro = $id_room AND id_nguoi_luu_bai = '{$_SESSION['username']}';";
         //   echo $query;
        
            try{
                $db->exec($query);
                
            }
            catch(PDOException $e){
                echo $query . "<br>" . $e->getMessage();
            } 
        }
        static function isSave($id_room){
            
            $db = DB::getInstance();


            handlingComment($db);


            $req = $db->query("SELECT * FROM phong_tro_nguoi_luu where id_phong_tro = '$id_room' and id_nguoi_luu_bai = '{$_SESSION['username']}';");

            $item = $req->fetchAll();
          
            
            if(empty($item))  {
           
                return false;
            }  
            
            return true;
        }
        static function showNumberSave($id_room){
            $list = [];
            $db = DB::getInstance();


            handlingComment($db);


            $req = $db->query("SELECT count(*) as tong FROM phong_tro_nguoi_luu where id_phong_tro = '$id_room';");

            foreach ($req->fetchAll() as $item) {
                $list = array("tong" =>$item['tong']);    // biến $list lưu các giá trị truy vấn 
            }
           
            return $list;
        }


        static function showSavePost(){
            $list = [];
            $db = DB::getInstance();


            handlingComment($db);


            $req = $db->query("SELECT * FROM phong_tro_nguoi_luu where id_nguoi_luu_bai = '{$_SESSION['username']}';");

            foreach ($req->fetchAll() as $item) {
                $list[] = new SavePost($item['id_phong_tro']);    // biến $list lưu các giá trị truy vấn 
            }
            
            return $list;
        }
        

    }

?>