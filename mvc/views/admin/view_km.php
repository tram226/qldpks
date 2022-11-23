<!-- start page content -->
<div class="page-content-wrapper">
                <div class="page-content">
                    <div class="page-bar">   
                    </div>
                     <div class="row">
                        <div class="col-md-12">
                            <div class="card card-box">
                                <div class="card-head"  style="background-color: #ADD8E6;border-radius: 5px; padding: 2px;">
                                    <header>Tất cả khuyến mãi</header>
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
                                                <a href="./admin/add_khuyenmai" id="addRow" class="btn btn-info" style="border-radius: 20px;">
                                                    Khuyến mại mới<i class="fa fa-plus"></i>
                                                </a>
                                            </div>
                                        </div>
                                      
                                    </div>
                                    <div class="table-scrollable">
                                    <table class="table table-hover table-checkable order-column full-width" id="example4">
                                        <thead>
                                            <tr>
                                            	<th class="center"> STT </th>
                                                <th class="center"> Mã KM</th>
                                                <th class="center"> Tên Khuyến Mại </th>
                                                <th class="center"> Nội Dung</th>
                                                
                                                <th class="center"> Mã thuộc Tính </th>
                                                <th class="center"> Mã Hình Ảnh </th>                                    
                                                <th class="center"> Action </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <!-- danh dách phòng --> 
                                        <?php  if(isset($data["allkhuyenmai"])){
                                            $list_room  = json_decode($data["allkhuyenmai"],true);
                                            $number = 1;
                                            if(!empty($list_room)){
                                                foreach($list_room  as $row_r){
                                                   
                                                    echo '<tr class="odd gradeX">
                                                    <td class="center">'.$number.'</td>
                                                    <td class="center">'.$row_r["ma_km"].'</td>
                                                    <td class="center">'.$row_r["tieu_de"].'</td>
                                                    <td class="center">'.$row_r["noi_dung"].'</td>
                                                    <td class="center">'.$row_r["ma_thuoc_tinh"].'</td>
                                                    <td class="center">'.$row_r["ma_hinh_anh"].'</td>
                                                    
                                                    
                                                    <td class="center">
                                                        <a href="./admin/update_km/'.$row_r["id_khuyen_mai"].'" class="btn btn-tbl-edit btn-xs">
                                                            <i class="fa fa-pencil"></i>
                                                        </a>
                                                        <button class="btn btn-tbl-delete btn-xs" onclick="deleteRoom('.$row_r["id_khuyen_mai"].')">
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
                swal("Thành Công","Khuyến mãi của bạn đã được cập nhật" , "success");
            }
            function  thatbai_up(){
                swal("Lỗi......","Đã có lỗi xảy ra khi cập nhật khuyến mãi của bạn" , "warning");
            }

            function deleteRoom(ma){
                swal({
                    title: "Delete?",
                    text: "Bạn chắc chắn muốn xóa khuyến mãi này!",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                    })
                    .then((willDelete) => {
                    if (willDelete) {
                        window.location ="./admin/delete_khuyenMai/"+ma;
                    } else {
                        swal("Quyết định của bạn thật tuyệt vời");
                    }
                    });
            }
        
        </script>
            <?php 
                if(isset($data["result_up_km"])){
                    if($data["result_up_km"]){
                        echo '<script type="text/javascript"> thanhcong_up(); </script>';
                    }else{
                        echo '<script type="text/javascript"> thatbai_up(); </script>';
                    }
                }


            ?>