			<!-- start page content -->
            <div class="page-content-wrapper">
                <div class="page-content">
                    <div class="page-bar">
                        
                    </div>
                     <div class="row">
						<div class="col-sm-12">
							<div class="card-box">
								<div class="card-head"  style="background-color: #008000;border-radius: 5px; padding: 2px;">
									<header>Add Image</header>
									 </ul>
                                </div>
                                <form action="./admin/add_image" method="POST" enctype="multipart/form-data"> 
								<div class="card-body row">


										<div class="col-lg-6 p-t-20"> 
							              <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height txt-full-width">
									            <input class="mdl-textfield__input" type="text" 
												style="border: 1px solid #A9A9A9 ;border-radius: 5px; padding: 2px;"
												id="sample3" value=""  tabIndex="-1" name="ma_ha">
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

									<!-- -->
						            <div class="col-lg-6 p-t-20"> 
                                    <div class = "mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
					                     <input class = "mdl-textfield__input" type = "text" 
										 style="border: 1px solid #A9A9A9 ;border-radius: 5px; padding: 2px;"
										 id = "txtRoomNo" name="ten_anh">
					                     <label class = "mdl-textfield__label">Tên Ảnh</label>
					                  </div>
						           	</div>
									   <div class="col-lg-12 p-t-20">
									   <input type="file" name="image">
                                       </div>
							         <div class="col-lg-12 p-t-20 text-center"> 
                                          <button type="submit"  name="addImage" style="border-radius: 20px;"
                                          class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 m-r-20 btn-pink">
                                              Thêm Ảnh Này</button>
										<a type="button" style="border-radius: 20px;" href="./admin/allimage"
										class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 btn-default">
										Xem Danh Sách</a>
						            </div>
                                </div>
                                </form>
							</div>
						</div>
					</div> 
                </div>
			</div>
		<!-- ham ngoai vi danh cho javascript va php -->
		<script type="text/javascript">
			function thanhcong(){
				swal("Thêm Ảnh Thành Công!",
				"");
			}

			function thatbai(){
				swal("Thêm Ảnh không Thành Công!",
				"Có vẻ như chúng tôi gặp sự cố khi thêm ảnh này vui lòng thử lại");
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

