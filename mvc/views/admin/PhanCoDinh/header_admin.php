<!-- start header -->
<div class="page-header navbar navbar-fixed-top">
            <div class="page-header-inner ">
                <!-- logo start -->
                <div class="page-logo">
                    <a href="./admin">
                    <!--<img alt="" src="public/admin/assets/img/logo.png"> -->
                    <span class="logo-default" style="font-size: 19px;" >Quản Lý Khách Sạn</span> </a>
                </div>
                <!-- logo end -->
                
				<ul class="nav navbar-nav navbar-left in">
					<li><a href="#" class="menu-toggler sidebar-toggler"><i class="icon-menu"></i></a></li>
				</ul>
                <!-- 
                 <form class="search-form-opened" action="#" method="GET">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search..." name="query">
                        <span class="input-group-btn search-btn">
                          <a href="javascript:;" class="btn submit">
                             <i class="icon-magnifier"></i>
                           </a>
                        </span>
                    </div>
                </form> -->
                
                <!-- start mobile menu -->
                <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
                    <span></span>
                </a>
               <!-- end mobile menu -->
                <!-- start header menu -->
                <div class="top-menu">
                    <ul class="nav navbar-nav pull-right">
                        <!-- start notification dropdown -->
                        <?php if(isset($data["number_booking"])){
                            $number_booking = json_decode($data["number_booking"],true);
                           
                                foreach($number_booking as $row_booking){ ?>

                            
                        <li class="dropdown dropdown-extended dropdown-notification" id="header_notification_bar">
                            <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                <i class="fa fa-bell-o"></i>
                                <span class="badge headerBadgeColor1"> <?php echo $row_booking["soluong"];?> </span>
                            </a>
                            
                            <ul class="dropdown-menu animated swing">
                                <li class="external">
                                    <h3><span class="bold">Notifications</span></h3>
                                    <span class="notification-label purple-bgcolor">New  <?php echo $row_booking["soluong"];?></span>
                                </li>
                                <?php  }                   
                                }?>
                                <!-- chi tiet number booing --> 
                                <li>
                                    <ul class="dropdown-menu-list small-slimscroll-style" data-handle-color="#637283">
                                        <?php  if(isset($data["chitietnumberbooking"])){
                                            $chitiet_info = json_decode($data["chitietnumberbooking"],true);
                                                if(!empty($chitiet_info)){
                                                    foreach($chitiet_info as $row_ct_info){
                                                        $string_time  = trim($row_ct_info["ma_dat_phong"]);
                                                       
                                                        $time_oder = substr($string_time,0,2)."/".substr($string_time,2,2)."   ".substr($string_time,6,2)."-".substr($string_time,8,2);
                                                        echo '<li>
                                                        <a href="javascript:;">
                                                            <span class="time">'.$time_oder.'</span>
                                                            <span class="details">
                                                            <span class="notification-icon circle purple-bgcolor"><i class="fa fa-user o"></i></span>
                                                            <b>'.$row_ct_info["ho_ten"].'</b> Vừa đặt phòng. </span>
                                                        </a>
                                                    </li>';

                                                    }
                                                }else{
                                                   echo '<li>
                                                   <a href="javascript:;">
                                                       <span class="time"></span>
                                                       <span class="details">
                                                       <span class="notification-icon circle purple-bgcolor"><i class="fa fa-user o"></i></span>
                                                       <b>Hiện tại </b>thông báo nào. </span>
                                                   </a>
                                               </li>' ;
                                                }
                                            }                                       
                                                                                
                                        ?>
                                    
                          
                                    </ul>
                                    <div class="dropdown-menu-footer">
                                        <a href="javascript:void(0)">Tất cả các thông báo  </a>
                                    </div>
                                </li>
                            </ul>
                        </li>

                         
                        <!-- end notification dropdown -->
                        <!-- start message dropdown -->
                        <?php if(isset($data["number_lienhe"])){
                            $number_lienhe = json_decode($data["number_lienhe"],true);
                            foreach($number_lienhe as $row_lh ){ ?>

                          
 						<li class="dropdown dropdown-extended dropdown-inbox" id="header_inbox_bar">
                            <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                <i class="fa fa-envelope-o"></i>
                                <span class="badge headerBadgeColor2"> <?php echo$row_lh["soluong"] ?> </span>
                            </a>
                            <ul class="dropdown-menu animated slideInDown">
                                <li class="external">
                                    <h3><span class="bold">Messages</span></h3>
                                    <span class="notification-label cyan-bgcolor">New <?php echo$row_lh["soluong"] ?></span>
                                </li> 
                                <?php }
                                }?>
                                <li>
                                <ul class="dropdown-menu-list small-slimscroll-style" data-handle-color="#637283">
                                    <?php if(isset($data["alllienhe"])){
                                        $all_lien_he =json_decode($data["alllienhe"] ,true);
                                        if(!empty($all_lien_he)){
                                            foreach($all_lien_he as $row_all_lh){
                                                $string_time = $row_all_lh["id_lien_he"];
                                                $time_lh = substr($string_time,0,2).":".substr($string_time,2,2);
                                                $ngay_lh = $row_all_lh["ngay"];
                                                if($row_all_lh["trang_thai"] == 0){
                                                    echo ' <li style="background-color: #B0C4DE">
                                                    <a href="./admin/getAll_lien_he/'.$row_all_lh['id_lien_he'].'">
                                                        <span class="photo">
                                                            <img src="public/admin/assets/img/user/user2.jpg" class="img-circle" alt=""> </span>
                                                        <span class="subject">
                                                            <span class="from"> '.$row_all_lh["ho_ten"].'  </span>
                                                            <span class="time">'.$time_lh."   ".$ngay_lh.' </span>
                                                        </span>
                                                        <span class="message"> Đã gửi cho bạn bạn một tin nhắn </span>
                                                    </a>
                                                </li>';
                                                }else{
                                                    echo ' <li >
                                                    <a href="./admin/getAll_lien_he/'.$row_all_lh['id_lien_he'].'">
                                                        <span class="photo">
                                                            <img src="public/admin/assets/img/user/user2.jpg" class="img-circle" alt=""> </span>
                                                        <span class="subject">
                                                            <span class="from"> '.$row_all_lh["ho_ten"].'  </span>
                                                            <span class="time">'.$time_lh."   ".$ngay_lh.' </span>
                                                        </span>
                                                        <span class="message"> Đã gửi cho bạn bạn một tin nhắn </span>
                                                    </a>
                                                </li>';
                                                }

                                            }
                                        }
                                    }
                                     ?>                                                                     
                                    </ul>
                                    <div class="dropdown-menu-footer">
                                        <a href="#"> Xem tất cả tin nhắn </a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <!-- end message dropdown -->
 						<!-- start manage user dropdown -->
 						<!--<li class="dropdown dropdown-user">
                            <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                <img alt="" class="img-circle " src="public/admin/assets/img/dp.jpg" />
                                <span class="username username-hide-on-mobile"> John </span>
                                <i class="fa fa-angle-down"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-default animated jello">
                                <li>
                                    <a href="user_profile.html">
                                        <i class="icon-user"></i> Profile </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="icon-settings"></i> Settings
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="icon-directions"></i> Help
                                    </a>
                                </li>
                                <li class="divider"> </li>
                                <li>
                                    <a href="lock_screen.html">
                                        <i class="icon-lock"></i> Lock
                                    </a>
                                </li>
                                <li>
                                    <a href="login.html">
                                        <i class="icon-logout"></i> Log Out </a>
                                </li>
                            </ul>
                        </li>  -->
                        <!-- end manage user dropdown 
                        <li class="dropdown dropdown-quick-sidebar-toggler">
                             <a id="headerSettingButton" class="mdl-button mdl-js-button mdl-button--icon pull-right" data-upgraded=",MaterialButton">
	                           <i class="material-icons">settings</i>
	                        </a>
                        </li> -->
                    </ul>
                </div>
            </div>
        </div>
        <!-- end header -->