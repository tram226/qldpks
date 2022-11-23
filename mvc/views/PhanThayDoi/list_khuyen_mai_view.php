<!-- breadcrumbs -->
<div class="wrapBreadCrumb">
            <div class="wrapImgResize wrapImgBreadcrumb">
                <img src="public/assets/images/image_nen.jpg" class="imgBreadcrumbs" alt="Khuyến Mãi" />
            </div>

            <div class="wrapTextBreadcrumb">
                <div class="container-xl containerTextBreadcrumb">
                    <h1 class="wrapTitleType2 titlePageCurrentBreadcrumb">Khuyến Mãi</h1>

                    <nav aria-label="breadcrumb" class="navListBreadcrumb">
                        <ol class="breadcrumb olListBreqadcrumb">
                            <li class="breadcrumb-item itemListBreadcrumb"><a href="./home_index" class="linkListBreadcrumb" title="Trang chủ">Trang chủ</a></li>
                            <li class="breadcrumb-item itemListBreadcrumb active" aria-current="page">Khuyến Mãi</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- end breadcrumbs -->

        <!-- promotion list -->
        <div class="wrapPageServiceList">
            <div class="container-xl containerPageServiceList">
                <div class="contentPageServiceList">
                    <div class="row rowPageServiceList">
                    <!-- one card view khuyen main --> 

                        <?php 
                            if(isset($data["danhsach"])){
                                $list_promotion  = json_decode($data["danhsach"], true);
                                if(!empty($list_promotion)){
                                    foreach($list_promotion as $row){
                                        echo ' <div class="col-sm-6 col-lg-4 elementSlideLatestNews">';
                                        echo ' <a href="khuyen-mai.htm" class="wrapImgResize imgSquare wrapImgItemLatestNews">
                                        <img src="public/assets/images/'.$row["image_anh"].'"
                                            class="imgItemLatestNews" />
                                    </a>';
                                    echo '<div class="wrapInfoItemLatestNews">';
                                    echo ' <div class="wrapOverInfoItemLatestNews">';
                                    echo '<a href="khuyen-mai.htm" class="wrapTitleType3 linkTitleLatestNews" 
                                    title="COMBO HÈ MÁT LẠNH 300.000VND"><h2 class="titleHeadingLatestNews">
                                    '.$row["tieu_de"].'</h2></a>';
                                    echo '<h3 class="descriptionLatestNews">'.$row["noi_dung"].' </h3>';
                                    echo ' <a href="./khuyenmai/chitiet/'.$row["ma_km"].'" class="btnType1 btnWatchMoreService" >Xem thêm</a>';
                                    echo '</div>';
                                    echo '</div>';
                                    echo '</div>';

                                    }
                                }
                            }                        
                        ?>                        
                         <!--end one card view khuyen main -->                                   
                    </div>
                  <!--  <div class="wrapPaggingList">
                        <a href="#" class="linkPaggingList active" title="1"><span>1</span></a>
                        <a href="#" class="linkPaggingList" title="1"><span>2</span></a>
                        <a href="#" class="linkPaggingList" title="1"><span>3</span></a>
                        <a href="#" class="linkPaggingList" title="1"><span>4</span></a>
                        <a href="#" class="linkPaggingList" title="1"><span>5</span></a>
                    </div> -->
                </div>
            </div>
        </div>
        <!-- end promotion list -->
        <script src="public/assets/js/promotion-list.js"></script>