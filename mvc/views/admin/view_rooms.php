<!-- start page content -->
<div class="page-content-wrapper">
                <div class="page-content">
                    <div class="page-bar">   
                    </div>
                     <div class="row">
                        <div class="col-md-12">
                            <div class="card card-box">
                                <div class="card-head"  style="background-color: #ADD8E6;border-radius: 5px; padding: 2px;">
                                    <header>Danh Sách Các Phòng</header>
                                    <div class="tools">
                                        <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
	                                    <a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
	                                    <a class="t-close btn-color fa fa-times" href="javascript:;"></a>
                                    </div>
                                </div>
                                <div class="card-body ">
                                    <div class="row p-b-20">
                                        <div class="col-md-6 col-sm-6 col-6">
                                            <div class="btn-group">
                                                <a href="./admin/add_room" id="addRow" class="btn btn-info">
                                                    Phòng mới<i class="fa fa-plus"></i>
                                                </a>
                                            </div>
                                        </div>
                                      
                                    </div>
                                    <div class="table-scrollable">
                                    <table class="table table-hover table-checkable order-column full-width" id="example4">
                                        <thead>
                                            <tr>
                                            	<th class="center"> STT </th>
                                                <th class="center"> Mã phòng</th>
                                                <th class="center"> Tên Phòng </th>
                                                <th class="center"> Mô Tả</th>
                                                <th class="center"> Giá Phòng </th>
                                                <th class="center"> Mã thuộc Tính </th>
                                                <th class="center"> Mã Hình Ảnh </th>                                    
                                                <th class="center"> Action </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <!-- danh dách phòng --> 
                                        <?php  if(isset($data["allroom"])){
                                            $list_room  = json_decode($data["allroom"],true);
                                            $number = 1;
                                            if(!empty($list_room)){
                                                foreach($list_room  as $row_r){
                                                   
                                                    echo '<tr class="odd gradeX">
                                                    <td class="center">'.$number.'</td>
                                                    <td class="center">'.$row_r["ma_phong"].'</td>
                                                    <td class="center">'.$row_r["ten_phong"].'</td>
                                                    <td class="center">'.$row_r["noi_dung"].'</td>
                                                    <td class="center">'.$row_r["gia_phong"].'</td>
                                                    <td class="center">'.$row_r["ma_thuoc_tinh"].'</td>
                                                    <td class="center">'.$row_r["ma_hinh_anh"].'</td>
                                                    
                                                    <td class="center">
                                                        <a href="./admin/updateRooms/'.$row_r["ma_phong"].'" class="btn btn-tbl-edit btn-xs">
                                                            <i class="fa fa-pencil"></i>
                                                        </a>
                                                        <button class="btn btn-tbl-delete btn-xs" onclick="deleteRoom('.$row_r["id_phong"].')">
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
                swal("Thành Công","Phòng của bạn đã được cập nhật" , "success");
            }
            function  thatbai_up(){
                swal("Lỗi......","Đã có lỗi xảy ra khi cập nhật phòng của bạn" , "warning");
            }

            function deleteRoom(ma){
                swal({
                    title: "Delete Room?",
                    text: "Bạn chắc chắn muốn xóa phòng này!",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                    })
                    .then((willDelete) => {
                    if (willDelete) {
                        window.location ="./admin/deleteRoom/"+ma;
                    } else {
                        swal("Quyết định của bạn thật tuyệt vời");
                    }
                    });
            }
        
        </script>
            <?php 
                if(isset($data["result_up_r"])){
                    if($data["result_up_r"]){
                        echo '<script type="text/javascript"> thanhcong_up(); </script>';
                    }else{
                        echo '<script type="text/javascript"> thatbai_up(); </script>';
                    }
                }


            ?>