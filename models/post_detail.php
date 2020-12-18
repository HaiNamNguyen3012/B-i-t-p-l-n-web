# models/post_detail.php</br>
<?php
    require_once('models/post.php');
    class PostDetail extends Post{
        public $noi_dung;
        public $dia_chi;
        public $gan_dia_diem;
        public $so_luong_phong;
        public $tinh_theo;
        public $thoi_gian_dang_bai;
        public $duoc_thue;
        public $sdt;
        public $chung_chu;
        public $phong_tam_chung;
        public $nong_lanh;
        public $phong_bep;
        public $dieu_hoa;
        public $ban_cong;
        public $dien_nuoc;
        public $tu_lanh;
        public $may_giat;
        public $giuong_tu;
        public $cac_hinh_anh=array();

        function __construct($id_phong, $tieu_de, $noi_dung, $gia, $loai_phong, $dien_tich, $dia_chi, $gan_dia_diem, 
                             $so_luong_phong, $tinh_theo, $thoi_gian_dang_bai, $duoc_thue,
                             $ho,$ten, $sdt,$tentp,$tenqh,$tenxp,
                             $chung_chu, $phong_tam_chung,$nong_lanh, $phong_bep, $dieu_hoa, $ban_cong, $dien_nuoc, $tu_lanh, $may_giat, $giuong_tu,
                             $cac_hinh_anh){
            $this->id_phong = $id_phong;    
            $this->tieu_de = $tieu_de;
            $this->noi_dung = $noi_dung;
            $this->gia= $gia;
            $this->loai_phong=$loai_phong;
            $this->dien_tich = $dien_tich;
            $this->dia_chi = $dia_chi;
            $this->gan_dia_diem = $gan_dia_diem;
            $this->so_luong_phong = $so_luong_phong;
            $this->tinh_theo = $tinh_theo;
            $this->thoi_gian_dang_bai = $thoi_gian_dang_bai;
            $this->duoc_thue = $duoc_thue;
            $this->ho = $ho;
            $this->ten = $ten;
            $this->sdt = $sdt;
            $this->tentp = $tentp;
            $this->tenqh = $tenqh;
            $this->tenxp = $tenxp;
            $this->chung_chu = $chung_chu;
            $this->phong_tam_chung = $phong_tam_chung;
            $this->nong_lanh = $nong_lanh;
            $this->phong_bep = $phong_bep;
            $this->dieu_hoa = $dieu_hoa;
            $this->ban_cong = $ban_cong;
            $this->dien_nuoc = $dien_nuoc;
            $this->tu_lanh = $tu_lanh;
            $this->may_giat = $may_giat;
            $this->giuong_tu = $giuong_tu;
            $this->cac_hinh_anh = $cac_hinh_anh;
          }
        static function find($id_phong) {    
            echo "dùng find id";
            echo "haha";
            $db = DB::getInstance();
            
            $req = $db->prepare('SELECT 
                                        phong.id_phong, phong.tieu_de,phong.noi_dung, 
                                        phong.gia, phong.loai_phong, phong.dien_tich, phong.dia_chi,phong.gan_dia_diem,
                                        phong.so_luong_phong,phong.tinh_theo,phong.thoi_gian_dang_bai,phong.duoc_thue,
                                        nguoi_cho_thue.ho, nguoi_cho_thue.ten, nguoi_cho_thue.sdt,
                                        tinh_thanh_pho.name as tentp, quan_huyen.name as tenqh,  xa_phuong_thi_tran.name as tenxp,
                                        info.chung_chu,info.phong_tam_chung,info.nong_lanh,info.phong_bep,info.dieu_hoa,info.ban_cong,
                                        info.dien_nuoc,info.tu_lanh,info.may_giat,info.giuong_tu
                                FROM phong 
                                inner join nguoi_cho_thue on phong.id_nguoi_cho_thue=nguoi_cho_thue.id_nguoi_cho_thue
                                inner join tinh_thanh_pho on  cast(tinh_thanh_pho.matp as int)  = phong.id_tp
                                inner join quan_huyen on cast(quan_huyen.maqh as int) = phong.id_qh
                                inner join xa_phuong_thi_tran on cast(xa_phuong_thi_tran.xaid as int) = phong.id_xa
                                inner join info on info.id_info= phong.id_phong
                                WHERE id_phong = :id_phong');  ///////
            $req->execute(array('id_phong' => $id_phong));
            
            

            
            $req2 = $db->prepare('SELECT ten_hinh_anh from hinh_anh where id_phong=:id_phong limit 10');
            $req2->execute(array('id_phong' => $id_phong));
            $img = $req2->fetchAll();
            
            
            
            $item = $req->fetch();
            
            

            if (isset($item['id_phong'])) {
                $item = handlingRawData($item);
                

                return new PostDetail($item['id_phong'], $item['tieu_de'], $item['noi_dung'], 
                            $item['gia'], $item['loai_phong'], $item['dien_tich'], $item['dia_chi'], $item['gan_dia_diem'],
                            $item['so_luong_phong'], $item['tinh_theo'], $item['thoi_gian_dang_bai'], $item['duoc_thue'],
                            $item['ho'], $item['ten'], $item['sdt'], $item['tentp'],$item['tenqh'],$item['tenxp'],
                            $item['chung_chu'], $item['phong_tam_chung'],$item['nong_lanh'],$item['phong_bep'],$item['dieu_hoa'],$item['ban_cong'],
                            $item['dien_nuoc'],$item['tu_lanh'],$item['may_giat'],$item['giuong_tu'],$img
                        );
            }
            return null;
        }
        
    }
    function handlingRawData($item){
        
        $item['tieu_de'] = mb_ucfirst($item['tieu_de']);
        $item['noi_dung']= mb_ucfirst($item['noi_dung']);
        $item['loai_phong']= mb_ucfirst($item['loai_phong']);
        $item['dia_chi']= mb_ucfirst($item['dia_chi']);
        $item['gan_dia_diem']= mb_ucfirst($item['gan_dia_diem']);
        $item['dien_nuoc'] = "Điện nước: ".mb_ucfirst($item['dien_nuoc']);
        $item['sdt'] = "Số điện thoại: ".$item['sdt'];
        $item['thoi_gian_dang_bai'];
        
        if($item['chung_chu']==1) $item['chung_chu'] = "Chung chủ";
        else $item['chung_chu'] = "Không chung chủ";

        if($item['phong_tam_chung']==1)  $item['phong_tam_chung'] = "Phòng tắm chung";
        else $item['phong_tam_chung'] = "Phòng tắm khép kín";

        if($item['nong_lanh']==1) $item['nong_lanh'] = "Có bình nóng lạnh";
        else $item['nong_lanh'] = "Không có bình nóng lạnh";

        if ($item['phong_bep']==2) $item['phong_bep'] = "Chung nhà bếp";
        else if ($item['phong_bep']==1) $item['phong_bep'] = "Khu bếp riêng";
        else $item['phong_bep'] = "Không nấu ăn";

        if($item['dieu_hoa'] == 1) $item['dieu_hoa'] = "Có điều hòa";
        else $item['dieu_hoa'] = "Không có điều hòa";

        if($item['ban_cong'] == 1) $item['ban_cong'] = "Có ban công";
        else $item['ban_cong'] = "Không có ban công";

        

        if($item['tu_lanh'] == 1) $item['tu_lanh']= "tủ lạnh";
        else $item['tu_lanh'] = "";

        if($item['may_giat'] == 1)  $item['may_giat']= "máy giặt";
        else $item['may_giat'] = "";

        if($item['giuong_tu'] == 1) $item['giuong_tu']= "giường tủ";
        else $item['giuong_tu'] = "";


        if($item['gia'] >= 1000000000) $item['gia'] = round($item['gia']/1000000000,3)." tỷ";
        else if ($item['gia'] >= 1000000) $item['gia'] = round($item['gia']/1000000,2). " triệu";
        else  $item['gia'] = round($item['gia']/1000,1). " ngàn";
        return $item;
    }

    function mb_ucfirst($string)
    {
        $firstChar = mb_substr($string, 0, 1, "UTF-8");
        $then = mb_substr($string, 1, null, "UTF-8");
        return mb_strtoupper($firstChar, "UTF-8") . $then;
    }

?>
### models/post_detail.php</br>