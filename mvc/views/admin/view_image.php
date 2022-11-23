<!-- start page content -->
<div class="page-content-wrapper">
                <div class="page-content">
                    <div class="page-bar">   
                    </div>
                     <div class="row">
                        <div class="col-md-12">
                            <div class="card card-box">
                                <div class="card-head"  style="background-color: #ADD8E6;border-radius: 5px; padding: 2px;">
                                    <header>Tất cả hình ảnh</header>
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
                                                <a href="./admin/add_image" id="addRow" class="btn btn-info">
                                                    New Image<i class="fa fa-plus"></i>
                                                </a>
                                            </div>
                                        </div>
                                      
                                    </div>
                                    <div class="table-scrollable">
                                    <table class="table table-hover table-checkable order-column full-width" id="example4">
                                        <thead>
                                            <tr>
                                            	<th class="center"> STT </th>
                                                <th class="center"> Mã hình ảnh</th>
                                                <th class="center"> Tiêu đề </th>
                                               
                                                <th class="center" > image </th>
                                                <th class="center"> image 2</th>
                                                <th class="center"> Action </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <!-- danh dách phòng --> 
                                        <?php  if(isset($data["allImage"])){
                                            $list_image  = json_decode($data["allImage"],true);
                                            $number = 1;
                                            if(!empty($list_image)){
                                                foreach($list_image  as $row_r){
                                                   
                                                    echo '<tr class="odd gradeX">
                                                    <td class="center">'.$number.'</td>
                                                    <td class="center">'.$row_r["ma_hinh_anh"].'</td>
                                                    <td class="center">'.$row_r["tieu_de"].'</td>
                                                    <td  class="user-circle-img">
                                                        <img src="public/assets/images/'.$row_r["image_anh"].'" 
                                                        style="width:100px;height:100px;" alt="">
                                                    </td>
                                                    <td class="center">'.$row_r["image_anh"].'</td>
                                                   
                                                    
                                                    <td class="center">
                                                       
                                                        <button class="btn btn-tbl-delete btn-xs" 
                                                        onclick="deleteRoom('.$row_r["id_hinh_anh"].')">
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

            function thanhcong_de(){
                swal("Thành Công","Đã xóa hình ảnh của bạn" , "success");
            }
            function thatbai_de(){
                swal("Lỗi........","Xóa hình ảnh thất bại" , "warning");
            }
            function deleteRoom(ma){
                swal({
                    title: "Delete Image?",
                    text: "Hình ảnh này có thể đang được sử dụng bởi tác vụ khác hãy chắc chắc trước khi xóa!",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                    })
                    .then((willDelete) => {
                    if (willDelete) {
                        window.location ="./admin/deleteimage/"+ma;
                    } else {
                        swal("Quyết định của bạn thật tuyệt vời");
                    }
                    });
            }
        
        </script>
            <?php 
                if(isset($data["result_de_im"])){
                    if($data["result_de_im"]){
                        echo '<script type="text/javascript"> thanhcong_de(); </script>';
                    }else{
                        echo '<script type="text/javascript"> thatbai_de(); </script>';
                    }
                }


            ?>