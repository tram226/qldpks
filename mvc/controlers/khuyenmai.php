<?php
class khuyenmai extends controler{
    public $doituong;
    public $home1 ; 

    public function __construct()
    {
        $this->doituong = $this->model("khuyenmaiModel");
        $this->home1 = $this->model("homeModel");
    }

    // gọi hàm mặc định cho controler
    function home(){

        $this->view("home_index",["page"=>"list_khuyen_mai_view",
        "danhsach"=>$this->doituong->getAllPromotion(),
        "listroom"=>$this->home1->getListRoom()]);
    }

    // hàm gọi trang chi tiết khuyến mãi
        function chitiet($ma){

            $danhsach = $this->doituong->getChiTietKM($ma);
            $thuoctinh= "";
            $hinhanh="";
            $danhsach1 = json_decode($danhsach,true);
            foreach($danhsach1 as $row){
               $thuoctinh=  $row["ma_thuoc_tinh"];
               $hinhanh =  $row["ma_hinh_anh"];
            }
    
            $this->view("home_index",["page"=>"chi_tiet_khuyen_mai_view",
            "chitietkhuyenmai"=>$this->doituong->getChiTietKM($ma),
            "thuoctinh"=>$this->doituong->getThuocTinh_km($thuoctinh),
            "hinhanh"=>$this->doituong->getHinhAnh_km($hinhanh),
            "listroom"=>$this->home1->getListRoom()]);
        }
    

    
}
?>