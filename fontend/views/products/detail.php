<div class="content-wraper pt-20">
<div class="container">
    <div class="row single-product-area">
        <div class="col-lg-5 col-md-6">
           <!-- Product Details Left -->
            <div class="product-details-left">
                <div class="product-details-images slider-navigation-1">
                    <div class="lg-image">
                        <a class="popup-img venobox vbox-item" href="../backend/assets/images/products/<?php echo $product['avatar'];?>" data-gall="myGallery">
                            <img src="../backend/assets/images/products/<?php echo $product['avatar'];?>" alt="product image">
                        </a>
                    </div>
                    <?php foreach ($images as $image) : ?>
                        <div class="lg-image">
                        <a class="popup-img venobox vbox-item" href="../backend/assets/images/products/img_detail/<?php echo $image['url'];?>" data-gall="myGallery">
                            <img src="../backend/assets/images/products/img_detail/<?php echo $image['url'];?>" alt="product image">
                        </a>
                    </div>
                    <?php endforeach; ?>
                </div>
                <div class="product-details-thumbs slider-thumbs-1">
                    <div class="sm-image">
                        <img src="../backend/assets/images/products/<?php echo $product['avatar'];?>" alt="product image thumb">
                    </div>
                    <?php foreach ($images AS $image) : ?>
                        <div class="sm-image">
                        <img src="../backend/assets/images/products/img_detail/<?php echo $image['url'];?>" alt="product image thumb">
                    </div>
                    <?php endforeach ?>
                   
                </div>
            </div>
            <!--// Product Details Left -->
        </div>

        <div class="col-lg-7 col-md-6">
            <div class="product-details-view-content">
                <div class="product-info">
                    <h2><?php echo $product['title'];?></h2>
                    
                    <!-- <div class="rating-box pt-20">
                        <span>Ch???n m??u s???c</span>
                        <select class="form-control" name="" id="">
                            <option value="">H???ng</option>
                            <option value="">??en</option>
                            <option value="">X??m</option>
                            <option value="">Xanh</option>
                        </select>
                    </div> -->
                    <div class="price-box pt-20">
                        <span>Gi?? s???n ph???m: </span>
                        <span class="new-price new-price-2"><?php echo number_format($product['price'] , 0, '.', '.'); ?> vn??</span>
                    </div>
                    <div class="product-desc">
                        <span>M?? t??? ng???n s???n ph???m</span>
                        <p>
                            <?php echo $product['summary']; ?>
                        </p>
                    </div>
                    <div class="single-add-to-cart">
                        <form action="" class="cart-quantity">
                            <li data-id="<?php echo $product['id'];?>" class="add-to-cart text-center">Th??m v??o gi???</li>
                        </form>
                    </div>
                    <div class="product-additional-info pt-25">
                        <div class="product-social-sharing pt-25">
                            <ul>
                                <li class="facebook"><a href="#"><i class="fa fa-facebook"></i>Facebook</a></li>
                                <li class="twitter"><a href="#"><i class="fa fa-twitter"></i>Twitter</a></li>
                                <li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i>Google +</a></li>
                                <li class="instagram"><a href="#"><i class="fa fa-instagram"></i>Instagram</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </div>
</div>
</div>
<!-- content-wraper end -->
<!-- Begin Product Area -->
<div class="product-area pt-35">
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="li-product-tab">
                <ul class="nav li-product-menu">
                   <li><a class="active" data-toggle="tab" href="#description"><span>M?? t??? chi ti???t s???n ph???m</span></a></li>
                   <li><a data-toggle="tab" href="#reviews"><span>????nh gi??</span></a></li>
                </ul>               
            </div>
            <!-- Begin Li's Tab Menu Content Area -->
        </div>
    </div>
    <div class="tab-content">
        <div style="max-width: 960px; margin-left: 108px" id="description" class="tab-pane active show" role="tabpanel">
            <div class="product-description">
                <span><?php echo $product['content']; ?></span>
            </div>
        </div>
        <div id="reviews" class="tab-pane" role="tabpanel">
            <div class="product-reviews">
                <div class="product-details-comment-block">
                    <div class="comment-review">
                        <span>Grade</span>
                        <ul class="rating">
                            <li><i class="fa fa-star-o"></i></li>
                            <li><i class="fa fa-star-o"></i></li>
                            <li><i class="fa fa-star-o"></i></li>
                            <li class="no-star"><i class="fa fa-star-o"></i></li>
                            <li class="no-star"><i class="fa fa-star-o"></i></li>
                        </ul>
                    </div>
                    <div class="comment-details">
                        <h4 class="title-block">Thanh Th??y: H?? n???i c??n m??y kh??ng ????</h4>
                        <p>Admin: Ch??o B???n,
                            D??? r???t ti???c s???n ph???m t???m h???t h??ng t???i khu v???c n??y b???n nha. Tuy nhi??n v???n c??n h??ng tr??n h??? th???ng. N???u b???n ?????t h??ng b??n m??nh s??? h??? tr??? chuy???n h??ng v??? shop g???n b???n nh???t gi??p b???n ???. ????? ?????t h??ng b???n c?? th??? ????? l???i S??T b??n m??nh s??? h??? tr??? b???n nhanh nh???t b???n nh??. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- Product Area End Here -->
