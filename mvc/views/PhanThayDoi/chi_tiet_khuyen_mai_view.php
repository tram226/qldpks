<!-- breadcrumbs -->
<div class="wrapBreadCrumb">
            <div class="wrapImgResize wrapImgBreadcrumb">
                <img src="public/assets/images/image_nen.jpg" class="imgBreadcrumbs" alt="Combo hè mát lạnh 300,000 VNĐ" />
            </div>
            <?php $ct  = json_decode($data["chitietkhuyenmai"],true);
                                foreach($ct as $row) {?>
            <div class="wrapTextBreadcrumb">
                <div class="container-xl containerTextBreadcrumb">
                    <h1 class="wrapTitleType2 titlePageCurrentBreadcrumb"><?php echo $row["tieu_de"]; ?></h1>

                    <nav aria-label="breadcrumb" class="navListBreadcrumb">
                        <ol class="breadcrumb olListBreqadcrumb">
                            <li class="breadcrumb-item itemListBreadcrumb"><a href="./home_index" class="linkListBreadcrumb" title="Trang chủ">Trang chủ</a></li>
                            <li class="breadcrumb-item itemListBreadcrumb"><a href="./khuyenmai" class="linkListBreadcrumb" title="Khuyến mãi">Khuyến mãi</a></li>
                            <li class="breadcrumb-item itemListBreadcrumb active" aria-current="page"><?php echo $row["tieu_de"]; ?></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- end breadcrumbs -->

        <!-- service detail -->
        <div class="wrapPageRoomDetail">
            <div class="container-xl containerPageRoomDetail">
                <div class="contentPageRoomDetail">

                <!-- chi tiết một khuyến mãi --> 
                    <div class="row rowInfoRoomDetail">
                        <div class="col-lg-6 colSlideRoomDetail">
                            <div class="contentSlideRoomDetail">
                            <?php $hinh_anh  = json_decode($data["hinhanh"],true);
                                foreach($hinh_anh as $row2) {
                                    echo '<img src="public/assets/images/'.$row2["image_anh"].'"
                                     class="avatarPromotionDetail" />';
                                }
                            ?>
                                
                            </div>
                        </div>

                        <div class="col-lg-6 colTextRoomDetail">
                            <div class="contentTextRoomDetail">
                                <div class="wrapTitleType1 titleMainRoomDetail"><?php echo $row["tieu_de"]; ?></div>

                                <div class="wrapDescriptionRoomDetail showTextItemUtilities">
                                    <ul>
                                    <?php $thuoc_tinh  = json_decode($data["thuoctinh"],true);
                                        foreach($thuoc_tinh as $row1) {?>

                                        <li>
                                            <div style="font-family: 'IBMPlexSerif'; font-weight: 500; font-size: 18px; line-height: 28px; color: #333;">
                                            <?php echo $row1["noi_dung"]; ?></div>
                                        </li>
                                        <?php } ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                <!--end  chi tiết một khuyến mãi --> 
                    <div class="wrapRoomWouldLike">
                        <div class="wrapTitleType2 titleMainRoomWouldLike">Có thể bạn thích</div>

                        <div class="wrapSlideRoomWouldLike">
                            <div class="showSlideRoomWouldLike">
                                <div class="itemSlideRoomWouldLike elementSlideLatestNews">
                                    <a href="khuyen-mai.htm" title="Chương trình khuyến mãi ngày nhà giáo việt nam 20-11" class="wrapImgResize imgSquare wrapImgItemLatestNews">
                                        <img src="public/assets/images/promotion-2.jpg" alt="Chương trình khuyến mãi ngày nhà giáo việt nam 20-11" class="imgItemLatestNews" />
                                    </a>
        
                                    <div class="wrapInfoItemLatestNews">
                                        <div class="wrapOverInfoItemLatestNews">
                                            <a href="khuyen-mai.htm" class="wrapTitleType3 linkTitleLatestNews" title="Chương trình khuyến mãi ngày nhà giáo việt nam 20-11"><h2 class="titleHeadingLatestNews">Chương trình khuyến mãi ngày nhà giáo việt nam 20-11</h2></a>
        
                                            <h3 class="descriptionLatestNews">Chào đón mùa hè tuyệt vời dưới ánh nắng vàng bên làn nước xanh mát và tận hưởng Ưu đãi giờ vàng từ 16h đến 19h tại hồ bơi vô cực cùng với chúng tôi các bạn nhé</h3>
        
                                            <a href="khuyen-mai.htm" class="btnType1 btnWatchMoreService" title="Xem thêm">Xem thêm</a>
                                        </div>
                                    </div>
                                </div>
        
                                <div class="itemSlideRoomWouldLike elementSlideLatestNews">
                                    <a href="khuyen-mai.htm" title="ƯU ĐÃI SIÊU ĐẶC BIỆT KHI ĐẶT PHÒNG LÊN ĐẾN 50%" class="wrapImgResize imgSquare wrapImgItemLatestNews">
                                        <img src="public/assets/images/room-1.jpg" alt="ƯU ĐÃI SIÊU ĐẶC BIỆT KHI ĐẶT PHÒNG LÊN ĐẾN 50%" class="imgItemLatestNews" />
                                    </a>
        
                                    <div class="wrapInfoItemLatestNews">
                                        <div class="wrapOverInfoItemLatestNews">
                                            <a href="khuyen-mai.htm" class="wrapTitleType3 linkTitleLatestNews" title="ƯU ĐÃI SIÊU ĐẶC BIỆT KHI ĐẶT PHÒNG LÊN ĐẾN 50%"><h2 class="titleHeadingLatestNews">Ưu đãi siêu đặc biệt khi đặt phòng lên đến 50%</h2></a>
        
                                            <h3 class="descriptionLatestNews">Hãy đặt phòng ngay vì sẽ có nhiều chỗ cho bạn với mức giá siêu tiết kiệm trong dịp hè này.</h3>
        
                                            <a href="khuyen-mai.htm" class="btnType1 btnWatchMoreService" title="Xem thêm">Xem thêm</a>
                                        </div>
                                    </div>
                                </div>
        
                                <div class="itemSlideRoomWouldLike elementSlideLatestNews">
                                    <a href="khuyen-mai.htm" title="GIẢM GIÁ NOEL & MỪNG NĂM MỚI 2021 TỪ 30% TẤT CẢ HÓA ĐƠN" class="wrapImgResize imgSquare wrapImgItemLatestNews">
                                        <img src="public/assets/images/room-2.jpg" alt="GIẢM GIÁ NOEL & MỪNG NĂM MỚI 2021 TỪ 30% TẤT CẢ HÓA ĐƠN" class="imgItemLatestNews" />
                                    </a>
        
                                    <div class="wrapInfoItemLatestNews">
                                        <div class="wrapOverInfoItemLatestNews">
                                            <a href="khuyen-mai.htm" class="wrapTitleType3 linkTitleLatestNews" title="GIẢM GIÁ NOEL & MỪNG NĂM MỚI 2021 TỪ 30% TẤT CẢ HÓA ĐƠN"><h2 class="titleHeadingLatestNews">Giảm giá noel & mừng năm mới 2021 từ 30% tất cả hóa đơn</h2></a>
        
                                            <h3 class="descriptionLatestNews">Tại Khách sạn Masova Hotel, đối với các đợt lưu trú từ 24/12/2020 - 03/01/2021, chúng tôi thực hiện chương trình khuyến mãi giảm giá có thể giúp bạn tiết kiệm đến 40% hóa đơn (chỉ tính tiền phòng).</h3>
        
                                            <a href="khuyen-mai.htm" class="btnType1 btnWatchMoreService" title="Xem thêm">Xem thêm</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="itemSlideRoomWouldLike elementSlideLatestNews">
                                    <a href="khuyen-mai.htm" title="Tết - VIỆT Nam TRUYỀN THỐNG NĂM MỚI KHUYẾN MẠI" class="wrapImgResize imgSquare wrapImgItemLatestNews">
                                        <img src="public/assets/images/room-3.jpg" alt="Tết - VIỆT Nam TRUYỀN THỐNG NĂM MỚI KHUYẾN MẠI" class="imgItemLatestNews" />
                                    </a>
        
                                    <div class="wrapInfoItemLatestNews">
                                        <div class="wrapOverInfoItemLatestNews">
                                            <a href="khuyen-mai.htm" class="wrapTitleType3 linkTitleLatestNews" title="Tết - VIỆT Nam TRUYỀN THỐNG NĂM MỚI KHUYẾN MẠI"><h2 class="titleHeadingLatestNews">Tết - Việt Nam truyền thống năm mới khuyến mại</h2></a>
        
                                            <h3 class="descriptionLatestNews">Để chào mừng Tết cổ truyền Việt Nam, Masova Hotel đang có chương trình khuyến mãi “Tết Đoàn Viên” dành cho cư dân Việt Nam và kiều bào.</h3>
        
                                            <a href="khuyen-mai.htm" class="btnType1 btnWatchMoreService" title="Xem thêm">Xem thêm</a>
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
        <script src="public/assets/js/promotion-detail.js"></script>