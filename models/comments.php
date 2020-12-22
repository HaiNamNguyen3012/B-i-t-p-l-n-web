<?php

class Comments{
 
    public $id_nguoi_dung;
    public $id_binh_luan;
    public $id_phong_tro;
    public $noi_dung;
    public $duoc_duyet;
    public $may_sao;
    public $thoi_gian_binh_luan;

    public function __construct($id_nguoi_dung,$id_binh_luan,$id_phong_tro,$noi_dung,$duoc_duyet,$may_sao,$thoi_gian_binh_luan)
    {
        $this->id_nguoi_dung=$id_nguoi_dung;
        $this->id_binh_luan = $id_binh_luan;
        $this->id_phong_tro=$id_phong_tro;
        $this->noi_dung=$noi_dung;
        $this->duoc_duyet=$duoc_duyet;
        $this->may_sao=$may_sao;
        $this->thoi_gian_binh_luan=$thoi_gian_binh_luan;
    }    
    static function showAll(){
      
        $list = [];
        $db = DB::getInstance();


        handlingComment($db);


        $req = $db->query('SELECT * FROM binh_luan where duoc_duyet = 0;');

        foreach ($req->fetchAll() as $item) {
            $list[] = new Comments($item['id_nguoi_dung'], $item['id_binh_luan'],$item['id_phong_tro'], $item['noi_dung'], $item['duoc_duyet'], 
                            $item['may_sao'], $item['thoi_gian_binh_luan']);    // biến $list lưu các giá trị truy vấn 
        }

        return $list;
    }

    static function sendComment($id_room,$content,$stars){
        $db = DB::getInstance();
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $query="INSERT INTO binh_luan (id_binh_luan, id_nguoi_dung, id_phong_tro, noi_dung, duoc_duyet, may_sao, thoi_gian_binh_luan) 
                VALUES (NULL, '{$_SESSION['username']}', '$id_room', '$content', 0, $stars, now());";
        echo $query;
    
        try{
            $db->exec($query);
            echo "New record created successfully";
        }
        catch(PDOException $e){
            echo $query . "<br>" . $e->getMessage();
        } 
  
    }
    static function showByRoom($id_room){
        $list = [];
        $db = DB::getInstance();


        handlingComment($db);


        $req = $db->query("SELECT * FROM binh_luan where id_phong_tro = $id_room && duoc_duyet = 1;");

        foreach ($req->fetchAll() as $item) {
            $list[] = new Comments($item['id_nguoi_dung'], $item['id_binh_luan'],$item['id_phong_tro'], $item['noi_dung'], $item['duoc_duyet'], 
                            $item['may_sao'], $item['thoi_gian_binh_luan']);    // biến $list lưu các giá trị truy vấn 
        }

        return $list;
    }
  
}

function handlingComment($db){
    if(empty($_POST)){
        //echo "Khong can xu li";
    }
    else {
        foreach($_POST as $comment ){
            
            $query="UPDATE binh_luan SET duoc_duyet = 1 WHERE id_binh_luan = '$comment';";
           

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