<!-- Begin Li's Laptop Product Area -->
<section class="product-area li-laptop-product pt-30 pb-70">
<div class="container">
    <div class="row">
        <!-- Begin Li's Section Area -->
        <div class="col-lg-12">
            <div class="li-section-title">
                <h2>
                    <span>S???n ph???m kh??c:</span>
                </h2>
            </div>
            <div class="row">
                <div class="product-active owl-carousel text-center">
                    <?php foreach ($products as $product) : ?>
                        <div class="col-lg-12">
                        <!-- single-product-wrap start -->
                        <div class="single-product-wrap">
                            <div class="product-image">
                                <a href="index.php?controller=product&action=detail&id=<?php echo $product['id']; ?>">
                                    <img style="max-height: 120px" src="../backend/assets/images/products/<?php echo $product['avatar']; ?>" alt="Li's Product Image">
                                </a>
                                <span class="sticker">New</span>
                            </div>
                            <div class="product_desc">
                                <div class="product_desc_info">
                                    <h4><a class="product_name" href="index.php?controller=product&action=detail&id=<?php echo $product['id']; ?>"><?php echo $product['title']; ?></a></h4>
                                    <div class="price-box">
                                        <span class="new-price font-weight-bold"><?php echo number_format($product['price'] , 0, '.', '.'); ?> vn??</span>
                                    </div>
                                </div>
                                <div class="add-actions">
                                    <ul class="add-actions-link">
                                       <li class="add-cart active add-to-cart"  data-id="<?php echo $product['id']; ?>" >Th??m v??o gi???</li>
                                        <li onclick="displayModalProduct(<?php echo $product['id'] ?>)"><a href="#" title="quick view" class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-eye"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- single-product-wrap end -->
                    </div>
                    <?php endforeach ?>
                </div>
            </div>
        </div>
        <!-- Li's Section Area End Here -->
    </div>
</div>
</section>
<!-- Li's Laptop Product Area End Here -->
<script>
    function displayModalProduct(id) {
        $.ajax({
            method: 'POST',
            url: 'http://localhost:8080/project-ITPlus/fontend/index.php?controller=home&action=showProductDetail',
            data: {
                id: id
            },
            success: function (data) {
                // console.log(data);
                data = JSON.parse( data );
                product = data[0].product_detail;
                image1 = data[0].image[0];
                image2 = data[0].image[1];
                image3 = data[0].image[2];
                image4 = data[0].image[3];
                image5 = data[0].image[4];

                // console.log(data[0].image[3]);
                // console.log(data[0].product_detail);

                $('.modal-product-name').text(product.title);
                $('.product-desc').text(product.summary);
                $('.new-price-2').text(new Intl.NumberFormat().format(product.price));

                $('.modal-img').attr('src', '../backend/assets/images/products/' + product.avatar);
                $('.img1').attr('src', '../backend/assets/images/products/img_detail/' + image1.url);
                $('.img2').attr('src', '../backend/assets/images/products/img_detail/' + image2.url);
                $('.img3').attr('src', '../backend/assets/images/products/img_detail/' + image3.url);
                $('.img4').attr('src', '../backend/assets/images/products/img_detail/' + image4.url);
                $('.img5').attr('src', '../backend/assets/images/products/img_detail/' + image5.url);     
            }
        });
    }
</script>            