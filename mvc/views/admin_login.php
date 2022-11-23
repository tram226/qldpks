<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <base href="http://localhost/BTL/QLDatPhongKhachSan/login">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <title>Đăng Nhập | Quản lý đặt phòng khách sạn</title>
    <!-- google font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet" type="text/css" />
	<!-- icons -->
    <link href="public/admin/assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
	<link rel="stylesheet" href="public/admin/assets/plugins/iconic/css/material-design-iconic-font.min.css">
    <!-- bootstrap -->
	<link href="public/admin/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- style -->
    <link rel="stylesheet" href="public/admin/assets/css/pages/extra_pages.css">
	<!-- favicon -->
    <link rel="shortcut icon" href="public/admin/assets/img/tải xuống.png" /> 
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>
    

    <?php require_once "./mvc/views/admin/PhanCoDinh/".$data["page"].".php";?>


    <!-- start js include path -->
    <script src="public/admin/assets/plugins/jquery/jquery.min.js" ></script>
    <!-- bootstrap -->
    <script src="public/admin/assets/plugins/bootstrap/js/bootstrap.min.js" ></script>
    <script src="public/admin/assets/js/pages/extra_pages/login.js" ></script>
    <!-- end js include path -->
</body>
</html>

<script type="text/javascript">
    function thongbao(){
        swal("Lỗi Đăng Nhập!",
				"Chúng tôi không thể đăng nhập tài khoản của bạn. Hãy chắc chắn rằng bạn nhập đúng username và pasword.");
    }

</script>

<?php 
    if( isset($data["errow"])){
        if(!$data["errow"]){
            echo '<script type="text/javascript">    thongbao();      </script>';
        }
    }

?>