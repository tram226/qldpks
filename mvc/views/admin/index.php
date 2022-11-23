<div class="page-content-wrapper">
                <div class="page-content">
                    <div class="page-bar">
                       
                    </div>
                   <!-- start widget -->
					<div class="state-overview">
						<div class="row">
					        
					        <!-- /.col -->
					        <div class="col-xl-3 col-md-6 col-12">
					          <div class="info-box bg-orange">
					            <span class="info-box-icon push-bottom"><i class="material-icons">card_travel</i></span>
					            <div class="info-box-content">
					              <span class="info-box-text">Đặt Phòng</span>
								  <?php if(isset($data["total_datphong"])){
									  $total  = json_decode($data["total_datphong"],true);
									  if(!empty($total)){
										foreach($total as $row){
											echo ' <span class="info-box-number">'.$row["total"].'</span>';
										}
									  }
								  } ?>
					              <span class="progress-description">
								  		Tổng Số
					                  </span>
					            </div>
					            <!-- /.info-box-content -->
					          </div>
					          <!-- /.info-box -->
					        </div>
					        <!-- /.col -->
					        <div class="col-xl-3 col-md-6 col-12">
					          <div class="info-box bg-purple">
					            <span class="info-box-icon push-bottom" ><i class="material-icons">phone_in_talk</i></span>
					            <div class="info-box-content">
					              <span class="info-box-text"> Liên Hệ</span>
								  <?php if(isset($data["total_lienhe"])){
									  $total  = json_decode($data["total_lienhe"],true);
									  if(!empty($total)){
										foreach($total as $row){
											echo ' <span class="info-box-number">'.$row["total"].'</span>';
										}
									  }
								  } ?>
					              
					              <span class="progress-description">
					                    Tin nhắn 
					                  </span>
					            </div>
					            <!-- /.info-box-content -->
					          </div>
					          <!-- /.info-box -->
					        </div>
					        <!-- /.col -->
					        <div class="col-xl-3 col-md-6 col-12">
					          <div class="info-box bg-success">
					            <span class="info-box-icon push-bottom" ><i class="material-icons">monetization_on</i></span>
					            <div class="info-box-content" style="margin-left: 0px;"> 
					              <span class="info-box-text">Doanh Thu</span>
								  <?php if(isset($data["total_thanhtoan"])){
									  $total  = json_decode($data["total_thanhtoan"],true);
									  if(!empty($total)){
										foreach($total as $row){
											echo ' <span class="info-box-number">'.$row["total"].'</span>';
										}
									  }
								  } ?>					              
					            <span class="progress-description">
					                  VNĐ - Đã TT
					                  </span>
					            </div>
					            <!-- /.info-box-content -->
					          </div>
					          <!-- /.info-box -->
					        </div>
					        <!-- /.col -->

							   <!-- /.col -->
							   <div class="col-xl-3 col-md-6 col-12" >
					          <div class="info-box bg-success" style="background-color: red;" >
					            <span class="info-box-icon push-bottom"><i class="material-icons">monetization_on</i></span>
					            <div class="info-box-content" style="margin-left: 0px;">
					              <span class="info-box-text">Doanh Thu</span>
								  <?php if(isset($data["total_chuathanhtoan"])){
									  $total  = json_decode($data["total_chuathanhtoan"],true);
									  if(!empty($total)){
										foreach($total as $row){
											echo ' <span class="info-box-number">'.$row["total"].'</span>';
										}
									  }
									  if($total == "" || $total ==null){
										echo ' <span class="info-box-number">0</span>';
									  }
								  } ?>					              
					            <span class="progress-description">
					                  VNĐ -Chưa TT
					                  </span>
					            </div>
					            <!-- /.info-box-content -->
					          </div>
					          <!-- /.info-box -->
					        </div>
					        <!-- /.col -->
					      </div>
						</div>
					<!-- end widget -->
                    
                     <!-- start Payment Details -->
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="card  card-box">
                                <div class="card-head">
                                    <header>Booking Details</header>
                                    <div class="tools">
                                        <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
	                                    <a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
	                                    <a class="t-close btn-color fa fa-times" href="javascript:;"></a>
                                    </div>
                                </div>
                                <div class="card-body ">
                                  <div class="table-wrap">
										<div class="table-responsive">
											<table class="table display product-overview mb-30" id="support_table5">
												<thead>
													<tr>
														<th>STT</th>
														<th>Name</th>
														<th>SDT</th>
														<th>Ngày Đặt</th>
														<th>Room</th>														
														<th>Status</th>
														<th>Thanh Toán</th>
														<th>Action</th>
													</tr>
												</thead>
												<tbody>

												<!-- chi tiết danh sách -->
												<?php 
												if(isset($data["booking_room1"])){
													$list_booking = json_decode($data["booking_room1"],true); $number = 1; 
														if(!empty($list_booking)){
															foreach($list_booking as $row){ 
																echo "<tr>";
																echo "<td> $number </td>";
																echo "<td>".$row['ho_ten']." </td>";
																echo "<td>".$row['sdt']." </td>";
																echo "<td>".$row['thoi_gian_dat']." </td>";
																echo "<td>".$row['ma_phong']." </td>";
																$status = $row["trang_thai"];
																if($status =="0"){
																	echo "<td> Chờ Xác Nhận </td>";
																	echo'<td>
																<a href="./admin/xacnhan/'.$row["ma_dat_phong"].'/'.$row["trang_thai"].'" class="btn btn-tbl-primary btn-xs">
																<i class="fa fa-check" ></i>
																</a>
																<a href="./admin/editbooking/'.$row["ma_dat_phong"].'" class="btn btn-tbl-edit btn-xs">
																	<i class="fa fa-pencil"></i>
																</a>
																<button class="btn btn-tbl-delete btn-xs" onclick="deletebooking('.$row["ma_dat_phong"].')">
																<i class="fa fa-trash-o "></i>
																</button>															
																</td>';
																$number ++;
																}else if($status =="1"){
																	echo "<td> Đã Xác Nhận </td>";
																	$thanh_toan  = $row['thanh_toan'];
																	if($thanh_toan == "Thanh Toán Ngay"){
																		echo "<td> Đã Thanh Toán </td>";
																		echo'<td>
																		<a href="./admin/editbooking/'.$row["ma_dat_phong"].'" class="btn btn-tbl-edit btn-xs">
																		<i class="fa fa-pencil"></i></a>
																		<button class="btn btn-tbl-delete btn-xs" onclick="deletebooking('.$row["ma_dat_phong"].')">
																		<i class="fa fa-trash-o "></i></button>	
																														
																		</td>';
																	}else{
																		echo "<td> Chưa Thanh Toán</td>";
																		echo'<td>
																		<a href="./admin/editbooking/'.$row["ma_dat_phong"].'" class="btn btn-tbl-edit btn-xs">
																		<i class="fa fa-pencil"></i></a>
																		<button class="btn btn-tbl-delete btn-xs" onclick="deletebooking('.$row["ma_dat_phong"].')">
																		<i class="fa fa-trash-o "></i></button>	
																		<button class="btn btn-tbl-delete btn-xs" onclick="thanhtoan('.$row["ma_dat_phong"].','.$row["gia_tien"].')">
																		<i class="fa fa-cart-plus"></i></button>														
																		</td>';
																	}
																	
																// echo'<td>
																// <a href="./admin/editbooking/'.$row["ma_dat_phong"].'" class="btn btn-tbl-edit btn-xs">
																// <i class="fa fa-pencil"></i></a>
																// <button class="btn btn-tbl-delete btn-xs" onclick="deletebooking('.$row["ma_dat_phong"].')">
																// <i class="fa fa-trash-o "></i></button>	
																// <button class="btn btn-tbl-delete btn-xs" onclick="deletebooking('.$row["ma_dat_phong"].')">
																// <i class="fa fa-cart-plus"></i></button>														
																// </td>';
																$number ++;
																}
																
																echo "</tr>";
															}
														}
													}
												?>
												
												<!--end chi tiết danh sách -->
												</tbody>
											</table>
										</div>
									</div>	
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end Payment Details -->
        
                </div>
            </div>
            <!-- end page content -->
            <!-- start chat sidebar -->
   
            <!-- end chat sidebar -->

<!-- scrip in here--> 
<script>
 function deletebooking(ma){
			swal({
		title: "Delete booking?",
		text: "Bạn chắc chắn muốn xóa booking này chứ!",
		icon: "warning",
		buttons: true,
		dangerMode: true,
		})
		.then((willDelete) => {
		if (willDelete) {
			window.location = "./admin/deletebooking/"+ma;
		} else {
			swal("Quyết định của bạn thật tuyệt vời!");
		}
		});
 }


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
        