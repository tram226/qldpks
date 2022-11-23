
    <div class="limiter">
		<div class="container-login100 page-background">
			<div class="wrap-login100">
				<form class="login100-form validate-form"  onsubmit="return checkpass()"
				action="./admin/taotaikhoan" method="POST" name="taotaikhoan">
					<span class="login100-form-logo">
						<i class="zmdi zmdi-flower"></i>
					</span>
					<span class="login100-form-title p-b-34 p-t-27">
					Đăng Kí Tài Khoản
					</span>
					<div class="wrap-input100 validate-input" data-validate = "Enter username">
						<input class="input100" type="text" name="username_create" placeholder="Username">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>
					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="pass_create" id="pass_create" placeholder="Password">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>
					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="pass_confirm" id="pass_confirm" placeholder="Confirm password">
						<span class="focus-input100" data-placeholder="&#xf194;"></span>
					</div>
				
					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit" name="btn_dangki">
							Đăng Kí
						</button>
					</div>
					<div class="text-center p-t-90">
					<a class="txt1" href="./admin/login">
							Đã có tài khoản? Đăng Nhập
						</a> || 
						<a class="txt1" href="#">
							Hỗ trợ 18001089 or Nhóm 12
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
<!-- kiểm tra độ khớp của mật khẩ !--> 
<script type="text/javascript">
	function checkpass(){
	var pass = document.forms["taotaikhoan"]["pass_create"].value;
	var nhaplai  = document.forms["taotaikhoan"]["pass_confirm"].value;
	if(pass != nhaplai){
		swal("Pass word  bạn nhập không giống nhau ");
		return false;
	}
	if(pass == pass_confirm){
		return true;
	}
	
	}

	function thanh_cong(){
		swal("Tạo Tài khoản thành công  " , " hãy quay trở lại trang đăng nhập để đăng nhập nhé !");
		return false;
	}
	function that_bai(){
		swal("Lỗi tạo tài khoản  " , " Gặp lỗi khi tạo tài khoản, hãy thử lại!");
		return false;
	}
</script>
<?php 

   
    if(isset($data["result"])){
        if($data["result"]){
            echo '<script type="text/javascript">
              thanh_cong();      </script>';
        }else{
			echo '<script type="text/javascript"> 
			that_bai();      </script>';
        }
    }

?>



