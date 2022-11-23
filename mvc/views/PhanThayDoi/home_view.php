<div class="wrapSlideMain">
            <div class="contentSlideMain">
                <div class="showSlideMain">
                <?php 
                    $banner_image = json_decode($data["banner_image"],true);
                    foreach($banner_image as $row_ba){ ?>
            
                    <div class="elementSlideMain">
                        <div class="wrapImgResize wrapImgSlideMain">
                            <img src="public/assets/images/<?php echo $row_ba["image_anh"]?>" alt="HomeStay CNGTVT" />
                        </div>

                       <!-- <div class="wrapTextSlideMain">
                            <div class="container-xl containerTextSlideMain">
                                <div class="contentTextSlideMain">
                                    <p class="wrapDescriptionPostSlideMain">Chào mừng đến với</p>
                                    <h2 class="titlePostSlideMain">HomeStay QT</h2>
                                </div>
                            </div>
                        </div> -->
                    </div>
                    
                   <?php } ?>
                </div>
            </div>
        </div>
        <!-- end Slide main -->

        <!-- form book room -->
        <div class="wrapFormBookRoom">
            <div class="container-xl containerFormBookRoom">    
                <div class="contentFormBookRoom">
                    <h3 class="wrapTitleType1 titleMainFormBookRoom">Book a room</h3>

                    <div class="listInputBookRoom">
                        <div class="row rowInputBookRoom">
                            <div class="col colInputBookRoom">
                                <div class="contentInputBookRoom">
                                    <div class="wrapIconFrmCtrBookRoom"><i class="far fa-calendar-alt"></i></div>

                                    <input type="text" readonly="true" class="form-control inputFrmChooseDateCheckIn" placeholder="Check-in" />
                                </div>
                            </div>

                            <div class="col colInputBookRoom">
                                <div class="contentInputBookRoom">
                                    <div class="wrapIconFrmCtrBookRoom"><i class="far fa-calendar-alt"></i></div>

                                    <input type="text" readonly="true" class="form-control inputFrmChooseDateCheckOut" placeholder="Check-out" />
                                </div>
                            </div>

                            <div class="col colInputBookRoom">
                                <div class="contentInputBookRoom">
                                    <div class="wrapIconFrmCtrBookRoom"><i class="fas fa-plus-circle"></i></div>

                                    <select class="form-control selectPciker inputFrmNumberAdult">
                                        <option>Người lớn</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                        <option>6</option>
                                        <option>7</option>
                                        <option>8</option>
                                        <option>9</option>
                                        <option>10</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col colInputBookRoom">
                                <div class="contentInputBookRoom">
                                    <div class="wrapIconFrmCtrBookRoom"><i class="fas fa-plus-circle"></i></div>

                                    <select class="form-control selectPciker inputFrmNumberChildren">
                                        <option>Trẻ em</option>
                                        <option>0</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                        <option>6</option>
                                        <option>7</option>
                                        <option>8</option>
                                        <option>9</option>
                                        <option>10</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col colInputBookRoom colBtnBookRoom">
                                <div class="contentInputBookRoom">
                                    <button type="button" name="book-now" 
                                    class="btnType1 btnBookNowRoomForm" 
                                    data-toggle="modal" data-target="#modalFormBookRoom">Book now</button>
                                    <button type="button" name="cancel-book" class="btnType2 btnCancelBookRoom">Hủy</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="wrapTextBookRoom">* Đảm bảo giá tốt nhất</div>
                </div>
            </div>
        </div>
        <!-- end form book room -->

        <!-- about -->
        <div class="wrapAboutHome">
            <div class="container-xl containerAboutHome">
                <div class="contentAboutHome">                    
                    <div class="row rowAboutHome">
                        <div class="col-lg-6 colImgAbouthome">
                            <div class="wrapImgAboutHome"><img src="public/assets/images/banner_about.png" 
                            class="imgAbouthome"  /></div>
                        </div>

                        <div class="col-lg-6 colTextAboutHome"> 
                            <h3 class="wrapTitleType1Mini">Chào mừng đến với HomeStay CNGTVT</h3>

                            <h3 class="wrapTitleType1 titleMainAboutHome">Tận hưởng trọn vẹn  kì nghỉ của bạn</h3>

                            <div class="wrapTextAboutHome">
                                <p style="font-family: 'IBMPlexSerif'; font-weight: 500; font-size: 18px; line-height: 32px;">Chỉ cách thành phố 5 phút đi xe và nằm trong con phố Triều Khúc, Homestay CNGTVT tự tin đem đến cho bạn những trải nhiệm tuyệt vời nhất trong kì nghỉ dưỡng. Chúng tôi luôn sẵn sàng tiếp đón và phục vụ hết mình vì quý khách.</p>
                                <p style="font-size: 16px; line-height: 30px;">Phòng ốc được bố trí hài hòa hợp lý sang trọng và đầy đủ tiện nghi. Các phòng được thiết kế với sự kết hợp hài hòa giữa những nét cổ điển của phương đông và những những nét độc đáo tinh tế của phương tây chắc chắn sẽ làm bạn hài lòng. </p>
                            </div>

                           <!--  <a href="#" title="Xem thêm" class="btnType1 btnWatchMoreAbout">Xem thêm</a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end about -->

        <!-- wrap list room -->
        <div class="wrapListProject">
            <div class="container-xl containerListProject">
                <div class="contentListProject">                    
                    <h3 class="wrapTitleType2">Phòng</h3>

                    <div class="listProject">
                        <div class="row rowListProject">
                            <?php
                                if(isset($data["phong"])){
                                    $danhsach  = json_decode($data["phong"],true);
                                    foreach($danhsach as $row12){
                                        echo'<div class="col-sm-6 col-lg-3 colItemProject">
                                        <div class="contentItemProject">
                                            <a href="phong.htm"  class="wrapImgResize imgSquare wrapImgResizeItemProject">
                                                <img src="public/assets/images/'.$row12["image_anh"].'" class="imgItemProject"  />
                                            </a>
        
                                            <div class="wrapTextItemProject">
                                                <a href="phong.htm" class="linkTitleItemProject">
                                                <h4 class="titleHeaddingItemProject">'.$row12["ten_phong"].'</h4></a>
        
                                                <div class="priceRoomItem">Giá <div class="textPriceRoomItem">'.$row12["gia_phong"].' VNĐ</div></div>
                                            </div>
                                        </div>
                                    </div>';
                                    }
                                }

                            ?>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end wrap list room -->

        <!-- wrap promotion -->
        <div class="wrapPromotionList">
            <div class="container-xl containerPromotionList">
                <div class="contentPromotionList">
                    <div class="showSlidePromotionList">
                    <?php
                            if(isset($data["khuyenmai"])){
                                $list_km  = json_decode($data["khuyenmai"],true);
                                if(!empty($list_km)){
                                    foreach($list_km as $row14){
                                     echo '<div class="itemSlidePromotionList">
                                     <div class="wrapImgPromotionItem">
                                         <a href="./khuyenmai/chitiet/'.$row14["ma_km"].'" class="wrapImgResize img16And9 linkItemImgPromotion" >
                                             <img src="public/assets/images/'.$row14["image_anh"].'" 
                                             class="imgItemPromtionList"  />
                                         </a>
                                     </div>
         
                                     <div class="wrapTexItemPromotionList">
                                         <a href="./khuyenmai/chitiet/'.$row14["ma_km"].'" class="linkTitleItemPromotion" ><h4 class="wrapTitleType3 titleHeaddingItemPromotion">
                                         '.$row14["tieu_de"].'</h4></a>
         
                                         <p class="desciptionItemPromotionList">'.$row14["noi_dung"].'</p>
         
                                         <a href="./khuyenmai/chitiet/'.$row14["ma_km"].'" title="Xem thêm" class="btnType1 btnWatchMorePromotion">Xem thêm</a>
                                     </div>
                                 </div>';
                                    }
                                }
                            }
                        ?>

                        

                        
                    </div>
                </div>
            </div>
        </div>
        <!-- end wrap promotion -->

        <!-- banner contact -->
        <div class="wrapBannerContact" style="background-image: url(public/assets/images/nen3.jpg);">
            <div class="wrapBgBannerContact">
                <div class="container-xl containerBannerContact">
                    <div class="contentBannerContact">
                        <h3 class="textDescriptionBannerContact">HomeStay được thiết kế theo phong cách hiện đại và trẻ trung.</h3>

                        <p class="descriptionBannerContact">Chúng tôi luôn có các khuyễn mãi và các dịch vụ tiện ích đi kèm</p>

                        
                    </div>
                </div>
            </div>
        </div>
        <!-- end banner contact -->


        <!-- wrap list service -->
        <div class="wrapLatestNews">
            <div class="container-xl containerLatestNews">
                <div class="contentLatestNews">
                    <h3 class="wrapTitleType2">Dịch vụ</h3>

                    <div class="wrapSlideService">
                        <div class="showSlideService">
                        <?php
                            if(isset($data["dichvu"])){
                                $list_dv  = json_decode($data["dichvu"],true);
                                if(!empty($list_dv)){
                                    foreach($list_dv as $row13){
                                        echo'  <div class="elementSlideLatestNews">
                                        <a href="./dichvu/chitiet/'.$row13["ma_dich_vu"].'"  class="wrapImgResize imgSquare wrapImgItemLatestNews">
                                            <img src="public/assets/images/'.$row13["image_anh"].'"class="imgItemLatestNews" />
                                        </a>
        
                                        <div class="wrapInfoItemLatestNews">
                                            <div class="wrapOverInfoItemLatestNews">
                                                <a href="./dichvu/chitiet/'.$row13["ma_dich_vu"].'" class="wrapTitleType3 linkTitleLatestNews">
                                                <h4 class="titleHeadingLatestNews">'.$row13["tieu_de"].'</h4></a>
        
                                                <p class="descriptionLatestNews">'.$row13["noi_dung"].'</p>
        
                                                <a href="./dichvu/chitiet/'.$row13["ma_dich_vu"].'" class="btnType1 btnWatchMoreService" >Xem thêm</a>
                                            </div>
                                        </div>
                                    </div>';
                                    }
                                }
                            }
                        ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end wrap list service -->        

        <!-- comment -->
        <div class="wrapListComment">
            <div class="container-xl containerListComment">
                <div class="clearfix wrapBannerAndCmmt">
                    <div class="contentListComment">
                        <h3 class="wrapTitleType1Mini">Khách của chúng tôi</h3>

                        <h3 class="wrapTitleType1">Đánh giá</h3>
                        
                        <div class="wrapSlideTestiomonials">
                            <div class="showSlideTestimonials">
                                <div class="elementlideTestimonials">
                                    <div class="textTestimonial">Một nơi tuyệt vời cho các kì nghỉ dưỡng sau những ngày mệt nhọc.</div>

                                    <div class="media">
                                        <div class="mediaLeft">
                                            <div class="wrapImgResize imgSquare wrapImgItemTestimonial">
                                                <img src="public/assets/images/nen_danh_gia.jpg" class="imgItemTestimonial" />
                                            </div>
                                        </div>

                                        <div class="media-body mediaBodyItemTestimonial">
                                            <div class="titleNameTestimonial">Vũ Thị Thùy Trang</div>

                                            <div class="descriptionTestimonial">Cầu Giấy, Hà Nội</div>

                                            <div class="wrapIconTestimonial">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="elementlideTestimonials">
                                    <div class="textTestimonial">Tôi và gia đình đã đến đây 3 lần và cảm thấy rất hài lòng. Chúng tôi sẽ tiếp tục ở đây nếu như có đi du lịch nha trang</div>

                                    <div class="media">
                                        <div class="mediaLeft">
                                            <div class="wrapImgResize imgSquare wrapImgItemTestimonial">
                                                <img src="public/assets/images/nen3.jpg" alt="Mrs Warton" class="imgItemTestimonial" />
                                            </div>
                                        </div>

                                        <div class="media-body mediaBodyItemTestimonial">
                                            <div class="titleNameTestimonial">Mrs Warton</div>

                                            <div class="descriptionTestimonial">United Kingdom</div>

                                            <div class="wrapIconTestimonial">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="wrapBannerCmt">
                        <div class="wrapImgResize imgSquare">
                            <img src="public/assets/images/nen_danh_gia.jpg" alt="Đánh giá" />
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <script src="public/assets/js/home.js"></script> 
       