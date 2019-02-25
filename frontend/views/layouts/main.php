<?php

/* @var $this \yii\web\View */

/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>

<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<!-- Search Wrapper Area Start -->
<div class="search-wrapper section-padding-100">
    <div class="search-close">
        <i class="fa fa-close" aria-hidden="true"></i>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="search-content">
                    <form action="#" method="get">
                        <input type="search" name="search" id="search" placeholder="Type your keyword...">
                        <button type="submit"><img src="<?= \yii\helpers\Url::to('@web/images/core-img/search.png') ?>"
                                                   alt=""></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Search Wrapper Area End -->
<!-- #### Main Content Wrapper Start ##### -->

<div class="main-content-wrapper d-flex clearfix">
    <!-- Mobile Nav (max width 767px)-->
    <div class="mobile-nav">
        <!-- Navbar Brand -->
        <div class="amado-navbar-brand">
            <a href="<?= \yii\helpers\Url::to('/site/index') ?>"<img
                    src="<?= \yii\helpers\Url::to('@web/images/core-img/logo.png') ?>" alt=""></a>
        </div>
        <!-- Navbar Toggler -->
        <div class="amado-navbar-toggler">
            <span></span><span></span><span></span>
        </div>
    </div>
    <!-- Header Area Start -->
    <header class="header-area clearfix">
        <!-- Close Icon -->
        <div class="nav-close">
            <i class="fa fa-close" aria-hidden="true"></i>
        </div>
        <!-- Logo -->
        <div class="logo">
            <a href="<?= \yii\helpers\Url::to('/site/index') ?>"><img
                        src="<?= \yii\helpers\Url::to('@web/images/core-img/logo.png') ?>" alt=""></a>
        </div>
        <!-- Amado Nav -->
        <nav class="amado-nav">

            <ul>

                <li class="active"><a href="<?= \yii\helpers\Url::to('/site/index') ?>">Home</a></li>
                <li><a href="<?= \yii\helpers\Url::to('/site/shop') ?>">Shop</a></li>
                <li >
                    <a  href="<?= \yii\helpers\Url::to('/site/product') ?>">Product</a>
                </li>
                <li><a href="<?= \yii\helpers\Url::to('/site/cart') ?>">Cart</a></li>
                <li><a href="<?= \yii\helpers\Url::to('/site/checkout') ?>">Checkout</a></li>


            </ul>
        </nav>




    </header>
    <?= $content; ?>

</div>
<footer class="footer_area clearfix">
    <div class="container">
        <div class="row align-items-center">
            <!-- Single Widget Area -->
            <div class="col-12 col-lg-4">
                <div class="single_widget_area">
                    <!-- Logo -->
                    <div class="footer-logo mr-50">
                        <a href="<?= \yii\helpers\Url::to('/site/index') ?>"><img
                                    src="<?= \yii\helpers\Url::to('@web/images/core-img/logo2.png') ?>" alt=""></a>
                    </div>
                    <!-- Copywrite Text -->
                    <p class="copywrite">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>document.write(new Date().getFullYear());</script>
                        All rights reserved | This template is made with <i class="fa fa-heart-o"
                                                                            aria-hidden="true"></i> by <a
                                href="https://colorlib.com" target="_blank">Colorlib</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                </div>
            </div>
            <!-- Single Widget Area -->
            <div class="col-12 col-lg-8">
                <div class="single_widget_area">
                    <!-- Footer Menu -->
                    <div class="footer_menu">
                        <nav class="navbar navbar-expand-lg justify-content-end">
                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                    data-target="#footerNavContent" aria-controls="footerNavContent"
                                    aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i>
                            </button>
                            <div class="collapse navbar-collapse" id="footerNavContent">
                                <ul class="navbar-nav ml-auto">
                                    <li class="nav-item active">
                                        <a class="nav-link" href="<?= \yii\helpers\Url::to('/site/index') ?>">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?= \yii\helpers\Url::to('/site/shop') ?>">Shop</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?= \yii\helpers\Url::to('/site/product') ?>">Product</a>
                                    </li>


                                    <li class="nav-item">
                                        <a class="nav-link" href="<?= \yii\helpers\Url::to('/site/cart') ?>">Cart</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?= \yii\helpers\Url::to('/site/checkout') ?>">Checkout</a>
                                    </li>
                                    <li class="nav-item">

                                        <?php

                                        if (Yii::$app->user->isGuest) {
                                            $menuItems[] = ['label' => 'Signup', 'url' => ['site/signup']];
                                            $menuItems[] = ['label' => 'Login', 'url' => ['site/login']];
                                        } else {
                                            $menuItems[] = '<li class="ol">'
                                                . Html::beginForm(['logout'], 'post')
                                                . Html::submitButton(
                                                    'Logout (' . Yii::$app->user->identity->username . ')',
                                                    ['class' => 'logout']
                                                )
                                                . Html::endForm()
                                                . '</li>';
                                        }
                                        echo Nav::widget([
                                            'options' => ['class' => 'li'],
                                            'items' => $menuItems,
                                        ]);

                                        ?>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
