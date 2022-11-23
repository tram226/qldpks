<!-- start page content -->
<div class="page-content-wrapper">
                <div class="page-content">
                    <div class="page-bar">
                      
                    </div>
                     <div class="row">
							<div class="col-sm-12">
								<div class="card-box">
									<div class="card-head"  style="background-color: #008000;border-radius: 5px; padding: 2px;">
										<header>Cập Nhật Khuyến Mãi</header>
                                    
									</div>
                                     <!-- start form -->
                                    <?php $chitiet = json_decode($data["chitietkhuyenmai"],true);
                                        foreach($chitiet as $row_ct){ ?>
                                     <form action="./admin/update_km/<?php echo $row_ct["id_khuyen_mai"]; ?>" method="POST">
									<div class="card-body row">
							            <div class="col-lg-6 p-t-20"> 
							              <div class = "mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
						                     <input class = "mdl-textfield__input" value="<?php echo $row_ct["ma_km"]; ?>"
											 style="border: 1px solid #A9A9A9 ;border-radius: 5px; padding: 2px;"
											 type = "text" id = "txtModeltName" name="ma_km">
						                     <label class = "mdl-textfield__label">Mã Khuyến Mãi</label>
						                  </div>
							            </div>
							            <div class="col-lg-6 p-t-20"> 
							              <div class = "mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
						                     <input class = "mdl-textfield__input" value="<?php echo $row_ct["tieu_de"]; ?>"
											 style="border: 1px solid #A9A9A9 ;border-radius: 5px; padding: 2px;" 
											 type = "text" id = "txtModelNumber" name="tieu_de">
						                     <label class = "mdl-textfield__label" >Tên khuyến mãi</label>
						                  </div>
							            </div>
							            
							            
							            <div class="col-lg-6 p-t-20"> 
							              <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height txt-full-width">
									            <input class="mdl-textfield__input" type="text" id="sample2" value="<?php echo $row_ct["ma_thuoc_tinh"]; ?>"
												style="border: 1px solid #A9A9A9 ;border-radius: 5px; padding: 2px;" value="" readonly tabIndex="-1" name="ma_tt">
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
							            <div class="col-lg-6 p-t-20"> 
							              <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height txt-full-width">
									            <input class="mdl-textfield__input" type="text" id="sample3" readonly 
                                                value="<?php echo $row_ct["ma_hinh_anh"]; ?>"
												style="border: 1px solid #A9A9A9 ;border-radius: 5px; padding: 2px;"tabIndex="-1" name="ma_ha">
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
						                     <textarea class = "mdl-textfield__input" rows =  "4" style="border: 1px solid #A9A9A9 ;border-radius: 5px; padding: 2px;"
						                        id = "education" name="noi_dung"><?php echo $row_ct["noi_dung"]; ?></textarea>
						                     <label class = "mdl-textfield__label" >Nội Dung Mô Tả</label>
						                  </div>
                                         </div>
                                         <?php } ?>
								         <div class="col-lg-12 p-t-20 text-center"> 
							              	<button type="submit" name="btn_update_km" style="border-radius: 20px;"
                                            class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 m-r-20 btn-pink">
                                            Cập Nhật</button>
											<a type="button" href="./admin/allkm" style="border-radius: 20px;"
											class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 btn-default">Xem danh sách</a>
							            </div>
									</div>

                                     </form>
                                    <!-- end form -->
								</div>
							</div>
						</div> 
                </div>
            </div>
             <!-- end page content -->

<!-- ham ngoai vi danh cho javascript va php -->
