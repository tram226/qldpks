<!-- breadcrumbs -->
<div class="wrapBreadCrumb">
            <div class="wrapImgResize wrapImgBreadcrumb">
                <img src="public/assets/images/image_nen.jpg" class="imgBreadcrumbs" alt="Thư Viện Hình Ảnh" />
            </div>

            <div class="wrapTextBreadcrumb">
                <div class="container-xl containerTextBreadcrumb">
                    <h1 class="wrapTitleType2 titlePageCurrentBreadcrumb">Image HomeStay</h1>

                    <nav aria-label="breadcrumb" class="navListBreadcrumb">
                        <ol class="breadcrumb olListBreqadcrumb">
                            <li class="breadcrumb-item itemListBreadcrumb"><a href="./home_index" class="linkListBreadcrumb" title="Trang chủ">Trang chủ</a></li>
                            <li class="breadcrumb-item itemListBreadcrumb active" aria-current="page">Hình Ảnh</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- end breadcrumbs -->

        <!-- image list -->
        <div class="wrapPageServiceList">
            <div class="container-xl containerPageServiceList">
                <div class="contentPageServiceList">
                    <div class="row rowPageServiceList">

                    <?php 
                        if(isset($data["hinhanh"])){
                            $danhsach = json_decode($data["hinhanh"],true);
                            foreach($danhsach as $row){
                                echo ' <div class="col-sm-6 col-lg-4 elementSlideLatestNews">
                                <a href="./hinhanh/chitiet/'.$row["ma_hinh_anh"].'" class="wrapImgResize imgSquare wrapImgItemLatestNews" title="Image">
                                    <img src="public/assets/images/'.$row["image_anh"].'" alt="Image" class="imgItemLatestNews" />
                                </a>
    
                                <div class="wrapInfoItemLatestNews">
                                    <div class="wrapOverInfoItemLatestNews">
                                        <a href="./hinhanh/chitiet/'.$row["ma_hinh_anh"].'" class="wrapTitleType3 linkTitleLatestNews" title="Image">
                                        <h2 class="titleHeadingLatestNews">'.$row["ma_hinh_anh"].'</h2></a>
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
        <!-- end image list -->
        <script src="public/assets/js/image-list.js"></script>