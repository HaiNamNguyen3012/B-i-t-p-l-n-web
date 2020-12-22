<?php

class AdminUnCheck{
 
    public $ten_tai_khoan;
    public $mat_khau;
    public $ho;
    public $ten;
    public $so_CCCD;
    public $dia_chi;
    public $sdt;
    public $email;

    public function __construct($ten_tai_khoan,$mat_khau,$ho,$ten,$so_CCCD,$dia_chi,$sdt,$email)
    {
        $this->ten_tai_khoan=$ten_tai_khoan;
        $this->mat_khau=$mat_khau;
        $this->ho = $ho;
        $this->ten = $ten;
        $this->so_CCCD = $so_CCCD;
        $this->dia_chi = $dia_chi;
        $this->sdt = $sdt;
        $this->email = $email;
    }    
    static function showAll(){
      
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
            $list[] = new AdminUnCheck($item['ten_tai_khoan'], $item['mat_khau'],$item['ho'], $item['ten'], $item['so_CCCD'], 
                            $item['dia_chi'], $item['sdt'], 
                            $item['email']);    // biến $list lưu các giá trị truy vấn 
        }

        return $list;
        }
  
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
