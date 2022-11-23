<!DOCTYPE html>
<html lang="en">
<!-- BEGIN HEAD -->
<head>
    <meta charset="utf-8" />
	<base href="http://localhost/BTL/QLDatPhongKhachSan/admin">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta name="description" content="Responsive Admin Template" />
    <meta name="author" content="SmartUniversity" />
    <title>Quản Lý Khách Sạn</title>
    <!-- google font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet" type="text/css" />
	<!-- icons -->
    <link href="public/admin/assets/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
    <link href="public/admin/assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
	<!--bootstrap -->
	<link href="public/admin/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link href="public/admin/assets/plugins/summernote/summernote.css" rel="stylesheet">
	<!-- morris chart -->
    <link href="public/admin/assets/plugins/morris/morris.css" rel="stylesheet" type="text/css" />
    <!-- Material Design Lite CSS -->
	<link rel="stylesheet" href="public/admin/assets/plugins/material/material.min.css">
    <link rel="stylesheet" href="public/admin/assets/css/material_style.css">
    <!-- dropzone -->
    <link href="assets/plugins/dropzone/dropzone.css" rel="stylesheet" media="screen">
	<!-- animation -->
	<link href="public/admin/assets/css/pages/animate_page.css" rel="stylesheet">
	<!-- Template Styles -->
    <link href="public/admin/assets/css/plugins.min.css" rel="stylesheet" type="text/css" />
    <link href="public/admin/assets/css/style.css" rel="stylesheet" type="text/css" />
    <link href="public/admin/assets/css/responsive.css" rel="stylesheet" type="text/css" />
    <link href="public/admin/assets/css/theme-color.css" rel="stylesheet" type="text/css" />
    <!-- Date Time item CSS -->
    <link rel="stylesheet" href="assets/plugins/material-datetimepicker/bootstrap-material-datetimepicker.css" />
    <!-- data tables -->
    <link href="public/admin/assets/plugins/datatables/plugins/bootstrap/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css"/>
	<!-- favicon -->
	<link rel="shortcut icon" href="public/admin/assets/img/favicon.ico" /> 
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- animation -->
	<link href="public/admin/assets/css/pages/animate_page.css" rel="stylesheet">
 </head>
 <!-- END HEAD -->
<body class="page-header-fixed sidemenu-closed-hidelogo page-content-white page-md header-white dark-sidebar-color logo-dark">
    <div class="page-wrapper">
         <!-- start header -->
		<?php require_once "./mvc/views/admin/PhanCoDinh/header_admin.php" ;?>

		<!-- end header -->
        <!-- start page container -->
        <div class="page-container">
 			<!-- start sidebar menu -->
			<?php require_once "./mvc/views/admin/PhanCoDinh/siderbar_menu_admin.php";?>
            <!-- end sidebar menu --> 
			<!-- start page content -->
            <?php require_once "./mvc/views/admin/".$data["page"].".php" ; ?>
        	<!-- end page container -->

		</div>
        <!-- start footer -->
       <?php require_once "./mvc/views/admin/PhanCoDinh/footer_admin.php"; ?>
        <!-- end footer -->
    </div>
    <!-- start js include path -->
    <script src="public/admin/assets/plugins/jquery/jquery.min.js" ></script>
    <script src="public/admin/assets/plugins/popper/popper.min.js" ></script>
    <script src="public/admin/assets/plugins/jquery-blockui/jquery.blockui.min.js" ></script>
	<script src="public/admin/assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
    <!-- bootstrap -->
    <script src="public/admin/assets/plugins/bootstrap/js/bootstrap.min.js" ></script>
    <script src="public/admin/assets/plugins/sparkline/jquery.sparkline.min.js" ></script>
	<script src="public/admin/assets/js/pages/sparkline/sparkline-data.js" ></script>
    <!-- Common js-->
	<script src="public/admin/assets/js/app.js" ></script>
    <script src="public/admin/assets/js/layout.js" ></script>
    <script src="public/admin/assets/js/theme-color.js" ></script>
    <!-- material -->
    <script src="public/admin/assets/plugins/material/material.min.js"></script>
    <script src="public/admin/assets/plugins/material/material.min.js"></script>
    <script src="public/admin/assets/js/pages/material_select/getmdl-select.js" ></script>
    <script  src="public/admin/assets/plugins/material-datetimepicker/moment-with-locales.min.js"></script>
	<script  src="public/admin/assets/plugins/material-datetimepicker/bootstrap-material-datetimepicker.js"></script>
	<script  src="public/admin/assets/plugins/material-datetimepicker/datetimepicker.js"></script>
    <!-- animation -->
    <script src="public/admin/assets/js/pages/ui/animations.js" ></script>
    <!-- morris chart -->
    <script src="public/admin/assets/plugins/morris/morris.min.js" ></script>
    <script src="public/admin/assets/plugins/morris/raphael-min.js" ></script>
    <script src="public/admin/assets/js/pages/chart/morris/morris_home_data.js" ></script>
    <!-- dropzone -->
    <script src="public/admin/assets/plugins/dropzone/dropzone.js" ></script>
    <script src="public/admin/assets/plugins/dropzone/dropzone-call.js" ></script>
    <!-- data tables -->
    <script src="public/admin/assets/plugins/datatables/jquery.dataTables.min.js" ></script>
 	<script src="public/admin/assets/plugins/datatables/plugins/bootstrap/dataTables.bootstrap4.min.js" ></script>
 	<script src="public/admin/assets/js/pages/table/table_data.js" ></script>
     <!-- animation -->
	<script src="public/admin/assets/js/pages/ui/animations.js" ></script>
    <!-- end js include path -->
  </body>
</html>