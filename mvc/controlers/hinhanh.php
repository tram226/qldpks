<?php
class hinhanh extends controler{
    public $doituong;
    public $home1 ; 

    public function __construct()
    {
        $this->doituong = $this->model("hinhanhModel");
        $this->home1 = $this->model("homeModel");
    }

    // Goi ham mac dinh 
    function home(){

        $this->view("home_index",["page"=>"list_image",
        "hinhanh"=>$this->doituong->getAllImage(),
        "listroom"=>$this->home1->getListRoom()]);
    }
    function chitiet($ma){
        $this->view("home_index",["page"=>"chi_tiet_image",
        "OneImage"=>$this->doituong->getOneIamge($ma),
        "hinhanh"=>$this->doituong->getAllImage(),
        "listroom"=>$this->home1->getListRoom()]);
    }
}
?>