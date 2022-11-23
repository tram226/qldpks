<?php
class dichvuModel extends connectDB{

    // hàm lấy danh sách dịch vụ hiện có 
    function getDichVu(){
        $sql  = "SELECT  DISTINCT dich_vu.ma_dich_vu , dich_vu.tieu_de ,dich_vu.noi_dung , hinh_anh.image_anh
        from dich_vu INNER JOIN hinh_anh 
        WHERE dich_vu.ma_hinh_anh = hinh_anh.ma_hinh_anh GROUP by dich_vu.ma_dich_vu ";
        $result  = $this->connect->query($sql);

        $danhsach = array();
        if ($result->num_rows > 0) {
           
            while($row = $result->fetch_assoc()) {           
                $danhsach[] = $row;
            }
        } else {
            //echo "0 results";
        }
        return json_encode($danhsach);

    }

    // get chi tiết dịch vụ 
    function getChiTietDichVu($ma){
        $sql  = "SELECT * FROM dich_vu WHERE ma_dich_vu='$ma'";
        $result  = $this->connect->query($sql);
        $danhsach = array();
        if ($result->num_rows > 0) {
           
            while($row = $result->fetch_assoc()) {           
                $danhsach[] = $row;
            }
        } else {
            echo "0 results";
        }
        return $danhsach;
    }

    // get thuoc tinh cho dich vu 
    function getThuocTinh($ma_thuoc_tinh){
        $sql =" SELECT * FROM thuoc_tinh WHERE ma_thuoc_tinh='$ma_thuoc_tinh'";
        $result  = $this->connect->query($sql);
        $thuoctinh = array();
        if ($result->num_rows > 0) {
           
            while($row = $result->fetch_assoc()) {           
                $thuoctinh[] = $row;
                
            }
        } else {
            echo "0 results";
        }
        return $thuoctinh;

    }


    // get danh sách hình ảnh 
    function getHinhAnh($ma_hinh_anh){
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
        return $hinh_anh;
    }


}
?>