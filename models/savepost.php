<?php
    class SavePost{
        public $id_phong_tro;
        public function __construct($id_phong_tro) {
            $this->id_phong_tro = $id_phong_tro;
        }


        static function createSavePost($id_room){
            $db = DB::getInstance();
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
            $query="INSERT INTO phong_tro_nguoi_luu (id_phong_tro, id_nguoi_luu_bai) VALUES ($id_room, '{$_SESSION['username']}')";
            echo $query;
        
            try{
                $db->exec($query);
                echo "New record created successfully";
            }
            catch(PDOException $e){
                echo $query . "<br>" . $e->getMessage();
            } 
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