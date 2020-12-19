#models/adminuncheck.php</br>
<?php

class AdminUnCheckReports{
    public $id_bao_cao;
    public $id_nguoi_dung;
    public $id_phong_tro;
    public $li_do;
    public $noi_dung;
    public $thoi_gian_bao_cao;

    public function __construct($id_bao_cao,$id_nguoi_dung,$id_phong_tro,$li_do,$noi_dung,$thoi_gian_bao_cao)
    {
        $this->id_bao_cao = $id_bao_cao;
        $this->id_nguoi_dung=$id_nguoi_dung;
        $this->id_phong_tro=$id_phong_tro;
        $this->li_do=$li_do;
        $this->noi_dung=$noi_dung;
        $this->thoi_gian_bao_cao=$thoi_gian_bao_cao;
    }    

    static function showAll(){
      
        $list = [];
        $db = DB::getInstance();


        handlingReport($db);


        $req = $db->query('SELECT 
                            *
                            FROM bao_cao 
                            
                         /*   LIMIT 20  */
                            ;');

    

        
        foreach ($req->fetchAll() as $item) {
            $list[] = new AdminUnCheckReports($item['id_bao_cao'],$item['id_nguoi_dung'], $item['id_phong_tro'],$item['li_do'] ,$item['noi_dung'], 
                             $item['thoi_gian_bao_cao']);    // biến $list lưu các giá trị truy vấn 
        }

        return $list;
        }
  
    }

function handlingReport($db){
    if(empty($_POST)){
        echo "Khong can xu li";
    }
    else {
        foreach($_POST as $report ){
            
            $query="DELETE FROM bao_cao  WHERE id_bao_cao = '$report';";
           

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
###models/adminuncheck.php</br>