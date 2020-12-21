<?php
    class Pagination{
        public $start;
        public $limit;
        public $current_page;
        public $total_page;

        public function __construct($start,$limit,$current_page,$total_page) {
            $this->start = $start;
            $this->limit = $limit;
            $this->current_page = $current_page;
            $this->total_page = $total_page;
        }

        static function paginationPost($where_query){
            $db = DB::getInstance();
            $query = "SELECT count(*) as tong from phong $where_query";
            $total_records = $db->query($query)->fetch()['tong'];   // tổng số bài đăng
            
            $current_page = isset($_GET['page']) ? $_GET['page'] : 1; // trang hiện tại
            $limit = 20;                                        // số bài đăng trên mỗi trang
            $total_page = ceil($total_records / $limit);      // tổng số trang
          
            // Giới hạn current_page trong khoảng 1 đến total_page
            if ($current_page > $total_page){
              $current_page = $total_page;
            }
            else if ($current_page < 1){
                $current_page = 1;
            }
          
            // Tìm Start
            $start = ($current_page - 1) * $limit;
            if($start < 0) $start = 0;
            return new Pagination($start,$limit,$current_page,$total_page);
          }
        static function paginationSearchPost(){}


    }
    ?>