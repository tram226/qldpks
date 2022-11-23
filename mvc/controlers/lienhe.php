<?php 
class lienhe extends controler{

    public $doituong;
    public $home1 ; 
// ham contructor 
    public function __construct()
    {
        $this->doituong = $this->model("lienheModel");
        $this->home1 = $this->model("homeModel");
    }

    // ham Start
    public function home(){
        $this->view("home_index",["page"=>"lien_he_view","listroom"=>$this->home1->getListRoom()]);
    }

    // thêm lời nhắn từ khách hàng 

    public function tinnhan(){
        if( isset($_POST["sent-lien-he"])  ){
            date_default_timezone_set('Asia/Ho_Chi_Minh');
                $hoten  = $_POST["hoten"];
                $email = $_POST["email"];
                $sdt = $_POST["sdt"];
                $noidung  = trim($_POST["noidung"]);
                $ngay = date("d/m/Y");
                $id  = date("His");
                // goi đến model để insert dữ liệu
                $ketqua = $this->doituong->themLienHe($hoten,$email,$sdt,$noidung,$id,$ngay);
                echo $ketqua;
                $this->view("home_index",["page"=>"lien_he_view",
                "listroom"=>$this->home1->getListRoom(),
                "ketqua"=>$ketqua]);
        }
    }
}
?>