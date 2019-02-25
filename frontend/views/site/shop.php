

<div class="amado_product_area section-padding-70">
    <div class="container-fluid">

        <div class="row">
            <div class="col-12">
                <div class="product-topbar d-xl-flex align-items-end justify-content-between">



                </div>
            </div>
        </div>

        <?php foreach ($new as $item) {
            ?>


            <!-- Single Product Area -->
            <div class="col-12 col-sm-6 col-md-12 col-xl-6">
                <div class="single-product-wrapper">
                    <!-- Product Image -->
                    <div class="product-img">

                        <img src="<?= \yii\helpers\Url::to('@web/images/uploads/products/' . $item['image']) ?>">

                    </div>

                    <!-- Product Description -->
                    <div class="product-description d-flex align-items-center justify-content-between">
                        <!-- Product Meta Data -->
                        <div class="product-meta-data">
                            <div class="line"></div>

                            <p class="product-price"> From $<?= $item['price'] ?>
                            </p>
                            <a href="<?= \yii\helpers\Url::to(['/site/product', 'id' => $item['id']]) ?>">
                                <h6><?= $item['title'] ?></h6>
                            </a>
                        </div>

                    </div>
                </div>
            </div>

            <?php
        }
        ?>




    </div>
</div>
<!-- ##### Main Content Wrapper End ##### -->

<!-- ##### Newsletter Area Start ##### -->
<section class="newsletter-area section-padding-100-0">