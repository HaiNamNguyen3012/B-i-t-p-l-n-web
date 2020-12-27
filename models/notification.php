<?php 

class Notification{
    public $id_thong_bao;
    public $ten_nguoi_nhan;
    public $id_phong_tro;
    public $id_trang_thai;
    public $thoi_gian_thong_bao;

    public function __construct($ten_nguoi_nhan,$id_phong_tro,$id_trang_thai,$thoi_gian_thong_bao) {
        $this->ten_nguoi_nhan = $ten_nguoi_nhan;
        $this->id_phong_tro = $id_phong_tro;
        $this->id_trang_thai = $id_trang_thai;
        $this->thoi_gian_thong_bao = $thoi_gian_thong_bao;
    }

    static function showNotification(){
        $list = [];
        $db = DB::getInstance();

        $query = "SELECT * FROM thong_bao where ten_nguoi_nhan='{$_SESSION['username']}';";

        $req = $db->query($query);
 
        foreach ($req->fetchAll() as $item) {
            $list[] = new Notification($item['ten_nguoi_nhan'],$item['id_phong_tro'],$item['trang_thai'],$item['thoi_gian_thong_bao']);    // biến $list lưu các giá trị truy vấn 
        }

        return $list;
    }
    static function sendNotification($username,$id_room,$id_status){

        $db = DB::getInstance();
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $query="INSERT INTO thong_bao (id_thong_bao, ten_nguoi_nhan, id_phong_tro, id_trang_thai, thoi_gian_thong_bao) 
                VALUES (NULL, '$username', '$id_room', '$id_status', now());";
      //  echo $query;
    
        try{
            $db->exec($query);
       //     echo "New record created successfully";
        }
        catch(PDOException $e){
            echo $query . "<br>" . $e->getMessage();
        } 
  
    }
    

}



?>