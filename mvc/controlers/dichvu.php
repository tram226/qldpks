<?php 
class dichvu extends controler{
    public $doituong;
    public $home1 ; 

    public function __construct()
    {
        $this->doituong = $this->model("dichvuModel");
        $this->home1 = $this->model("homeModel");
    }

    // Goi ham mac dinh 
    function home(){

        $this->view("home_index",["page"=>"list_dich_vu_view",
        "dichvu"=>$this->doituong->getDichVu(),"listroom"=>$this->home1->getListRoom()]);
    }

    // lấy danh sách dịch vụ hiện có
    function chitiet($ma){

        $danhsach = $this->doituong->getChiTietDichVu($ma);
        $thuoctinh= "";
        $hinhanh="";
        foreach($danhsach as $row){
           $thuoctinh=  $row["ma_thuoc_tinh"];
           $hinhanh =  $row["ma_hinh_anh"];
        }

        $this->view("home_index",["page"=>"chi_tiet_dich_vu_view",
        "chitietdichvu"=>$this->doituong->getChiTietDichVu($ma),
        "thuoctinh"=>$this->doituong->getThuocTinh($thuoctinh),
        "hinhanh1"=>$this->doituong->getHinhAnh($hinhanh),
        "listroom"=>$this->home1->getListRoom()]);
    }


}
?>