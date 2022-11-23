<div class="wrapHeader">
            <div class="wrapHeaderTop"></div>

            <div class="wrapHeaderBottom">
                <div class="container-xl containerHeaderBottom">
                    <div class="clearfix contentHeaderBottom">
                        <a href="#" title="Menu" class="btnShowMenuHeaderMobile">
                            <div class="iconShow"><i class="fas fa-bars"></i></div>
                            <div class="iconHidden"><i class="fas fa-times"></i></div>
                        </a>

                        <h1 class="wrapLogoHeaderBottom">
                            <a class="linkLogoHeaderBottom" href="./home_index" >
                            <img src="public/assets/images/tải xuống.png" class="imgLogoHeaderBottom" 
                            /></a>
                        </h1>

                        <div class="wrapBtnBookRoomHeader">
                            <button  type="button" name="book-now" class="btnType1 btnBookNowRoomHeader"  data-toggle="modal" data-target="#modalFormBookRoom"
                            >Đặt phòng ngay</button>
                        </div>

                        <div class="wrapCloseMenuHeaderMobile"></div>
                        <div class="wrapMenuMainHeaderBottom">
                            <ul class="listMenuMainHeaderBottom">
                                <li class="listItemMenuMainHeaderBottom">
                                    <a class="listLinkMenuMainHeaderBottom" href="./home_index" 
                                    title="Trang chủ">Trang chủ</a>
                                </li>

                                <li class="listItemMenuMainHeaderBottom menuSubHeaderBottom">
                                    <a class="listLinkMenuMainHeaderBottom" href="./room" title="Phòng">Phòng</a>
                                    <div class="btnDropdowMenuSubHeaderBottom"><i class="fas fa-chevron-down"></i></div>

                                    <div class="wrapListMenuSubHeaderBottom">
                                        <ul class="listMenuSubHeaderBottom">
                                            <?php $listroom =json_decode( $data["listroom"],true) ?>
                                            <?php foreach($listroom as $row) { ?>
                                            <li class="listItemMenuSubHeaderBottom">
                                            <a class="listLinkMenuSubHeaderBottom"
                                             href="./room/chitiet/<?php echo $row["ma_phong"]  ?>" name="<?php echo $row["ma_phong"]  ?>" >
                                             <?php echo $row["ten_phong"] ?></a></li>

                                            <?php } ?>
                                        </ul>
                                    </div>
                                </li>

                                <li class="listItemMenuMainHeaderBottom">
                                    <a class="listLinkMenuMainHeaderBottom" href="./dichvu" title="Dịch vụ">Dịch vụ</a>
                                </li>

                        

                                <li class="listItemMenuMainHeaderBottom">
                                    <a class="listLinkMenuMainHeaderBottom" href="./khuyenmai" title="Khuyến mãi">Khuyến mãi</a>
                                </li>
                                
                                <li class="listItemMenuMainHeaderBottom">
                                    <a class="listLinkMenuMainHeaderBottom" href="./hinhanh" title="Khuyến mãi">Hình ảnh</a>
                                </li>

                                <li class="listItemMenuMainHeaderBottom">
                                    <a class="listLinkMenuMainHeaderBottom" href="./lienhe" title="Liên hệ">Liên hệ</a>
                                </li>
                            </ul>

                            <div class="headerTopLeft">
                                <ul class="clearfix listMenuHeaderTop">
                                    <li class="listItemHeaderTop"><a target="_blank" class="listLinkHeaderTop" href="#" title="54 Phố Triều Khúc, Thanh Xuân, Hà Nội" target="_blank"><i class="fas fa-map-marker-alt"></i>54 Phố Triều Khúc, Thanh Xuân, Hà Nội</a></li>
                                    <li class="listItemHeaderTop"><a class="listLinkHeaderTop" href="tel:02583905999" title="0258 3905 999"><i class="fas fa-phone"></i> Hotline: 0258 8688 888</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="headerTopRight">
                            <ul class="clearfix listMenuHeaderTop menuSearchAndLanguage">
                                <li class="listItemHeaderTop menuSubHeaderBottom menuLanguageHeaderBottom">
                                    <a class="listLinkMenuMainHeaderBottom" href="javascript:void(0)" title="Viet Nam"><img src="public/assets/images/langVietNam.jpg" class="imgLanguageHeaderBottom" alt="Viet Nam" /></a>
                                    <div class="btnDropdowMenuSubHeaderBottom"><i class="fas fa-chevron-down"></i></div>

                                    <div class="wrapListMenuSubHeaderBottom">
                                        <ul class="listMenuSubHeaderBottom">
                                            <li class="listItemMenuSubHeaderBottom"><a class="listLinkMenuSubHeaderBottom" href="javascript:void(0)" title="Viet Nam"><img src="public/assets/images/langVietNam.jpg" alt="Viet Nam" /></a></li>
                                            
                                            <li class="listItemMenuSubHeaderBottom"><a class="listLinkMenuSubHeaderBottom" href="javascript:void(0)" title="English"><img src="public/assets/images/langEnglish.jpg" alt="English" /></a></li>
                                            
                                            <li class="listItemMenuSubHeaderBottom"><a class="listLinkMenuSubHeaderBottom" href="javascript:void(0)" title="Viet Nam"><img src="public/assets/images/langChinese.jpg" alt="Chinese" /></a></li>
                                            
                                            <li class="listItemMenuSubHeaderBottom"><a class="listLinkMenuSubHeaderBottom" href="javascript:void(0)" title="English"><img src="public/assets/images/langKorean.jpg" alt="Korean" /></a></li>
                                            
                                            <li class="listItemMenuSubHeaderBottom"><a class="listLinkMenuSubHeaderBottom" href="javascript:void(0)" title="English"><img src="public/assets/images/langRussian.jpg" alt="English" /></a></li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>