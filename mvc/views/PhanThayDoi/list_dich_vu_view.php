<!-- breadcrumbs -->
<div class="wrapBreadCrumb">
            <div class="wrapImgResize wrapImgBreadcrumb">
                <img src="public/assets/images/image_nen.jpg" class="imgBreadcrumbs" alt="Dịch Vụ" />
            </div>

            <div class="wrapTextBreadcrumb">
                <div class="container-xl containerTextBreadcrumb">
                    <h1 class="wrapTitleType2 titlePageCurrentBreadcrumb">Dịch Vụ</h1>

                    <nav aria-label="breadcrumb" class="navListBreadcrumb">
                        <ol class="breadcrumb olListBreqadcrumb">
                            <li class="breadcrumb-item itemListBreadcrumb"><a href="./home_index" class="linkListBreadcrumb" title="Trang chủ">Trang chủ</a></li>
                            <li class="breadcrumb-item itemListBreadcrumb active" aria-current="page">Dịch Vụ</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- end breadcrumbs -->

        <!-- service list -->
        <div class="wrapPageServiceList">
            <div class="container-xl containerPageServiceList">
                <div class="contentPageServiceList">
                    <div class="row rowPageServiceList">

                    <?php $danhsach = json_decode($data["dichvu"],true); ?>

                    <?php foreach($danhsach as $row) { ?>
            
                    <!-- anh mot card view -->
                        <div class="col-sm-6 col-lg-4 elementSlideLatestNews">
                            <a href="dich-vu.htm" title="GYM" class="wrapImgResize imgSquare wrapImgItemLatestNews">
                            <img src="public/assets/images/<?php echo $row["image_anh"];?>"  class="imgItemLatestNews" />
                            </a>

                            <div class="wrapInfoItemLatestNews">
                                <div class="wrapOverInfoItemLatestNews">
                                    <a href="dich-vu.htm" class="wrapTitleType3 linkTitleLatestNews" title="Gym"><h2 class="titleHeadingLatestNews">
                                    <?php echo $row["tieu_de"]; ?></h2></a>

                                    <h3 class="descriptionLatestNews"><?php echo $row["noi_dung"]; ?></h3>

                                    <a href="./dichvu/chitiet/<?php echo $row["ma_dich_vu"]; ?>" class="btnType1 btnWatchMoreService" title="Xem thêm">Xem thêm</a>
                                </div>
                            </div>
                        </div>
                         <!-- end anh mot card view -->
                        <?php }?> 
                    </div>
                <!--
                    <div class="wrapPaggingList">
                        <a href="#" class="linkPaggingList active" title="1"><span>1</span></a>
                        <a href="#" class="linkPaggingList" title="1"><span>2</span></a>
                        <a href="#" class="linkPaggingList" title="1"><span>3</span></a>
                        <a href="#" class="linkPaggingList" title="1"><span>4</span></a>
                        <a href="#" class="linkPaggingList" title="1"><span>5</span></a>
                    </div> -->
                </div>
            </div>
        </div>
        <!-- end service list -->
        <script src="public/assets/js/service-list.js"></script>

