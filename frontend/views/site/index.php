<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>



    <div class="products-catagories-area clearfix">
        <div class="amado-pro-catagory clearfix">


                    <?php foreach($new as $item){
                        ?>
            <!-- Single Catagory -->
            <div class="single-products-catagory clearfix">
                <a href="<?= \yii\helpers\Url::to('/site/shop')?>">

                        <img src="<?= \yii\helpers\Url::to('@web/images/uploads/products/' . $item['image']) ?>"  >
                    <div class="hover-content">
                        <div class="line"></div>
                        <p>From $<?=$item['price']?></p>
                        <a href="<?= \yii\helpers\Url::to(['/site/shop',  ]) ?>"><h4><?=$item['title']?></h4></a>
                    </div>
                </a>
            </div>

                        <?php
                    }
                    ?>


            </div>
        </div>

<!-- ##### Main Content Wrapper End ##### -->

<!-- ##### Newsletter Area Start ##### -->
