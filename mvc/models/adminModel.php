<?php
class adminModel extends connectDB{

    // kiểm tra username 
    public function check_login($username, $pass){
        $sql = "SELECT * FROM administrator WHERE username='$username' AND pass='$pass'";
        $result = $this->connect->query($sql);
        $User = array();
        if ($result->num_rows > 0) {
            // show dữ liệu trên trang
            while($row = $result->fetch_assoc()) {           
                $User[] = $row;
            }
        } else {
            return false;
        }
        return $User;
    }

    // tao tai khoan admin moi 
    function taotaikhoan_admin($user, $pass, $email , $sdt , $ten){
        $sql = "INSERT INTO `administrator`(`username`, `pass`, `email`, `sdt`, `ten`) 
        VALUES ('$user','$pass','$email' , '$sdt' ,'$ten' )";
        $result = $this->connect->query($sql);
        if($result){
            return true;
        } else{
            return false;
        }

    }

    //**************************************** Card View Info _+++++++++****************** */

        function getToatalDoanhThu(){
           $sql = ' SELECT SUM(gia_tien) AS total FROM dat_phong WHERE thanh_toan ="Thanh Toán Ngay" ';
           $result  = $this->connect->query($sql);
            $info = array();
            if ($result->num_rows > 0) {
               
                while($row = $result->fetch_assoc()) {           
                    $info[] = $row;
                }
            } else {
                return false;
            }
            return json_encode($info);

        }

        // hàm tính doanh thu chưa thanh toán 
        function getToatal_chuaThanhToan(){
            $sql = ' SELECT SUM(gia_tien) AS total FROM dat_phong WHERE thanh_toan ="Thanh Toán Sau" ';
            $result  = $this->connect->query($sql);
             $info = array();
             if ($result->num_rows > 0) {
                
                 while($row = $result->fetch_assoc()) {           
                     $info[] = $row;
                 }
             } else {
                 return false;
             }
             return json_encode($info);
        }
        
        // tính tổng số đơn đặt phòng 
        function getToatal_datphong(){
            $sql = ' SELECT COUNT(*)  AS total FROM dat_phong ';
            $result  = $this->connect->query($sql);
             $info = array();
             if ($result->num_rows > 0) {
                
                 while($row = $result->fetch_assoc()) {           
                     $info[] = $row;
                 }
             } else {
                 return false;
             }
             return json_encode($info);
        }

        
        // tính tổng số đơn tin nhắn 
        function getToatal_tinnhan(){
            $sql = ' SELECT COUNT(*) AS total FROM lien_he ';
            $result  = $this->connect->query($sql);
             $info = array();
             if ($result->num_rows > 0) {
                
                 while($row = $result->fetch_assoc()) {           
                     $info[] = $row;
                 }
             } else {
                 return false;
             }
             return json_encode($info);
        }
      //**************************************** END Card View Info _+++++++++****************** */


    //****************************************** Phần Dành cho book room **************************** */
        // hàm trả dánh sách đặt phòng 
        function getBookRoom(){
            $sql  = "SELECT * FROM dat_phong";
            $result  = $this->connect->query($sql);
            $booking = array();
            if ($result->num_rows > 0) {
               
                while($row = $result->fetch_assoc()) {           
                    $booking[] = $row;
                }
            } else {
                return false;
            }
            return json_encode($booking);

        }

          // hàm trả dánh sách đặt phòng 
          function getBookRoom1(){
            $sql  = "SELECT * FROM dat_phong ORDER BY thanh_toan DESC LIMIT 10 ";
            $result  = $this->connect->query($sql);
            $booking = array();
            if ($result->num_rows > 0) {
               
                while($row = $result->fetch_assoc()) {           
                    $booking[] = $row;
                }
            } else {
                return false;
            }
            return json_encode($booking);

        }

         // hàm trả về 1 booking
         function getOneBookRoom($ma){
            $sql  = "SELECT * FROM dat_phong WHERE ma_dat_phong='$ma'";
            $result  = $this->connect->query($sql);
            $one_booking = array();
            if ($result->num_rows > 0) {
               
                while($row = $result->fetch_assoc()) {           
                    $one_booking[] = $row;
                }
            } else {
                return false;
            }
            return json_encode($one_booking);

        }

