<?php 
class khuyenmaiModel extends connectDB{


    // get all list promotion
    function getAllPromotion(){
        $sql  = "SELECT  DISTINCT khuyen_mai.ma_km , khuyen_mai.tieu_de ,khuyen_mai.noi_dung , hinh_anh.image_anh
        from khuyen_mai INNER JOIN hinh_anh 
        WHERE khuyen_mai.ma_hinh_anh = hinh_anh.ma_hinh_anh GROUP by khuyen_mai.ma_km ";
        $result = $this->connect->query($sql);
        $danhsach = array();
        if ($result->num_rows > 0) {
           
            while($row = $result->fetch_assoc()) {           
                $danhsach[] = $row;
            }
        } else {
           // echo "0 results";
        }
        return json_encode($danhsach);

    }

    // get chi tiết  khuyến mâi
    function getChiTietKM($ma){
        $sql = "SELECT * FROM  khuyen_mai WHERE ma_km='$ma'";
        $result = $this->connect->query($sql);

        $one_km = array();
        if ($result->num_rows > 0) {
           
            while($row = $result->fetch_assoc()) {           
                $one_km[] = $row;
            }
        } else {
           // echo "0 results";
        }
        return json_encode($one_km);

    }

    // get thuoc tinh cua khuyen mai 
    function getThuocTinh_km($ma_tt){
        $sql =" SELECT * FROM thuoc_tinh WHERE ma_thuoc_tinh='$ma_tt'";
        $result  = $this->connect->query($sql);
        $thuoctinh = array();
        if ($result->num_rows > 0) {
           
            while($row = $result->fetch_assoc()) {           
                $thuoctinh[] = $row;
                
            }
        } else {
            echo "0 results";
        }
        return json_encode($thuoctinh);
    }

    // get danh sach hình ảnh cho khuyến mãi
    function getHinhAnh_km($ma_hinh_anh){
        $sql =" SELECT * FROM hinh_anh WHERE ma_hinh_anh='$ma_hinh_anh'";
        $result  = $this->connect->query($sql);
        $hinh_anh = array();
        if ($result->num_rows > 0) {
           
            while($row = $result->fetch_assoc()) {           
                $hinh_anh[] = $row;
                
            }
        } else {
            echo "0 results";
        }
        return json_encode($hinh_anh);
    }
}
?> 