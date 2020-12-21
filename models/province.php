<?php
    class Province{
        public $name;
        public $matp;

        public function __construct($name,$matp) {
            $this->name = $name;
            $this->matp = $matp;
        }
        public static function show(){
            $list = [];
            $db = DB::getInstance();
    
            $query = "SELECT * FROM tinh_thanh_pho";
    
            $req = $db->query($query);
     
            foreach ($req->fetchAll() as $item) {
                $list[] = new Province($item['name'],$item['matp']);
            }
            
            return $list;
        }

    }

?>