        // hàm xác nhận đặt chỗ khách hàng 
        function xacnhan($ma_xac_nhan,$trang_thai){
            $sql  = "UPDATE dat_phong SET trang_thai=$trang_thai WHERE ma_dat_phong='$ma_xac_nhan'";
            $result = $this->connect->query($sql);
            if($result){
                return true;
            } else{
                return false;
            }
        }

        // xóa booking room 
        function delete_booking($ma){
            $sql = "DELETE FROM dat_phong WHERE ma_dat_phong='$ma'";
            $result = $this->connect->query($sql);
            if($result){
                return true;
            } else{
                return false;
            }
        }

        // cập nhật thông tin booking 
        function updateBooking($ma_dp,$ngay_check_in, $so_lp,
        $ngay_check_out ,$sdt, $nguoi_lon,$hoten, $treem , $ngay_dat,$loai_phong  , $ghichu, $email ){
            $sql ="UPDATE `dat_phong` SET thoi_gian_vao='$ngay_check_in',
            thoi_gian_ra='$ngay_check_out',ma_phong='$loai_phong',so_luong_phong='$so_lp',nguoi_lon='$nguoi_lon',
            tre_em='$treem',ho_ten='$hoten',email='$email',sdt='$sdt',ghichu='$ghichu',
            thoi_gian_dat='$ngay_dat' WHERE ma_dat_phong='$ma_dp'";
            $result = $this->connect->query($sql);
            if($result){
                return true;
            } else{
                return false;
            }
        }

    // thanh toán phòng 
    function thanhtoan_phong($ma){
        $sql = "UPDATE dat_phong SET thanh_toan ='Thanh Toán Ngay' WHERE ma_dat_phong='$ma'";
        $result = $this->connect->query($sql);
            if($result){
                return true;
            } else{
                return false;
            }
    }
    //******************************************END  Phần Dành cho book room **************************** */

    // ******************** Phần dành cho hình ảnh ***************************************

    // ham them hinh anh 
    function add_image_model($ma_anh, $ten_anh , $image , $id){
        if(!empty($ten_anh)){
            $ten_anh1 = $ten_anh;
        }else{
            $ten_anh1 = "No_titel";
        }
        $sql  = "INSERT INTO hinh_anh (ma_hinh_anh,tieu_de,image_anh,id_hinh_anh) 
        VALUES ('$ma_anh','$ten_anh1','$image','$id')";
        $result = $this->connect->query($sql);

        if($result){
            return true;
        } else{
            return false;
        }
    }

     // hàm get Mã Hình ảnh
    function getMaHinhAnh(){
        $sql = "SELECT DISTINCT hinh_anh.ma_hinh_anh FROM hinh_anh ";
        $result = $this->connect->query($sql);
        $ma_hinh_anh = array();
        if ($result->num_rows > 0) {
            // show dữ liệu trên trang
            while($row = $result->fetch_assoc()) {           
                $ma_hinh_anh[] = $row;
            }
        } else {
            return false;
        }
        
        return $ma_hinh_anh;
    }

    // lấy danh sách hình ảnh hiện có trong sql 
    function getAllImage(){
        $sql = "SELECT * FROM hinh_anh ";
        $result = $this->connect->query($sql);
        $hinh_anh = array();
        if ($result->num_rows > 0) {
            // show dữ liệu trên trang
            while($row = $result->fetch_assoc()) {           
                $hinh_anh[] = $row;
            }
        } else {
            return false;
        }
        
        return json_encode($hinh_anh);
    }

    // hàm xóa hình ảnh
    function delete_image($id){
        $sql = "DELETE FROM hinh_anh WHERE id_hinh_anh='$id'";
        $result = $this->connect->query($sql);
        if($result){
            return true;
        }else{
            return false;
        }
    }
     // ******************** END Phần dành cho hình ảnh ***************************************

