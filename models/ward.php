<?php
    class Ward  {
        public $name;
        public $xaid;

        public function __construct($name,$xaid) {
            $this->name = $name;
            $this->xaid = $xaid;
        }
        public static function show($maqh){
            $list = [];
            $db = DB::getInstance();
    
            $query = "SELECT * FROM xa_phuong_thi_tran where maqh = '$maqh'";
            echo $query;
            $req = $db->query($query);
     
            foreach ($req->fetchAll() as $item) {
                $list[] = new Ward($item['name'],$item['xaid']);
            }
            
            return $list;
        }

    }

?>