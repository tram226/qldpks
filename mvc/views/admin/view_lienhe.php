
			<!-- start page content -->
            <div class="page-content-wrapper">
                <div class="page-content">
                    <div class="page-bar">
                      
                    </div>
                     <div class="row">
                        <div class="col-md-12">
                            <div class="card card-box">
                                <div class="card-head">
                                    <header>Tất Cả các tin nhắn</header>
                                    <div class="tools">
                                        <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
	                                    <a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
	                                    <a class="t-close btn-color fa fa-times" href="javascript:;"></a>
                                    </div>
                                </div>
                                <div class="card-body ">
                                    <div class="row p-b-20">
                                       
                                        <div class="col-md-6 col-sm-6 col-6">
                                            <div class="btn-group pull-right">
                                    
                                            </div>
                                        </div>
                                    </div>
                                    <div class="table-scrollable">
                                    <table class="table table-hover table-checkable order-column full-width" id="example4">
                                        <thead>
                                            <tr>
                                            	<th class="center" > STT </th>
                                                <th class="center"> Họ Tên  </th>
                                                <th class="center"> Số Điện Thoại </th>
                                                <th class="center"> Email </th>       
                                                <th class="center"> Ngày Gửi </th>                    
                                                <th class="center"> Action </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <!-- --> 
                                        <?php if(isset($data["alllienhe"])){$all = json_decode($data["alllienhe"], true) 
                                            ; $numnber = 1;
                                                if(!empty($all)){
                                                    foreach( $all as $row ) {
                                                        if($row["trang_thai"] == 0 ){
                                                            echo '<tr class="odd gradeX" style="background-color: #B0C4DE;">												
                                                            <td class="center">'. $numnber .'</td>
                                                            <td class="center">'.$row["ho_ten"] .'</td>
                                                            <td class="center">'. $row["sdt"] .'</td>
                                                            <td class="center">'. $row["email"] .'</td>
                                                            <td class="center">'. $row["ngay"].'</td>										
                                                            <td class="center">
                                                                
                                                            <a href="./admin/getAll_lien_he/'.$row['id_lien_he'].'"
                                                            class="btn btn-tbl-edit btn-xs">
                                                            <i class="fa fa-eye"></i>
                                                            </a>
                                                            <a class="btn btn-tbl-delete btn-xs" onclick="xoa_thuoctinh('.$row['id_lien_he'].'">
                                                                <i class="fa fa-trash-o "></i>
                                                            </a>
                                                            </td>
                                                        </tr>' ;
                                                        }else {
                                                            echo '<tr class="odd gradeX">												
                                                            <td class="center">'. $numnber .'</td>
                                                            <td class="center">'.$row["ho_ten"] .'</td>
                                                            <td class="center">'. $row["sdt"] .'</td>
                                                            <td class="center">'. $row["email"] .'</td>
                                                            <td class="center">'. $row["ngay"].'</td>										
                                                            <td class="center">
                                                                
                                                            <a href="./admin/getAll_lien_he/'.$row['id_lien_he'].'"
                                                            class="btn btn-tbl-edit btn-xs">
                                                            <i class="fa fa-eye"></i>
                                                            </a>
                                                            <a class="btn btn-tbl-delete btn-xs" onclick="xoa_thuoctinh('.$row['id_lien_he'].')">
                                                                <i class="fa fa-trash-o "></i>
                                                            </a>
                                                            </td>
                                                        </tr>' ;
                                                        }
                                                        $numnber ++ ;
                                                    }
                                                }
                                             }
                                               
                                          ?>


											
                                            
                                        <!-- --> 
											
										</tbody >
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
                title: "Bạn Chắc chắn muốn xóa tin nhắn này chứ ?",
                text: "hãy đảm bảo rằng bạn đã đọc tin nhắn này và lưu trữ trước khi xóa",
                icon: "warning",
                buttons: true,
                dangerMode: true,
                })
                .then((willDelete) => {
                if (willDelete) {
                    var gg = id+"";
                    if(gg.length<= 5){
                        gg = "0"+gg;
                    }
                    window.location="./admin/delete_lienhe/"+gg;
                    // swal("Đã Xóa Thành Công ", {
                    //   icon: "success",
                    // });
                } else {
                    swal("Quyết định của bạn thật tuyệt vời");
                }
                })
            }

            

            function thanhcong_lh(){
                swal("Thành Công !", "Đã xóa tin nhắn!", "success");
            }

            function thatbai_lh(){
                swal("Lỗi.....!", "Chúng tôi không thể xóa tin nhắn lúc này hãy kiểm tra quyền của bạn và thử lại!");
            }
           </script>

           <?php 
           
           
           if(isset($data["result_de_lh"])){
            if($data["result_de_lh"]){
                echo '<script type="text/javascript"> thanhcong_lh(); </script>';
            }else{
                echo '<script type="text/javascript"> thatbai_lh(); </script>';
            } 
         } 
         ?>
           
           