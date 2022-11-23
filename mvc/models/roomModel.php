<?php
class roomModel extends connectDB{
    
    function getListRoom(){
        $sql = 'SELECT *  FROM phong ';
        $result = $this->connect->query($sql);

        // trả về mảng phòng
        $listroom  = array();
        if ($result->num_rows > 0) {
            // show dữ liệu trên trang
            while($row = $result->fetch_assoc()) {           
                $listroom[] = $row;
            }
        } else {
            echo "0 results";
        }
     return json_encode($listroom);

    }

    // get danh sach cac phong 
    function getAllRoom(){
        $sql = "SELECT DISTINCT phong.ma_phong, phong.ten_phong, phong.noi_dung , phong.gia_phong, hinh_anh.image_anh
        FROM phong INNER JOIN hinh_anh  WHERE phong.ma_hinh_anh = hinh_anh.ma_hinh_anh GROUP BY phong.ma_phong";
        $result = $this->connect->query($sql);
        $info  = array();
        if ($result->num_rows > 0) {
            // show dữ liệu trên trang
            while($row = $result->fetch_assoc()) {           
                $info[] = $row;
            }
        } else {
            echo "0 results";
        }
        return json_encode($info);
        
    }

    // get one room 
    function getOneRoom($ma){
        $sql = "SELECT *FROM phong WHERE ma_phong ='$ma'";
        $result = $this->connect->query($sql);
        $info  = array();
        if ($result->num_rows > 0) {
            // show dữ liệu trên trang
            while($row = $result->fetch_assoc()) {           
                $info[] = $row;
            }
        } else {
            echo "0 results";
        }
        return json_encode($info);
        
    }

    // get hình anh 
    function getImageRoom($ma){
        $sql = "SELECT *FROM hinh_anh WHERE ma_hinh_anh ='$ma'";
        $result = $this->connect->query($sql);
        $info  = array();
        if ($result->num_rows > 0) {
            // show dữ liệu trên trang
            while($row = $result->fetch_assoc()) {           
                $info[] = $row;
            }
        } else {
            echo "0 results";
        }
        return json_encode($info);
        
    }
    
    // get Thuộc Tính Room 
    function getThuocTinhRoom($ma){
        $sql = "SELECT *FROM thuoc_tinh WHERE ma_thuoc_tinh ='$ma'";
        $result = $this->connect->query($sql);
        $info  = array();
        if ($result->num_rows > 0) {
            // show dữ liệu trên trang
            while($row = $result->fetch_assoc()) {           
                $info[] = $row;
            }
        } else {
            echo "0 results";
        }
        return json_encode($info);
        
    }
   
}
?>