     // ******************** Phần dành cho dịch vụ ***************************************
    // ham them dich vu moi
    function addService($iddichvu,$ma_dich_vu,$tieu_de,$noidung,$ma_thuoc_tinh,$ma_hinh_anh){
        $sql = "INSERT INTO dich_vu(id_dich_vu,ma_dich_vu, tieu_de, noi_dung, ma_thuoc_tinh, ma_hinh_anh)
         VALUES ('$iddichvu','$ma_dich_vu','$tieu_de','$noidung','$ma_thuoc_tinh','$ma_hinh_anh')";
         $result = $this->connect->query($sql);

         if($result){
             return true;
         } else{
             return false;
         }
    }
    // hàm get lisst service all 
    function getAllDichVu(){
        $sql = "SELECT * FROM dich_vu";
        $result  = $this->connect->query($sql);
        $info = array();
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {           
                $info[] = $row;
            }
        } else {
            return false;
        }
        
        return json_encode($info);

    }

    // delete dich vu 
    function delete_dichvu($id){
        $sql = "DELETE FROM dich_vu WHERE id_dich_vu='$id'";
         $result = $this->connect->query($sql);

         if($result){
             return true;
         } else{
             return false;
         }
    }

    // hàm chi tiết dịch vụ 
    function getOneDichVu($id){
        $sql = "SELECT * FROM dich_vu WHERE id_dich_vu='$id'";
        $result  = $this->connect->query($sql);
        $info = array();
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {           
                $info[] = $row;
            }
        } else {
            return false;
        }
        
        return json_encode($info);
    }
    // cập nhật dịch vụ 
    function update_Service($iddichvu,$ma_dich_vu,$tieu_de,$noidung,$ma_thuoc_tinh,$ma_hinh_anh){
        $sql = "UPDATE dich_vu SET ma_dich_vu='$ma_dich_vu',tieu_de='$tieu_de',
        noi_dung='$noidung',ma_thuoc_tinh='$ma_thuoc_tinh',ma_hinh_anh='$ma_hinh_anh' WHERE id_dich_vu='$iddichvu'";
         $result = $this->connect->query($sql);

         if($result){
             return true;
         } else{
             return false;
         }
    }
    // ********************END  Phần dành cho dịch vụ ***************************************



 // ******************** Phần dành cho khuyến mãi***************************************
    // hàm thêm khuyến mãi 
    function addKhuyenMai($id_km,$ma_khuyen_mai,$tieu_de,$noidung,$ma_thuoc_tinh,$ma_hinh_anh){
        $sql = "INSERT INTO khuyen_mai(id_khuyen_mai,ma_km, tieu_de, noi_dung, ma_thuoc_tinh, ma_hinh_anh)
         VALUES ('$id_km','$ma_khuyen_mai','$tieu_de','$noidung','$ma_thuoc_tinh','$ma_hinh_anh')";
         $result = $this->connect->query($sql);

         if($result){
             return true;
         } else{
             return false;
         }
    }

    // Hàm lấy thông tin tất cả các khuyến mãi trả danh sách hiển thị 
    function getAll_km(){
        $sql  = "SELECT * from khuyen_mai";
        $result  = $this->connect->query($sql);
        $info = array();
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {           
                $info[] = $row;
            }
        } else {
            return false;
        }
        
        return json_encode($info);

    }

    // hàm  xóa một khuyến mại 
    function delete_km($id){
        $sql = "DELETE FROM khuyen_mai WHERE id_khuyen_mai='$id'";
        $result = $this->connect->query($sql);

         if($result){
             return true;
         } else{
             return false;
         }
    }

    // lấy thông tin một khuyến mãi bất kì
        function getOneKm($id){
            $sql  = "SELECT * from khuyen_mai WHERE id_khuyen_mai='$id'";
        $result  = $this->connect->query($sql);
        $info = array();
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {           
                $info[] = $row;
            }
        } else {
            return false;
        }
        
        return json_encode($info);
        }
        // cập nhật khuyến mãi 

        function update_khuyenmai($id_km , $ma_km , $tieu_de , $ma_tt , $ma_ha, $noi_dung){
            $sql = "UPDATE khuyen_mai SET ma_km='$ma_km',
            tieu_de='$tieu_de',noi_dung='$noi_dung',ma_thuoc_tinh='$ma_tt',ma_hinh_anh='$ma_ha' WHERE id_khuyen_mai='$id_km'";
            $result = $this->connect->query($sql);
            if($result){
                return true;
            }else{
                return false;
            }

        }

 // ******************** END  Phần dành cho khuyến mãi ***************************************

    ///********************************************** Phần dành cho thuộc tính *********************** */
    // hàm thêm thuộc tính
    function addThuocTinh($ma_thuoc_tinh,$tieu_de,$noidung,$id){
        if(isset($ma_thuoc_tinh)){
            if($ma_thuoc_tinh == null || $ma_thuoc_tinh ==""){
                return false;
            }else{
                $sql  ="INSERT INTO thuoc_tinh(ma_thuoc_tinh, ten_thuoc_tinh, noi_dung,id_thuoc_tinh) 
                VALUES ('$ma_thuoc_tinh','$tieu_de','$noidung','$id')";
                $result = $this->connect->query($sql);

                if($result){
                    return true;
                } else{
                    return false;
                }
            }
        }   
    }

    // lấy dữ liệu tất cả thuôc tính
    function getAllThuocTinh(){
        $sql = "SELECT * FROM thuoc_tinh ";
        $result = $this->connect->query($sql);
        $thuoctinh = array();
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {           
                $thuoctinh[] = $row;
            }
        } else {
            return false;
        }
        
        return json_encode($thuoctinh);
    }
    
    // hàm get Mã thuộc Tính 
    function getMaThuocTinh(){
        $sql = "SELECT DISTINCT thuoc_tinh.ma_thuoc_tinh FROM thuoc_tinh ";
        $result = $this->connect->query($sql);
        $ma_thuoc_tinh = array();
        if ($result->num_rows > 0) {
            // show dữ liệu trên trang
            while($row = $result->fetch_assoc()) {           
                $ma_thuoc_tinh[] = $row;
            }
        } else {
            return false;
        }
        
        return $ma_thuoc_tinh;
    }

    // xóa thuộc tính 
    function delete_thuoctinh($id){
        $sql  = "DELETE FROM thuoc_tinh WHERE id_thuoc_tinh='$id'";
        $result = $this->connect->query($sql);

        if($result){
            return true;
        }else{
            return false;
        }
    }

    // hàm update thuộc tính 
    function update_thuoc_tinh($id ,$ma , $ten, $noidung ){

        $sql = " UPDATE thuoc_tinh SET ma_thuoc_tinh ='$ma', ten_thuoc_tinh = '$ten' , noi_dung = '$noidung' 
        WHERE id_thuoc_tinh = '$id'";

        $result = $this->connect->query($sql);
        if($result){
            return true;
        }else {
            return false;
        }
    }

    // lấy dữ liệu 1 thuộc tính khi cần update 
    function getOneThuocTinh($id){
        $sql  = "SELECT * FROM thuoc_tinh WHERE id_thuoc_tinh = '$id'";

        $result  = $this->connect->query($sql);
        $info = array();
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {           
                $info[] = $row;
            }
        } else {
            return false;
        }
        
        return json_encode($info);
    }
    ///**********************************************end Phần dành cho thuộc tính *********************** */


    ///************************************************* Phần Dành Cho Room (Phòng)*********** */
    function add_room_model($id_phong,$ma_phong,$ten_phong,$gia_phong,$ma_hinh_anh,$ma_thuoc_tinh,$noi_dung){
        $sql = "INSERT INTO phong(id_phong,ma_phong, ten_phong, noi_dung, gia_phong, ma_hinh_anh, ma_thuoc_tinh) 
        VALUES ('$id_phong','$ma_phong', '$ten_phong', '$noi_dung', '$gia_phong', '$ma_hinh_anh','$ma_thuoc_tinh')";

        $result = $this->connect->query($sql);
        if($result){
            return true;
        }else {
            return false;
        }

    }

    // lấy danh sách tất cả các phòng hiện có trong hệ thống
    function getAllRoom(){
        $sql  = "SELECT * FROM phong";
        $result  = $this->connect->query($sql);
        $info = array();
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {           
                $info[] = $row;
            }
        } else {
            return false;
        }
        
        return json_encode($info);

    }

    // get One room for update 
        function getOneRooms($ma){
            $sql = "SELECT * FROM phong WHERE ma_phong ='$ma'";
            $result = $this->connect->query($sql);
            $info = array();
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {           
                    $info[] = $row;
                }
            } else {
                return false;
            }
            
            return json_encode($info);

        }
    // Update rooom do nguoi  quản trị cập nhật
        function UpdateRooms($ma_phong,$ten_p, $gia_p, $ma_tt, $ma_ha , $noi_dung){
            $sql  = "UPDATE phong SET ten_phong='$ten_p',noi_dung='$noi_dung',
            gia_phong=$gia_p,ma_hinh_anh='$ma_ha',ma_thuoc_tinh='$ma_tt' WHERE ma_phong='$ma_phong'";
            $result = $this->connect->query($sql);
            if($result){
                return true;
            }else{
                return false;
            }
        }

    // hàm xóa phòng
        function delete_room($ma){
            $sql  = "DELETE FROM phong WHERE id_phong='$ma'";
            $result = $this->connect->query($sql);
            if($result){
                return true;
            }else{
                return false;
            }
        }
    
    ///************************************************* END Phần Dành Cho Room (Phòng)*********** */


    ///************************************************* Phần dành cho header  infomation (Phần liên hệ với number booking ) *********** */
        // đếm số lượng đặt phòng mới
        function getNumberBookingRoom(){
            $sql  = 'SELECT  COUNT(trang_thai) AS "soluong" FROM dat_phong WHERE trang_thai="0"';
            $result = $this->connect->query($sql);
            $info = array();
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {           
                    $info[] = $row;
                }
            } else {
                return false;
            }
            
            return json_encode($info);
        }
        // chi tiết number booking 

        function getChitietNumberBooking(){
            $sql  = "SELECT * From dat_phong WHERE trang_thai = '0'";
            $result  = $this->connect->query($sql);
            $info = array();
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {           
                    $info[] = $row;
                }
            } else {
                return false;
            }
            return json_encode($info);
        }

        // number lien he 
        function getNumber_lienhe(){
            $sql  = 'SELECT  COUNT("trang_thai") AS "soluong" FROM lien_he WHERE trang_thai="0"';
            $result = $this->connect->query($sql);
            $info = array();
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {           
                    $info[] = $row;
                }
            } else {
                return false;
            }
            
            return json_encode($info);
        }

        // get all thong bao lien he 

        function getAllLienHe(){
            $sql  = "SELECT * From lien_he ORDER BY trang_thai ASC";
            $result  = $this->connect->query($sql);
            $info = array();
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {           
                    $info[] = $row;
                }
            } else {
                return false;
            }
            return json_encode($info);
        }

        // get chi tiết một liên hệ được chọn 
        function getOne_lienhe($ma){
            $sql  = "SELECT * from lien_he WHERE id_lien_he='$ma' ";
            $result = $this->connect->query($sql);
            $info = array();
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {           
                    $info[] = $row;
                }
            } else {
                return false;
            }
            return json_encode($info);
        }
            // thay đồi trạng thái đã xem liên hệ 
            function updateStatus_lien_he($ma){
                $sql = "UPDATE lien_he SET trang_thai = 1 WHERE id_lien_he='$ma' ";
                $result = $this->connect->query($sql);

            }
        // xóa một liên hệ do administrator chọn
        function delete_lien_he($ma){
            
            $sql  = "DELETE FROM lien_he WHERE id_lien_he='$ma'";
            $result = $this->connect->query($sql);
            if($result){
                return true;
            }else{
                return false;
            }
        }

    ///*************************************************END Phần dành cho header  infomation *********** */

}
?>