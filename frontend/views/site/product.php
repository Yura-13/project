<!-- Product Details Area Start -->
<?php if (!empty($product)) {

    ?>
    <div class="single-product-area section-padding-100 clearfix">
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mt-50">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Furniture</a></li>
                            <li class="breadcrumb-item"><a href="#">Chairs</a></li>
                            <li class="breadcrumb-item active" aria-current="page">white modern chair</li>
                        </ol>
                    </nav>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-lg-7">
                    <div class="single_product_thumb">
                        <div id="product_details_slider" class="carousel slide" data-ride="carousel">

                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <a class="gallery_img"
                                       href="<?= \yii\helpers\Url::to('@web/images/product-img/pro-big-1.jpg') ?>">
                                        <img class="d-block w-100"
                                             src="<?= \yii\helpers\Url::to('@web/images/uploads/products/' . $product['image']) ?>">
                                    </a>
                                </div>

                            </div>
                            <div>
                                <ol class="carousel-indicators">
                                    <li class="" data-target="#product_details_slider" data-slide-to="0"
                                        style="background-image: url(<?= \yii\helpers\Url::to('@web/images/uploads/products/' . $product['image']) ?>);">
                                    </li>
                                    <li data-target="#product_details_slider" data-slide-to="1"
                                        style="background-image: url(<?= \yii\helpers\Url::to('@web/images/uploads/products/' . $product['image']) ?>);"
                                        class="">
                                    </li>
                                    <li data-target="#product_details_slider" data-slide-to="2"
                                        style="background-image: url(<?= \yii\helpers\Url::to('@web/images/uploads/products/' . $product['image']) ?>);"
                                        class="active">
                                    </li>
                                    <li data-target="#product_details_slider" data-slide-to="3"
                                        style="background-image: url(<?= \yii\helpers\Url::to('@web/images/uploads/products/' . $product['image']) ?>);">
                                    </li>
                                </ol>

                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-12 col-lg-5">
                    <div class="single_product_desc">
                        <!-- Product Meta Data -->
                        <div class="product-meta-data">
                            <div class="line"></div>
                            <p class="product-price">$<?= $product['price'] ?></p>

                            <h6><?= $product['title'] ?></h6>

                            <!-- Ratings & Review -->

                            <!-- Avaiable -->
                            <p class="avaibility"><i class="fa fa-circle"></i> In Stock</p>
                        </div>

                        <div class="short_overview my-5">
                            <p><?= $product['content'] ?></p>
                        </div>

                        <!-- Add to Cart Form -->

                        <form class="cart" method="post"
                              action="<?= \yii\helpers\Url::to(['/products/products/add-to-cart']) ?>">
                            <input type="number" name="qty" value="1" class="t">
                            <button type="submit" name="addtocart" class="t">Add to cart</button>
                            <input type="hidden" name="pr" value="<?= $product['id'] ?>">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Product Details Area End -->
    </div>
    <?php
}else{
    echo 'tack a product';
}
?>
<!-- ##### Main Content Wrapper End ##### -->

<!-- ##### Newsletter Area Start ##### -->

<section class="newsletter-area section-padding-100-0">

</section>


