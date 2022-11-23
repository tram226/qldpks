 <!-- breadcrumbs -->
 <div class="wrapBreadCrumb">
            <div class="wrapImgResize wrapImgBreadcrumb">
                <img src="public/assets/images/image_nen.jpg" class="imgBreadcrumbs" alt="Deluxe hướng biển" />
            </div>

            <div class="wrapTextBreadcrumb">
                <div class="container-xl containerTextBreadcrumb">
                    <h1 class="wrapTitleType2 titlePageCurrentBreadcrumb">Deluxe hướng biển</h1>

                    <nav aria-label="breadcrumb" class="navListBreadcrumb">
                        <ol class="breadcrumb olListBreqadcrumb">
                            <li class="breadcrumb-item itemListBreadcrumb"><a href="./home_index" class="linkListBreadcrumb">Trang chủ</a></li>
                            <li class="breadcrumb-item itemListBreadcrumb"><a href="./hinhanh" class="linkListBreadcrumb" >Hình Ảnh</a></li>
                            <li class="breadcrumb-item itemListBreadcrumb active" aria-current="page">Deluxe hướng biển</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- end breadcrumbs -->

        <!-- images detail -->
        <div class="wrapPageServiceList">
            <div class="container-xl containerPageServiceList">
                <div class="contentPageServiceList">
                    <div class="row rowPageServiceList" id="showGalleryImagesDetail">

                        <?php
                            $one_image = json_decode($data["OneImage"],true);
                            foreach($one_image as $row){
                                echo '<div class="col-6 col-lg-4 elementSlideLatestNews" data-src="assets/images/room-1.jpg">
                                <div class="wrapImgResize imgSquare wrapImgItemLatestNews">
                                    <img src="public/assets/images/'.$row["image_anh"].'"  class="imgItemLatestNews" />
                                </div>
                            </div>';
                            }

                        ?>
                  
                    </div>

            
                </div>
            </div>
        </div>
        <!-- end images detail -->
        <script src="public/assets/js/image-detail.js"></script>