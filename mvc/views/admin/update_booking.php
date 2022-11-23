<!-- start page content -->
<div class="page-content-wrapper">
                <div class="page-content">
                    <div class="page-bar">
                        
                    </div>
                     <div class="row">
						<div class="col-sm-12">
							<div class="card-box">
								<div class="card-head">
									<header>Edit Room Booking</header>
								</div>

                                <!-- from cap nhat booking --> 
                                <?php $one_booking  = json_decode($data["one_booking_room"],true); ?>
                                <?php foreach($one_booking as $row) { ?>
                                <form action="./admin/editbooking/<?php echo $row["ma_dat_phong"]?>" method="POST">
								<div class="card-body row">
						            <div class="col-lg-6 p-t-20"> 
						              <div class = "mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
					                     <input class = "mdl-textfield__input" type = "text" 
										 style="border: 1px solid #A9A9A9 ;border-radius: 5px; padding: 2px;"
										 readonly  value="<?php echo $row["ma_dat_phong"] ?>" 
                                        name="ma_dp" id = "txtFirstName">
					                     <label class = "mdl-textfield__label">Mã Đặt phòng</label>
					                  </div>
						            </div>
						            <div class="col-lg-6 p-t-20"> 
						              <div class = "mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
					                     <input class = "mdl-textfield__input" type = "text" name="ngay_check_in"
										 style="border: 1px solid #A9A9A9 ;border-radius: 5px; padding: 2px;"
										 value="<?php echo $row["thoi_gian_vao"] ?>" id = "txtLasttName">
					                     <label class = "mdl-textfield__label" >Ngày check-in</label>
					                  </div>
						            </div>
						             <div class="col-lg-6 p-t-20"> 
						              <div class = "mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
					                     <input class = "mdl-textfield__input" type = "text" name="email" 
										 style="border: 1px solid #A9A9A9 ;border-radius: 5px; padding: 2px;"
										 value="<?php echo $row["email"] ?>" id = "txtemail">
					                     <label class = "mdl-textfield__label" >Email</label>
					                      <span class = "mdl-textfield__error">Enter Valid Email Address!</span>
					                  </div>
						            </div>
									<div class="col-lg-6 p-t-20"> 
						              <div class = "mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
					                     <input class = "mdl-textfield__input" type = "number" name="slp"
										 style="border: 1px solid #A9A9A9 ;border-radius: 5px; padding: 2px;"
										  value="<?php echo $row["so_luong_phong"] ?>" id = "txtemail">
					                     <label class = "mdl-textfield__label" >Số Lượng Phòng</label>
					                      <span class = "mdl-textfield__error">Nhập Số lượng Phòng</span>
					                  </div>
						            </div>

						             <div class="col-lg-6 p-t-20"> 
						              <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height txt-full-width">
								            <input class="mdl-textfield__input" type="text" id="sample2" 
											style="border: 1px solid #A9A9A9 ;border-radius: 5px; padding: 2px;"
											name="ngay_check_out"
											value="<?php echo $row["thoi_gian_ra"] ?>"  tabIndex="-1">
								            <label for="sample2" class="pull-right margin-0">
								                
								            </label>
								            <label for="sample2" class="mdl-textfield__label">Ngày check-out</label>
								           
								        </div>
						            </div>
									<div class="col-lg-6 p-t-20">
						               <div class = "mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
					                     <input class = "mdl-textfield__input" type = "text"
										 style="border: 1px solid #A9A9A9 ;border-radius: 5px; padding: 2px;"
										  value="<?php echo $row["sdt"] ?>" name="sdt"
					                        pattern = "-?[0-9]*(\.[0-9]+)?" id = "text5">
					                     <label class = "mdl-textfield__label" for = "text5">Số điện thoại</label>
					                     <span class = "mdl-textfield__error">Number required!</span>
					                  </div>
						            </div>
						            <div class="col-lg-6 p-t-20"> 
						              <div class = "mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
					                     <input class = "mdl-textfield__input" type = "text" name="nguoi_lon"
										 style="border: 1px solid #A9A9A9 ;border-radius: 5px; padding: 2px;"
										 value="<?php echo $row["nguoi_lon"] ?>" >
					                     <label class = "mdl-textfield__label" >Người lớn</label>
					                  </div>
						            </div>
						            <div class="col-lg-6 p-t-20"> 
						              <div class = "mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
					                     <input class = "mdl-textfield__input" type = "text" name="hoten"
										 style="border: 1px solid #A9A9A9 ;border-radius: 5px; padding: 2px;"
										 value="<?php echo $row["ho_ten"] ?>" >
					                     <label class = "mdl-textfield__label" >Họ tên</label>
					                  </div>
						            </div>
						            <div class="col-lg-6 p-t-20"> 
						              <div class = "mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
					                     <input class = "mdl-textfield__input" type = "text" name="treem"
										 style="border: 1px solid #A9A9A9 ;border-radius: 5px; padding: 2px;"
										  value="<?php echo $row["tre_em"] ?>" >
					                     <label class = "mdl-textfield__label" >Trẻ em</label>
					                  </div>
						            </div>
						             <div class="col-lg-6 p-t-20"> 
						              <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height txt-full-width">
								            <input class="mdl-textfield__input" type="text" id="list2" name="ngay_dat"
											style="border: 1px solid #A9A9A9 ;border-radius: 5px; padding: 2px;"
											 value="<?php echo $row["thoi_gian_dat"] ?>" readonly tabIndex="-1">
								            <label for="list2" class="pull-right margin-0">
								                
								            <label for="list2" class="mdl-textfield__label">Thời Gian Đặt</label>
								         
								        </div>
						           	</div>
						           	<div class="col-lg-6 p-t-20"> 
									   <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height txt-full-width">
								            <input class="mdl-textfield__input" type="text" id="list3" 
											style="border: 1px solid #A9A9A9 ;border-radius: 5px; padding: 2px;"
											value="<?php echo $row["ma_phong"] ?>" name="loai_phong"
											 readonly tabIndex="-1">
								            <label for="list3" class="pull-right margin-0">
								                <i class="mdl-icon-toggle__label material-icons">keyboard_arrow_down</i>
								            </label>
								            <label for="list3" class="mdl-textfield__label">Loại Phòng</label>
								            <ul data-mdl-for="list3" class="mdl-menu mdl-menu--bottom-left mdl-js-menu">
												<?php if(isset($data["listroom"])){
													$list = json_decode($data["listroom"],true); $number = 1;
													if(!empty($list)){
														foreach($list as $row1){
															
															echo '<li class="mdl-menu__item" data-val='.$number.' >'. $row1["ma_phong"] .'</li>';
															$number ++;
														}
													}
												}							
												
												?>
											</ul>
								        </div>
						           	</div>
									   <div class="col-lg-6 p-t-20"> 
						              <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height txt-full-width">
								            <input class="mdl-textfield__input" type="text" id="list2" name="ngay_dat"
											style="border: 1px solid #A9A9A9 ;border-radius: 5px; padding: 2px;"
											 value="<?php echo $row["gia_tien"] ?>" readonly tabIndex="-1">
								            <label for="list2" class="pull-right margin-0">
								                
								            <label for="list2" class="mdl-textfield__label">Giá Tiền</label>
								         
								        </div>
						           	</div>
						            <div class="col-lg-12 p-t-20"> 
						              <div class = "mdl-textfield mdl-js-textfield txt-full-width">
					                     <textarea class = "mdl-textfield__input" rows =  "4" name="ghichu"
										 style="border: 1px solid #A9A9A9 ;border-radius: 5px; padding: 2px;"
					                        id = "text7" ><?php echo $row["ghichu"] ?></textarea>
					                     <label class = "mdl-textfield__label" for = "text7">Address</label>
					                  </div>
							         </div>
									
									<?php 
										if($row["thanh_toan"]== "Thanh Toán Ngay"){
											echo '<div class="col-lg-12 p-t-20 text-center"> 
											<a type="button" style="border-radius: 20px;" href="./admin/datphong"
											class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 btn-default">Xem Danh Sách</a>
											</div>';
										}else{
											echo '<div class="col-lg-12 p-t-20 text-center"> 
											<button type="submit" style="border-radius: 20px;" name="btn_update_booking"
											 class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 m-r-20 btn-pink">Cập Nhật</button>
										  <a type="button" style="border-radius: 20px;" href="./admin/datphong"
										   class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 btn-default">Xem Danh Sách</a>
										   <buttontype="button" style="border-radius: 20px;"  onclick="thanhtoan('.$row["ma_dat_phong"].','.$row["gia_tien"].')"
										   class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 btn-red">Thanh Toán</button>
									  </div>';
										}
									
									
									
									?>
                                     
							        <!-- <div class="col-lg-12 p-t-20 text-center"> 
						              	<button type="submit" style="border-radius: 20px;" name="btn_update_booking"
										   class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 m-r-20 btn-pink">Cập Nhật</button>
										<a type="button" style="border-radius: 20px;" href="./admin/datphong"
										 class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 btn-default">Xem Danh Sách</a>
						            </div> -->
								</div>
                                    <?php }?>
                                </form>
                                <!-- end  from cap nhat booking --> 
							</div>
						</div>
					</div> 
                </div>
            </div>
            <!-- end page content -->
			<!-- scrip in here--> 
<script>
 

 function thanhtoan(ma,giatien){
			swal({
		title: "Thanh Toán "+giatien +" VNĐ",
		text: "hãy chăc chắn bạn nhận đúng số tiền này từ khách hàng nhé ! " ,
		icon: "warning",
		buttons: true,
		dangerMode: true,
		})
		.then((willDelete) => {
		if (willDelete) {
			window.location = "./admin/thanhtoan_phong/"+ma;
		} else {
			swal("Phòng của bạn vân chưa thanh toán!");
		}
		});
 }
</script>