<!-- start page content -->
<div class="page-content-wrapper">
                <div class="page-content">
                    <div class="page-bar">   
                    </div>
                     <div class="row">
                        <div class="col-md-12">
                            <div class="card card-box">
                                <div class="card-head"  style="background-color: #ADD8E6;border-radius: 5px; padding: 2px;">
                                    <header>Danh Sách Đặt Phòng</header>
                                    <div class="tools">
                                        <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
	                                    <a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
	                                    <a class="t-close btn-color fa fa-times" href="javascript:;"></a>
                                    </div>
                                </div>
                                <div class="card-body ">
                                    <div class="row p-b-20">
                                        
                                      
                                    </div>
                                    <div class="table-scrollable">
                                    <table class="table table-hover table-checkable order-column full-width" id="example4">
                                        <thead>
                                        <tr>
                                            	<th class="center"> STT </th>
                                                <th class="center"> Mã Đặt Phòng</th>
                                                <th class="center"> CheckIn </th>
                                                <th class="center"> CheckOut</th>
                                                <th class="center"> Phòng </th>
                                                <th class="center"> Giá tiền </th>
                                                <th class="center"> Số Lượng Phòng </th>
                                                <th class="center"> Người Lớn </th>
                                                <th class="center"> Trẻ em </th>
                                                <th class="center"> Tên</th> 
                                                <th class="center"> Sdt </th>      
                                                <th class="center"> Email </th>  
                                                <th class="center"> Thanh Toán </th>                                   
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <!-- danh dách phòng --> 
                                        <?php  if(isset($data["booking_room"])){
                                            $list_room  = json_decode($data["booking_room"],true);
                                            $number = 1;
                                            if(!empty($list_room)){
                                                foreach($list_room  as $row_r){
                                                   
                                                    echo '<tr class="odd gradeX">
                                                    <td class="center">'.$number.'</td>
                                                    <td class="center">'.$row_r["ma_dat_phong"].'</td>
                                                    <td class="center">'.$row_r["thoi_gian_vao"].'</td>
                                                    <td class="center">'.$row_r["thoi_gian_ra"].'</td>
                                                    <td class="center">'.$row_r["ma_phong"].'</td>
                                                    <td class="center">'.$row_r["gia_tien"].'</td>
                                                    <td class="center">'.$row_r["so_luong_phong"].'</td>
                                                    <td class="center">'.$row_r["nguoi_lon"].'</td>
                                                    <td class="center">'.$row_r["tre_em"].'</td>
                                                    <td class="center">'.$row_r["ho_ten"].'</td>
                                                    <td class="center">'.$row_r["sdt"].'</td>
                                                    <td class="center">'.$row_r["email"].'</td> ';
                                                    $thanh_toan  = $row_r['thanh_toan'];
																	if($thanh_toan == "Thanh Toán Ngay"){
																		echo '<td class="center"> Đã Thanh Toán</td>';
																	}else{
																		echo '<td class="center"> Chưa Thanh Toán</td>';
																	}
                                                   
                                                    
                                                    echo '<td class="center">
                                                        <a href="./admin/editbooking/'.$row_r["ma_dat_phong"].'" class="btn btn-tbl-edit btn-xs">
                                                            <i class="fa fa-pencil"></i>
                                                        </a>
                                                        <button class="btn btn-tbl-delete btn-xs" onclick="deletebooking('.$row_r["ma_dat_phong"].')">
                                                            <i class="fa fa-trash-o "></i>
                                                        </bttton>
                                                    </td>
                                                </tr>';
                                                $number ++;
                                                }
                                            }
                                        }                                        
                                        ?>
                                            <!--end danh dách phòng --> 
									
										</tbody>
                                    </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end page content -->

        <script type="text/javascript">
            function thanhcong_up(){
                swal("Thành Công","Thông Tin đã đượccập nhật" , "success");
            }
            function  thatbai_up(){
                swal("Lỗi......","Đã có lỗi xảy ra khi cập nhật thông tin. thử lại" , "warning");
            }

            function deletebooking(ma){
                swal({
                    title: "Delete Booking?",
                    text: "Bạn muốn xóa thông tin đặt phòng!",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                    })
                    .then((willDelete) => {
                    if (willDelete) {
                        window.location ="./admin/deletebooking/"+ma;
                    } else {
                        swal("Quyết định của bạn thật tuyệt vời");
                    }
                    });
            }
        
        </script>
            <?php 
                if(isset($data["result_up"])){
                    if($data["result_up"]){
                        echo '<script type="text/javascript"> thanhcong_up(); </script>';
                    }else{
                        echo '<script type="text/javascript"> thatbai_up(); </script>';
                    }
                }


            ?>