
			<!-- start page content -->
            <div class="page-content-wrapper">
                <div class="page-content">
                    <div class="page-bar">
                     
                    </div>
                     <div class="row">
                        <div class="col-md-12">
                            <div class="card card-box">
                                <div class="card-head">
                                    <header>Tất Cả Thuộc Tính</header>
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
                                                <a href="./admin/add_thuoctinh" id="addRow" class="btn btn-info">
                                                    Thuộc Tính Mới <i class="fa fa-plus"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-6">
                                            <div class="btn-group pull-right">
                                    
                                            </div>
                                        </div>
                                    </div>
                                    <div class="table-scrollable">
                                    <table class="table table-hover table-checkable order-column full-width" id="example4">
                                        <thead>
                                            <tr>
                                            	<th class="center"> STT </th>
                                                <th class="center"> Mã Thuộc Tính </th>
                                                <th class="center"> Tên Thuộc Tính </th>
                                                <th class="center"> Nội Dung </th>                        
                                                <th class="center"> Action </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <!-- --> 
                                        <?php if(isset($data["allthuoctinh"])){$all = json_decode($data["allthuoctinh"], true) 
                                            ; $numnber = 1;}else{ $all = [];} ?>
                                        <?php foreach( $all as $row ) { ?>


											<tr class="odd gradeX">												
												<td class="center"><?php echo $numnber ;  ?></td>
												<td class="center"><?php echo $row["ma_thuoc_tinh"] ;  ?></td>
												<td class="center"><?php echo $row["ten_thuoc_tinh"] ;  ?></td>
												<td class="center"><?php echo $row["noi_dung"] ;  ?></td>											
												<td class="center">
													<a href="./admin/updatethuoctinh/<?php echo $row["id_thuoc_tinh"] ;?>"
                                                    style="border-radius: 20px;"
                                                    class="btn btn-tbl-edit btn-xs">
                                                    <i class="fa fa-pencil"></i>
													</a>
													<a class="btn btn-tbl-delete btn-xs"
                                                    style="border-radius: 20px;"
                                                     onclick="xoa_thuoctinh(<?php echo $row['id_thuoc_tinh'] ; ?>)">
														<i class="fa fa-trash-o "></i>
													</a>
												</td>
											</tr>
                                            <?php $numnber ++ ;} ?>
                                        <!-- --> 
											
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
           

           <!-- phan php và javascript -->
           <script type="text/javascript">
           
           function xoa_thuoctinh(id){
                swal({
                title: "Bạn Chắc chắn muốn xóa thuộc tính này",
                text: "Hãy cân nhắc trước khi xóa .Điều này có thể làm ảnh hưởng đến các mục của bạn",
                icon: "warning",
                buttons: true,
                dangerMode: true,
                })
                .then((willDelete) => {
                if (willDelete) {
                    window.location="./admin/deleteThuocTinh/"+id;
                    // swal("Đã Xóa Thành Công ", {
                    //   icon: "success",
                    // });
                } else {
                    swal("Quyết định của bạn thật tuyệt vời");
                }
                })
            }

            function thanhcong(){
                swal("Thành Công !", "Thuộc tính của bạn đã được xóa!", "success");
            }

            function thatbai(){
                swal("Lỗi.....!", "Gặp sự cố khi xóa. Việc xóa không được thực hiện, vui lòng thử lại!");
            }

            function thanhcong_up(){
                swal("Thành Công !", "Thuộc tính của bạn đã được cập nhật!", "success");
            }

            function thatbai_up(){
                swal("Lỗi.....!", "Gặp sự cố khi cập nhật thông tin, vui lòng thử lại!");
            }
           </script>

           <?php 
           if(isset($data["result"])){
                if($data["result"]){
                    echo '<script type="text/javascript"> thanhcong(); </script>';
                }else{
                    echo '<script type="text/javascript"> thatbai(); </script>';
                } 
           } 
           
           if(isset($data["result_up"])){
            if($data["result_up"]){
                echo '<script type="text/javascript"> thanhcong_up(); </script>';
            }else{
                echo '<script type="text/javascript"> thatbai_up(); </script>';
            } 
       } 
           
           ?>