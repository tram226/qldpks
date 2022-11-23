
        <!-- breadcrumbs -->
        <div class="wrapBreadCrumb">
            <div class="wrapImgResize wrapImgBreadcrumb">
                <img src="public/assets/images/image_nen.jpg" class="imgBreadcrumbs"  />
            </div>
            <?php $dichvu = $data["chitietdichvu"];?>
            <div class="wrapTextBreadcrumb">
                <div class="container-xl containerTextBreadcrumb">
                    <h1 class="wrapTitleType2 titlePageCurrentBreadcrumb">Hồ Bơi</h1>
                    <?php foreach($dichvu as $row) {?>
                    <nav aria-label="breadcrumb" class="navListBreadcrumb">
                        <ol class="breadcrumb olListBreqadcrumb">
                            <li class="breadcrumb-item itemListBreadcrumb"><a href="./home_index" class="linkListBreadcrumb" title="Trang chủ">Trang chủ</a></li>
                            <li class="breadcrumb-item itemListBreadcrumb"><a href="ds-dich-vu.htm" class="linkListBreadcrumb" title="Dịch vụ">Dịch vụ</a></li>
                            <li class="breadcrumb-item itemListBreadcrumb active" aria-current="page"><?php echo $row["tieu_de"]?></li>
                        </ol>
                    </nav>

                    <?php } ?>
                </div>
            </div>
        </div>
        <!-- end breadcrumbs -->

        <!-- service detail -->
        <div class="wrapPageRoomDetail">
            <div class="container-xl containerPageRoomDetail">
                <div class="contentPageRoomDetail">
                    <div class="row rowInfoRoomDetail">
                        <div class="col-lg-6 colSlideRoomDetail">
                            <div class="contentSlideRoomDetail">
                                <div class="wrapSlideMainRoomDetail">
                                    <div class="showSlideMainRoomDetail">


                                    <!-- slider hinh anh --> 
                                    <?php $hinhanh1 = $data["hinhanh1"];?>
                                    <?php foreach($hinhanh1 as $row3){?>                              
                                        <div class="itemSlideMainRooMDetail">
                                            <div class="wrapImgResize img16And9">
                                                <img src="public/assets/images/<?php echo $row3["image_anh"];?>"
                                                 alt="<?php echo $row3["tieu_de"];?>" />
                                            </div>
                                        </div>
                                        <?php } ?>

                                    </div>
                                </div>
                                 <!--end slider hinh anh --> 
                                <div class="wrapSlideCtrRoomDetail">
                                    <div class="showSlideCtrRoomDetail">
                                    <?php $hinhanh1 = $data["hinhanh1"];?>
                                    <?php foreach($hinhanh1 as $row3){?>                              
                                        <div class="itemSlideCtrRooMDetail">
                                        <div class="wrapImgResize img16And9 wrapImgResizeSlideCtrRooMDetail">
                                                <img src="public/assets/images/<?php echo $row3["image_anh"];?>"
                                                 alt="<?php echo $row3["tieu_de"];?>" />
                                            </div>
                                        </div>
                                        <?php } ?>
                               
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- phan noi dung chi tiet dich vu -->
                       

                        <?php foreach($dichvu as $row) {?>

                        <div class="col-lg-6 colTextRoomDetail">
                            <div class="contentTextRoomDetail">
                                <div class="wrapTitleType1 titleMainRoomDetail"><?php echo $row["tieu_de"]?></div>

                                <div class="wrapDescriptionRoomDetail showTextItemUtilities">
                                    <ul>
                                    <?php $thuoctinh = $data["thuoctinh"];?>
                                        <?php foreach($thuoctinh as $row1) {?>
                                        <li>
                                            <div style="font-family: 'IBMPlexSerif'; font-weight: 500; font-size: 18px; line-height: 28px; color: #333;">
                                            <?php echo $row1["ten_thuoc_tinh"]?></div>
                                            <span style="color: #333;"><?php echo $row1["noi_dung"]?></span>
                                        </li>
                                        <?php }?>
                               
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <?php }?>
                        <!-- end phan noi dung chi tiet dich vu -->
                    </div>
                    
                    <div class="wrapRoomWouldLike">
                        <div class="wrapTitleType2 titleMainRoomWouldLike">Có thể bạn thích</div>

                        <div class="wrapSlideRoomWouldLike">
                            <div class="showSlideRoomWouldLike">

                            <!-- nhan 1 -->
                                <div class="itemSlideRoomWouldLike elementSlideLatestNews">
                                    <a href="dich-vu.htm" title="GYM" class="wrapImgResize imgSquare wrapImgItemLatestNews">
                                        <img src="public/assets/images/service-1.jpg" alt="GYM" class="imgItemLatestNews" />
                                    </a>
        
                                    <div class="wrapInfoItemLatestNews">
                                        <div class="wrapOverInfoItemLatestNews">
                                            <a href="dich-vu.htm" class="wrapTitleType3 linkTitleLatestNews" title="Gym"><h2 class="titleHeadingLatestNews">Gym</h2></a>
        
                                            <h3 class="descriptionLatestNews">Sở hữu một phòng gym trong khuôn viên khách sạn không còn là một lựa chọn, mà dần trở thành một yếu tố cần thiết của cơ sở hạ tầng, dịch vụ khách sạn. Hơn nữa, xu hướng này đang phát triển mạnh mẽ ở nước ngoài. Theo một cuộc khảo sát gần đây về dịch vụ của Hotels.com, hơn 56% người tham gia cho rằng điều quan trọng khi đi du lịch là phải có phòng gym ngay tại khách sạn họ nghỉ ngơi.</h3>
        
                                            <a href="dich-vu.htm" class="btnType1 btnWatchMoreService" title="Xem thêm">Xem thêm</a>
                                        </div>
                                    </div>
                                </div>
                            <!--end nhan 1 -->
        
                                <div class="itemSlideRoomWouldLike elementSlideLatestNews">
                                    <a href="dich-vu.htm" title="Nhà hàng" class="wrapImgResize imgSquare wrapImgItemLatestNews">
                                        <img src="public/assets/images/restaurant-1.jpg" alt="Nhà hàng" class="imgItemLatestNews" />
                                    </a>
        
                                    <div class="wrapInfoItemLatestNews">
                                        <div class="wrapOverInfoItemLatestNews">
                                            <a href="dich-vu.htm" class="wrapTitleType3 linkTitleLatestNews" title="Nhà hàng"><h2 class="titleHeadingLatestNews">Nhà hàng</h2></a>
        
                                            <h3 class="descriptionLatestNews">Nhà hàng Masova Hotel gây ấn tượng mạnh mẽ với view biển trọn vẹn là địa điểm tuyệt vời để bắt đầu ngày mới với bữa sáng thịnh soạn. Chúng tôi phục vụ bữa sáng tự chọn với thực đơn các món Âu – Á được chế biến công phu theo chuẩn mực ẩm thực.</h3>
        
                                            <a href="dich-vu.htm" class="btnType1 btnWatchMoreService" title="Xem thêm">Xem thêm</a>
                                        </div>
                                    </div>
                                </div>
        
                                <div class="itemSlideRoomWouldLike elementSlideLatestNews">
                                    <a href="dich-vu.htm" title="Hồ bơi" class="wrapImgResize imgSquare wrapImgItemLatestNews">
                                        <img src="public/assets/images/pool-1.jpg" alt="Hồ bơi" class="imgItemLatestNews" />
                                    </a>
        
                                    <div class="wrapInfoItemLatestNews">
                                        <div class="wrapOverInfoItemLatestNews">
                                            <a href="#" class="wrapTitleType3  linkTitleLatestNews" title="Hồ bơi"><h2 class="titleHeadingLatestNews">Hồ bơi</h2></a>
        
                                            <h3 class="descriptionLatestNews">Phơi mình dưới ánh nắng ấm áp của vùng biển nhiệt đới và hòa vào làn nước xanh mát tại hồ bơi vô cực của chúng tôi trên tầng 7 của Khách sạn. Còn gì tuyệt vời hơn khi ngâm mình thật lâu và thư giãn tại hồ bơi sau một ngày dài ngắm cảnh đẹp tại Nha Trang. Hồ bơi được thiết kế độc đáo với chất liệu kính trong suốt mang đến trải nghiệm hoàn toàn mới cho quý khách. </h3>
        
                                            <a href="dich-vu.htm" class="btnType1 btnWatchMoreService" title="Xem thêm">Xem thêm</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="itemSlideRoomWouldLike elementSlideLatestNews">
                                    <a href="dich-vu.htm" title="Nhà hàng" class="wrapImgResize imgSquare wrapImgItemLatestNews">
                                        <img src="public/assets/images/restaurant-1.jpg" alt="Nhà hàng" class="imgItemLatestNews" />
                                    </a>
        
                                    <div class="wrapInfoItemLatestNews">
                                        <div class="wrapOverInfoItemLatestNews">
                                            <a href="dich-vu.htm" class="wrapTitleType3 linkTitleLatestNews" title="Nhà hàng"><h2 class="titleHeadingLatestNews">Nhà hàng</h2></a>
        
                                            <h3 class="descriptionLatestNews">Nhà hàng Masova Hotel gây ấn tượng mạnh mẽ với view biển trọn vẹn là địa điểm tuyệt vời để bắt đầu ngày mới với bữa sáng thịnh soạn. Chúng tôi phục vụ bữa sáng tự chọn với thực đơn các món Âu – Á được chế biến công phu theo chuẩn mực ẩm thực.</h3>
        
                                            <a href="dich-vu.htm" class="btnType1 btnWatchMoreService" title="Xem thêm">Xem thêm</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end service detail -->
        <script src="public/assets/js/service-detail.js"></script>