<!-- start page content -->
<div class="page-content-wrapper">
                <div class="page-content">
                    <div class="page-bar">
                       
                    </div>
                     <div class="row">
							<div class="col-sm-12">
								<div class="card-box">
									<div class="card-head">
										<header>Update Service</header>
                                  
									</div>
                                    <?php $list_dv  = json_decode($data["onedichvu"],true); ?>
                                        <?php foreach($list_dv as $row_dv){
                                     ?>
                                     <!-- start form -->
                                     <form action="./admin/updatedichvu/<?php echo $row_dv["id_dich_vu"];?>" method="POST">
                                     
									<div class="card-body row">
							            <div class="col-lg-6 p-t-20"> 
							              <div class = "mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
						                     <input class = "mdl-textfield__input" type = "text" value="<?php echo $row_dv["ma_dich_vu"]; ?>"
											 style="border: 1px solid #A9A9A9 ;border-radius: 5px; padding: 2px;"
											 id = "txtModeltName" name="madv">
						                     <label class = "mdl-textfield__label">Mã Dịch Vụ</label>
						                  </div>
							            </div>
							            <div class="col-lg-6 p-t-20"> 
							              <div class = "mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
						                     <input class = "mdl-textfield__input"  value="<?php echo $row_dv["tieu_de"]; ?>"
											 style="border: 1px solid #A9A9A9 ;border-radius: 5px; padding: 2px;"
											 type = "text" id = "txtModelNumber" name="tieude">
						                     <label class = "mdl-textfield__label" >Tiêu Đề</label>
						                  </div>
							            </div>
							            
							            
							            <div class="col-lg-6 p-t-20"> 
							              <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height txt-full-width">
									            <input class="mdl-textfield__input" type="text" value="<?php echo $row_dv["ma_thuoc_tinh"]; ?>"
												style="border: 1px solid #A9A9A9 ;border-radius: 5px; padding: 2px;"
												id="sample2" value="" readonly tabIndex="-1" name="matt">
									            <label for="sample2" class="pull-right margin-0">
									                <i class="mdl-icon-toggle__label material-icons">keyboard_arrow_down</i>
									            </label>
									            <label for="sample2" class="mdl-textfield__label">Mã Thuộc Tính</label>
									            <ul data-mdl-for="sample2" class="mdl-menu mdl-menu--bottom-left mdl-js-menu">
                                                    <?php $thuoctinh = $data["maThuocTinh"];?>
                                                    <?php foreach($thuoctinh as $row){ ?>
									                <li class="mdl-menu__item" data-val="1"> <?php echo $row["ma_thuoc_tinh"];?></li>
									               
                                                    <?php } ?>
									            </ul>
									        </div>
							            </div>
							            <div class="col-lg-6 p-t-20"> 
							              <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height txt-full-width">
									            <input class="mdl-textfield__input" type="text" value="<?php echo $row_dv["ma_hinh_anh"] ;?>"
												style="border: 1px solid #A9A9A9 ;border-radius: 5px; padding: 2px;"
												id="sample3" value="" readonly tabIndex="-1" name="maha">
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
							            
							            
							           
                                        <div class="col-lg-12 p-t-20"> 
							              <div class = "mdl-textfield mdl-js-textfield txt-full-width">
						                     <textarea class = "mdl-textfield__input" rows =  "4"  style="border: 1px solid #A9A9A9 ;border-radius: 5px; padding: 2px;"
						                        id = "education" name="noidung"><?php echo $row_dv["noi_dung"]; ?></textarea>
						                     <label class = "mdl-textfield__label" >Nội Dung Mô Tả</label>
						                  </div>
								         </div>
                                         
								         <div class="col-lg-12 p-t-20 text-center"> 
							              	<button type="submit" name="addService" style="border-radius: 20px;"
                                            class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 m-r-20 btn-pink">
                                            Cập Nhật </button>
											<a type="button" style="border-radius: 20px;" href="./admin/alldichvu"
											class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 btn-default">
											Xem Danh Sách</a>
							            </div>
									</div>
                                    <?php } ?>
                                     </form>
                                    <!-- end form -->
								</div>
							</div>
						</div> 
                </div>
            </div>
             <!-- end page content -->

<!-- ham ngoai vi danh cho javascript va php -->
<script type="text/javascript">
			function thanhcong(){
				swal("Thêm Dịch Vụ Thành Công!",
				"");
			}

			function thatbai(){
				swal("Thêm Dịch Vụ Thất Bại!",
				"Có vẻ như chúng tôi gặp sự cố khi thêm dịch vụ của bạn. Vui lòng thử lại");
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