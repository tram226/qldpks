<div class="sidebar-container">
 				<div class="sidemenu-container navbar-collapse collapse fixed-menu">
	                <div id="remove-scroll">
	                    <ul class="sidemenu page-header-fixed p-t-20" data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
	                        <li class="sidebar-toggler-wrapper hide">
	                            <div class="sidebar-toggler">
	                                <span></span>
	                            </div>
	                        </li>
	                        <li class="sidebar-user-panel">
	                            <div class="user-panel">
	                                <div class="row">
                                            <div class="sidebar-userpic">
                                                <img src="public/admin/assets/img/admin.png" class="img-responsive" alt=""> </div>
                                        </div>
                                        <div class="profile-usertitle">
											<?php $user = $data["user_info"]; ?>
											
                                            <div class="sidebar-userpic-name"><?php echo $user; ?> </div>
											<div class="profile-usertitle-job"> administrator </div>
											
                                        </div>
                                        <div class="sidebar-userpic-btn">
									       
									        <a class="tooltips" href="./admin/logout"  id="logout" data-placement="top" data-original-title="Logout">
									        	<i class="material-icons">input</i>
									        </a>
									    </div>
	                            </div>
	                        </li>
	                        <!-- <li class="menu-heading">
			                	<span>-- Main</span>
			                </li> -->
	                        <li class="nav-item start active">
	                            <a href="./admin" class="nav-link nav-toggle">
	                                <i class="material-icons">dashboard</i>
	                                <span class="title">Trang Chủ</span>
                                	<span class="selected"></span>
                                	
	                            </a>
	                        
	                        </li>
	                        <li class="nav-item">
	                            <a href="./admin/getAll_lien_he/all" class="nav-link nav-toggle">
	                                <i class="material-icons">email</i>
	                                <span class="title">Tin nhắn</span>
	                             
	                            </a>
	                            
	                        </li>
							
							<li class="nav-item">
	                            <a href="./admin/datphong" class="nav-link nav-toggle">
								<i class="material-icons">business_center</i>
	                                <span class="title">Đặt phòng</span>
	                             
	                            </a>
	                            
	                        </li>
	                        
							<!-- phong -->
	                        <li class="nav-item">
	                            <a href="#" class="nav-link nav-toggle">
	                                <i class="material-icons">vpn_key</i>
	                                <span class="title">Phòng</span>
	                                <span class="arrow"></span>
	                            </a>
	                            <ul class="sub-menu">
	                                <li class="nav-item">
	                                    <a href="./admin/add_room" class="nav-link ">
	                                        <span class="title">Thêm Phòng Mới</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item">
	                                    <a href="./admin/allroom" class="nav-link ">
	                                        <span class="title">Xem Danh Sách Phòng</span>
	                                    </a>
	                                </li>
	                            
	                            </ul>
	                        </li>
							<!--end phong -->

							<!--start khuyen mai -->
							<li class="nav-item">
	                            <a href="#" class="nav-link nav-toggle">
	                                <i class="material-icons">shopping_basket</i>
	                                <span class="title">Khuyến Mãi</span>
	                                <span class="arrow"></span>
	                            </a>
	                            <ul class="sub-menu">
	                                <li class="nav-item">
	                                    <a href="./admin/add_khuyenmai" class="nav-link ">
	                                        <span class="title">Khuyến Mãi Mới</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item">
	                                    <a href="./admin/allkm" class="nav-link ">
	                                        <span class="title">Xem Danh Sách</span>
	                                    </a>
	                                </li>
	                                
	                            </ul>
	                        </li>
							<!--end khuyen mai -->

							<!--start thuoc tinh -->
							<li class="nav-item">
	                            <a href="#" class="nav-link nav-toggle">
	                                <i class="material-icons">view_list</i>
	                                <span class="title">Thuộc Tính</span>
	                                <span class="arrow"></span>
	                            </a>
	                            <ul class="sub-menu">
	                                <li class="nav-item">
	                                    <a href="./admin/add_thuoctinh" class="nav-link ">
	                                        <span class="title">Thuộc Tính Mới</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item">
	                                    <a href="./admin/viewThuocTinh" class="nav-link ">
	                                        <span class="title">Xem Danh Sách</span>
	                                    </a>
	                                </li>
	                                
	                            </ul>
	                        </li>
							<!--end thuoc tinh -->


							<!-- hình ảnh-->
	                        <li class="nav-item">
	                            <a href="#" class="nav-link nav-toggle">
	                                <i class="material-icons">insert_photo</i>
	                                <span class="title">Hình Ảnh</span>
	                                <span class="arrow"></span>
	                            </a>
	                            <ul class="sub-menu">
	                                <li class="nav-item">
	                                    <a href="./admin/add_image" class="nav-link ">
	                                        <span class="title">Thêm Ảnh Mới</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item">
	                                    <a href="./admin/allimage" class="nav-link ">
	                                        <span class="title">Xem Danh Sách</span>
	                                    </a>
	                                </li>
	                                
	                            </ul>
	                        </li>
	                        <li class="nav-item">
	                            <a href="#" class="nav-link nav-toggle">
	                                <i class="material-icons">settings_applications</i>
	                                <span class="title">Dịch Vụ</span>
	                                <span class="arrow"></span>
	                            </a>
	                            <ul class="sub-menu">
	                                <li class="nav-item">
	                                    <a href="./admin/add_dichvu" class="nav-link ">
	                                        <span class="title">Thêm Dịch Vụ</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item">
	                                    <a href="./admin/alldichvu" class="nav-link ">
	                                        <span class="title">Xem Danh Sách</span>
	                                    </a>
	                                </li>
	                                
	                            </ul>
	                        </li>
	                       
							
	                      </ul>
	                </div>
                </div>
            </div>






