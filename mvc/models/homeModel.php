<?php
class homeModel extends connectDB{
    
    function getListRoom(){
        $sql = 'SELECT * FROM phong ';
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


    // book room oder 

    function bookroom($ma_dp, $check_in, $check_out,$loai_p,$slp,$nguoi_lon,$tre_em,
    $hoten,$email,$sdt,$ghichu, $tgdat , $giatien ,$thanh_toan){
         $sql = "INSERT INTO dat_phong (ma_dat_phong, thoi_gian_vao, thoi_gian_ra, ma_phong, 
        so_luong_phong, nguoi_lon, tre_em, ho_ten, email, sdt, ghichu, thoi_gian_dat, gia_tien ,thanh_toan) 
        VALUES ('$ma_dp','$check_in','$check_out','$loai_p','$slp','$nguoi_lon','$tre_em','$hoten','$email'
        ,'$sdt','$ghichu','$tgdat','$giatien' ,'$thanh_toan')";

        $result = $this->connect->query($sql);
         if($result){
             return true;
         }else{
             return false;
         }


    }
   

    //  bannner loading 
    function getbanner($ma){
        $sql  = "SELECT * FROM hinh_anh WHERE ma_hinh_anh='$ma'";
        $result = $this->connect->query($sql);
        $info   = array();
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

    // show room demo

    function loadRoom(){
        $sql = "SELECT DISTINCT phong.ma_phong, phong.ten_phong, phong.noi_dung , phong.gia_phong, hinh_anh.image_anh
        FROM phong INNER JOIN hinh_anh  WHERE phong.ma_hinh_anh = hinh_anh.ma_hinh_anh GROUP BY phong.ma_phong LIMIT 4";
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