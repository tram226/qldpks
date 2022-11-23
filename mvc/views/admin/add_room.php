
 			
			<!-- start page content -->
            <div class="page-content-wrapper">
                <div class="page-content">
                    <div class="page-bar">
                       
                    </div>
                     <div class="row">
						<div class="col-sm-12">
							<div class="card-box">
								<div class="card-head" style="background-color: #008000;border-radius: 5px; padding: 2px;">
									<header>Add room</header>
									  <!--<button id = "panel-button" 
			                           class = "mdl-button mdl-js-button mdl-button--icon pull-right" 
			                           data-upgraded = ",MaterialButton">
			                            <i class = "material-icons">more_vert</i>
			                        </button>
			                        <ul class = "mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect"
			                           data-mdl-for = "panel-button">
			                           <li class = "mdl-menu__item"><i class="material-icons">assistant_photo</i>Action</li>
			                           <li class = "mdl-menu__item"><i class="material-icons">print</i>Another action</li>
			                        <li class = "mdl-menu__item"><i class="material-icons">favorite</i>Something else here</li> -->
			                        </ul>
								</div>

								<form action="./admin/add_room" method="POST">
								<!-- from thêm Phòng-->
								<div class="card-body row">
						            <div class="col-lg-6 p-t-20"> 
						              <div class = "mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
					                     <input class = "mdl-textfield__input" type = "text" id = "txtRoomNo" name="ma_phong"
										 style="border: 1px solid #A9A9A9 ;border-radius: 5px; padding: 2px;">
					                     <label class = "mdl-textfield__label" style="padding-left: 5px;">Mã Phòng của Bạn</label>
					                  </div>
						            </div>
						            <div class="col-lg-6 p-t-20"> 
                                    <div class = "mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
					                     <input class = "mdl-textfield__input" type = "text" id = "txtRoomNo" name="ten_phong"
										 style="border: 1px solid #A9A9A9 ;border-radius: 5px; padding: 2px;">
					                     <label class = "mdl-textfield__label">Tên Phòng</label>
					                  </div>
						           	</div>
						           	<div class="col-lg-6 p-t-20"> 
                                       <div class = "mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
					                     <input class = "mdl-textfield__input" type = "number" id = "txtRoomNo" name="gia_phong"
										 style="border: 1px solid #A9A9A9 ;border-radius: 5px; padding: 2px;">
					                     <label class = "mdl-textfield__label">Giá Phòng</label>
					                  </div>
						            </div>
									<div class="col-lg-6 p-t-20"> 
							              <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height txt-full-width">
									            <input class="mdl-textfield__input" type="text" id="sample3" 
												style="border: 1px solid #A9A9A9 ;border-radius: 5px; padding: 2px;"
												value="" readonly tabIndex="-1" name="ma_ha">
									            <label for="sample2" class="pull-right margin-0">
									                <i class="mdl-icon-toggle__label material-icons">keyboard_arrow_down</i>
									            </label>
									            <label for="sample3" class="mdl-textfield__label">Mã Hình Ảnh</label>
									            <ul data-mdl-for="sample3" class="mdl-menu mdl-menu--bottom-left mdl-js-menu">
                                                <?php $hinhanh = $data["maHinhAnh"];?>
                                                    <?php foreach($hinhanh as $row){ ?>
									                <li class="mdl-menu__item" data-val="1"> <?php echo $row["ma_hinh_anh"]?></li>
									               
                                                    <?php } ?>
									            </ul>
									        </div>
							            </div>
										<div class="col-lg-6 p-t-20"> 
							              <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height txt-full-width">
									            <input class="mdl-textfield__input" style="border: 1px solid #A9A9A9 ;border-radius: 5px; padding: 2px;"
												type="text" id="sample2" value="" readonly tabIndex="-1" name="ma_tt">
									            <label for="sample2" class="pull-right margin-0">
									                <i class="mdl-icon-toggle__label material-icons">keyboard_arrow_down</i>
									            </label>
									            <label for="sample2" class="mdl-textfield__label">Mã Thuộc Tính</label>
									            <ul data-mdl-for="sample2" class="mdl-menu mdl-menu--bottom-left mdl-js-menu">
                                                    <?php $thuoctinh = $data["maThuocTinh"];?>
                                                    <?php foreach($thuoctinh as $row){ ?>
									                <li class="mdl-menu__item" data-val="1"> <?php echo $row["ma_thuoc_tinh"]?></li>
									               
                                                    <?php } ?>
									            </ul>
									        </div>
							            </div>
                                       <div class="col-lg-12 p-t-20"> 
						              <div class = "mdl-textfield mdl-js-textfield txt-full-width">
					                     <textarea class = "mdl-textfield__input" rows =  "4"  name="noi_dung"
										 style="border: 1px solid #A9A9A9 ;border-radius: 5px; padding: 2px;"
					                        id = "education" ></textarea>
					                     <label class = "mdl-textfield__label" for = "text7">Nhập nội dung mô tả cho phòng của bạn</label>
					                  </div>
							         </div>
							         <div class="col-lg-12 p-t-20 text-center"> 
						              	<button type="submit" name="add_new_room" style="border-radius: 20px;"
										  class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 m-r-20 btn-pink">
										  Thêm Phòng Này</button>
										<button type="button" onclick="xem_ds()" style="border-radius:20px;"
										class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 btn-default">
										Xem Danh Sách</button>
						            </div>
								</div>
								</form>


								<!-- END from thêm Phòng-->
							</div>
						</div>
					</div> 
                </div>
            </div>
            <!-- end page content -->
<!-- phần này dành cho java scrip hoặc php --> 
<script type="text/javascript">
			function xem_ds(){
				window.location ="./admin/allroom"
			}
			function thanhcong(){
				swal("Thành Công!",
				"Phòng Của Bạn Đã Được Thêm Vào Hệ Thống");
			}

			function thatbai(){
				swal("Lỗi......!",
				"Sự cố không mong muốn khi  thêm phòng. Kiểm Tra các ô và thử lại");
			}
		</script>

		<?php 
		if(isset($data["result"])){
			if($data["result"] == true){
				echo '<script type="text/javascript"> thanhcong(); </script>';
			}else{
				echo '<script type="text/javascript"> thatbai(); </script>';
			}
		}
		?>