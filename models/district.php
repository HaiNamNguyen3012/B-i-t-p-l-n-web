<?php
    class District{
        public $name;
        public $maqh;

        public function __construct($name,$maqh) {
            $this->name = $name;
            $this->maqh = $maqh;
        }
        public static function show($matp){
            $list = [];
            $db = DB::getInstance();
    
            $query = "SELECT * FROM quan_huyen where matp= '$matp'";
    
            $req = $db->query($query);
     
            foreach ($req->fetchAll() as $item) {
                $list[] = new District($item['name'],$item['maqh']);
            }
    
            return $list;
        }

    }

?>