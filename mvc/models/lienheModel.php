<?php
class lienheModel extends connectDB{

    // insert tin nhắn từ khách hàng 
    public function themLienHe($hoten,$email,$sdt,$noidung,$idlienhe,$ngay){
        $sql  = "INSERT INTO lien_he(ho_ten,email,sdt,noi_dung,id_lien_he,ngay) VALUES
        ('$hoten','$email','$sdt','$noidung','$idlienhe','$ngay')";

        $ketqua = $this->connect->query($sql);

        if($ketqua){
            return true;
            
        }else{
            return false;
        }
    }
    
}
?>