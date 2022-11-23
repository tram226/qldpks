			<!-- start page content -->
            <div class="page-content-wrapper">
                <div class="page-content">
                    <div class="page-bar">
                       
                    </div>
                     <div class="row">
						<div class="col-sm-12">
							<div class="card-box">
								<div class="card-head">
									<header>Update Properties</header>
									 </ul>
                                </div>
                                <form action="./admin/updatethuoctinh/<?php echo $data["id_tt"]?>" method="POST" > 
								<div class="card-body row">
										<div class="col-lg-6 p-t-20"> 
										<?php $info = json_decode($data["onethuoctinh"],true);?>
                                                    <?php foreach($info as $row){ ?>
							              <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height txt-full-width">
									            <input class="mdl-textfield__input" type="text" id="sample2"  value="<?php echo $row["ma_thuoc_tinh"];?>"
												tabIndex="-1" name="ma_tt_up">
									            <label for="sample2" class="pull-right margin-0">
									                <i class="mdl-icon-toggle__label material-icons">keyboard_arrow_down</i>
									            </label>
									            <label for="sample2" class="mdl-textfield__label">Mã Thuộc Tính</label>
									            <ul data-mdl-for="sample2" class="mdl-menu mdl-menu--bottom-left mdl-js-menu">
                                                    <?php $info = $data["maThuocTinh"];?>
                                                    <?php foreach($info as $row1){ ?>
									                <li class="mdl-menu__item"> <?php echo $row1["ma_thuoc_tinh"]?></li>
                                                    <?php } ?>
									            </ul>
									        </div>
							            </div>
									<!-- -->
						            <div class="col-lg-6 p-t-20"> 
                                    <div class = "mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
					                     <input class = "mdl-textfield__input" type = "text" value="<?php echo $row["ten_thuoc_tinh"];?>"
										 id = "txtRoomNo" name="ten_tt_up">
					                     <label class = "mdl-textfield__label">Tên Thuộc Tính</label>
					                  </div>
						           	</div>
									   <div class="col-lg-12 p-t-20"> 
							              <div class = "mdl-textfield mdl-js-textfield txt-full-width">
						                     <textarea class = "mdl-textfield__input" rows =  "4" 
						                        id = "education" name="nd_tt_up"><?php echo $row["noi_dung"];?></textarea>
						                     <label class = "mdl-textfield__label" >Nội Dung Mô Tả</label>
						                  </div>
								         </div>
										 <?php } ?>
							         <div class="col-lg-12 p-t-20 text-center"> 
                                          <button type="submit"  name="update_tt"  style="border-radius: 20px;"
                                          class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 m-r-20 btn-pink">
                                              Cập Nhật</button>
										<button type="button"  onclick="huybo()"  style="border-radius: 20px;"
										class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 btn-default">Xem Danh Sách</button>
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
				swal("Thêm Thuộc Tính Thành Công!",
				"");
			}

			function thatbai(){
				swal("Thêm Thuộc Tính không Thành Công!",
				"Hãy Chắc chắn rằng bạn nhập đúng hoặc không bỏ trống các trường.");
			}

			function huybo(){
				window.location = "./admin/viewThuocTinh";
			}
		</script>
