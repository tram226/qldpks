<!-- start page content -->
<div class="page-content-wrapper">
                <div class="page-content">
                    <div class="page-bar">
                        <div class="page-title-breadcrumb">
                            <div class=" pull-left">
                                <div class="page-title">Messages for you</div>
                            </div>
                            <ol class="breadcrumb page-breadcrumb pull-right">
                                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li><a class="parent-item" href="">Tin Nhắn</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li class="active">View</li>
                            </ol>
                        </div>
                    </div>
                    <div class="inbox">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card card-topline-gray">
                                <div class="card-body no-padding height-9">
									<div class="row">
			                          
			                            <div class="col-md-12">
			                                <div class="inbox-body">
			                                

											<!-- BEGIN START --> 
											<?php $chitiet  = json_decode($data["one_lienhe"], true); 
												foreach ( $chitiet as $row_lh){ 
													 $String_time = $row_lh["id_lien_he"];
														$time_lh  = substr($String_time,0,2).":". substr($String_time,2,2)."  Ngày ".$row_lh["ngay"];
													?>

											
			                                    <div class="inbox-body no-pad">
			                                        <section class="mail-list">
			                                            <div class="mail-sender">
			                                            	<div class="mail-heading">
			                                                	<h4 class="vew-mail-header"><b>Tin nhắn từ <?php echo $row_lh["ho_ten"]; ?></b></h4>
			                                                </div>
			                                                <hr>
															<div class="media">
																<a href="#" class="pull-left"> <img alt=""
																	src="https://onlinecrm.vn/media/articles/cham-soc-khach-hang-sau-ban-hang.jpg" class="img-circle" width="40">
																</a>
																<div class="media-body">
																	<span class="date pull-right"><?php echo $time_lh ;?>
																	</span>
																	<h4 class="text-primary"><?php echo $row_lh["ho_ten"]; ?></h4>
																	<small class="text-muted">From:
																	<?php echo $row_lh["email"]; ?></small></br>
																	<small class="text-muted">Số Điện Thoại:
																	<?php echo $row_lh["sdt"]; ?></small>
																</div>
															</div>
														</div>

														<?php } ?>
			                                            <div class="view-mail">
			                                                <p> <?php echo $row_lh["noi_dung"]; ?> </p>
			                                            </div>
			                                          
			                                            <div class="compose-btn pull-left">
			                                                <a href="./admin/getAll_lien_he/all" class="btn btn-sm btn-primary"><i
																class="fa fa-reply"></i> quay lại</a>
			                                             
			                                            </div>
			                                        </section>
			                                    </div>
			                                </div>
			                            </div>
			                        </div>
								</div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
            <!-- end page content -->