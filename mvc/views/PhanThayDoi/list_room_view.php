 <!-- breadcrumbs -->
 <link rel="stylesheet" type="text/css" href="public/assets/css/room-list.css" />
 <div class="wrapBreadCrumb">
            <div class="wrapImgResize wrapImgBreadcrumb">
                <img src="public/assets/images/image_nen.jpg" class="imgBreadcrumbs" alt="Phòng" />
            </div>

            <div class="wrapTextBreadcrumb">
                <div class="container-xl containerTextBreadcrumb">
                    <h1 class="wrapTitleType2 titlePageCurrentBreadcrumb">Phòng</h1>

                    <nav aria-label="breadcrumb" class="navListBreadcrumb">
                        <ol class="breadcrumb olListBreqadcrumb">
                            <li class="breadcrumb-item itemListBreadcrumb"><a href="./home_index" class="linkListBreadcrumb" title="Trang chủ">Trang chủ</a></li>
                            <li class="breadcrumb-item itemListBreadcrumb active" aria-current="page">Phòng</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- end breadcrumbs -->

        <!-- room list -->
        <div class="wrapPageRoomList">
            <div class="container-xl containerPageRoomList">
                <div class="contentPageRoomList">
                <!--  chi tiet one phong --> 
                <?php if(isset($data["all_rooms"])){
                    $list_room  = json_decode($data["all_rooms"],true);
                    foreach($list_room as $row_r){?>
              
                    <div class="itemRoomList">
                        <div class="media mediaRoom">
                            <div class="media-left">
                                <div class="showSlideRoomDetail">
                                    

                                    <div class="itemSlideRoomDetail">
                                        <div class="wrapImgResize imgSquare">
                                            <a href="phong.htm" title="Deluxe">
                                                <img src="public/assets/images/<?php echo $row_r["image_anh"];?>" >
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="media-body mediaBodyRoomItem">
                                <a href="phong.htm" class="wrapTitleType1 linkTitleRoomItem"
                                 title="Deluxe"><h2 class="titleRoomItem"><?php echo $row_r["ten_phong"];?></h2></a>

                                <h3 class="textRoomDetail"><?php echo $row_r["noi_dung"];?>
                                </h3>

                                
                            </div>

                            <div class="media-right mediaRightRoomItem">
                                <div class="wrapPriceRoomItem">
                                    Giá:
                                    <div class="valPriceRoomItem">
                                    <?php echo substr($row_r["gia_phong"],0,3).",".substr($row_r["gia_phong"],3,3);?> VNĐ</div>
                                </div>

                                <button type="button" class="btnType1 btnBookRoomDetail" name="Book-now" data-room="1" data-toggle="modal" data-target="#modalFormBookRoom">Book now</button>

                                <a href="./room/chitiet/<?php echo $row_r["ma_phong"];?>" class="btnType2 btnViewRoomDetail" title="Chi tiết">Chi tiết</a>
                            </div>
                        </div>
                    </div>
                    <?php } }?>
                    <!-- end chi tiet one phong --> 
              
                </div>

                <!-- <div class="wrapPaggingList">
                    <a href="#" class="linkPaggingList active" title="1"><span>1</span></a>
                    <a href="#" class="linkPaggingList" title="1"><span>2</span></a>
                    <a href="#" class="linkPaggingList" title="1"><span>3</span></a>
                    <a href="#" class="linkPaggingList" title="1"><span>4</span></a>
                    <a href="#" class="linkPaggingList" title="1"><span>5</span></a>
                </div> --> 
            </div>
        </div>
        <!-- end room list -->
        <script src="public/assets/js/room-list.js"></script>
     