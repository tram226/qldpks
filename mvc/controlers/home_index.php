<?php 

class home_index extends controler{
    public $doituong;
    public $dichvu;
    public $khuyenmai;

    public function __construct()
    {
        $this->doituong = $this->model("homeModel");
        $this->dichvu = $this->model("dichvuModel");
        $this->khuyenmai = $this->model("khuyenmaiModel");
    }

    public function home(){
        $this->view("home_index",["page"=>"home_view",
        "banner_image"=>$this->doituong->getbanner("banner"),
        "phong"=>$this->doituong->loadRoom(),
        "dichvu"=>$this->dichvu->getDichVu(),
        "khuyenmai"=>$this->khuyenmai->getAllPromotion(),
        "listroom"=>$this->doituong->getListRoom()]);
    }


        // hàm đặt phòng
    public function datphong(){
        if( isset($_POST["datngay"])  ){
            $check_in  = $_POST["checkin"];
            $check_out = $_POST["checkout"];
            $nguoi_lon = $_POST["nguoilon"];
            if(empty($_POST["treem"]) ||$_POST["treem"]=="Trẻ em"){
                $treem = "0";
            }else{
                $treem  = $_POST["treem"];
            }
            $phong  = $_POST["phong"];
            $so_luong_phong  = $_POST["slp"];
            $ho_ten  = $_POST["hoten"];
            if(empty( $_POST["email"]) ||  $_POST["email"] == "Nhập email"){
                $email= "No Email";
            }else{
                $email  = $_POST["email"];
            }
            $sdt  = $_POST["sdt"];
            if(empty($_POST["ghichu"]) || $_POST["ghichu"]== "Nhập ghi chú"){
                $ghi_chu = "No ghi chú";
            }else{
                $ghi_chu  = $_POST["ghichu"];
            }
              
            date_default_timezone_set('Asia/Ho_Chi_Minh');
            $ma_dat_p = date("dmy").date('His');
            $ngaydat = date("d/m/Y");
            $giatien = $_POST["giatien"];
           
           // echo $phong;
           // echo strlen($phong); // đếm kĩ tự trong chuỗi 
            $array_phong = str_split($phong);
            $dem  = 1;
            $dem2 = 0;
            foreach ( $array_phong as $row_dem ){
                if($row_dem== "/"){
                    $dem2 = $dem;
                }
                $dem ++;
            }
            $phong2 = substr($phong,0,$dem2-1);
            $thanh_toan = $_POST["thanhtoan"];

            
            
           $result = $this->doituong->bookroom($ma_dat_p, $check_in, $check_out,$phong2,$so_luong_phong,
           $nguoi_lon,$treem,$ho_ten,$email,$sdt,$ghi_chu, $ngaydat,$giatien , $thanh_toan);
           
           $this->view("home_index",["page"=>"home_view",
           "result"=>$result,
           "madapphong"=>$ma_dat_p,
           "banner_image"=>$this->doituong->getbanner("banner"),
           "phong"=>$this->doituong->loadRoom(),
           "dichvu"=>$this->dichvu->getDichVu(),
           "khuyenmai"=>$this->khuyenmai->getAllPromotion(),
           "listroom"=>$this->doituong->getListRoom()]); 

        }
    }
}
?>