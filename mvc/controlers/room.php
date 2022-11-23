<?php 
class room extends controler{
    
    public $doituong;

    public function __construct()
    {
        $this->doituong = $this->model("roomModel");
    }

    // goi hàm mặc định

    public function home(){
        $this->view("home_index",["page"=>"list_room_view" ,
        "all_rooms"=>$this->doituong->getAllRoom(),
        "listroom"=> $this->doituong->getListRoom()]);
    }

    // chi tiết phòng 
    public function chitiet($ma){
        $result_room  = $this->doituong->getOneRoom($ma);
        $danh_sanh  = json_decode($result_room,true);
        $image = "";
        $thuoctinh = "";
            foreach($danh_sanh as $row){
                    $image = $row["ma_hinh_anh"];
                    $thuoctinh = $row["ma_thuoc_tinh"];
            }
        

        $this->view("home_index",["page"=>"chi_tiet_phong" ,
        "one_rooms"=>$result_room,
        "image_room"=>$this->doituong->getImageRoom($image),
        "thuocTinh_room"=>$this->doituong->getThuocTinhRoom($thuoctinh),
        "listroom"=> $this->doituong->getListRoom()]);
    }



}

?>