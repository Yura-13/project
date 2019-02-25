
<?php
if(!empty($products)) {
        ?>
        <div class="cart-table-area section-padding-100">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-lg-7">
                        <div class="cart-title mt-50">
                            <h2>Shopping Cart</h2>
                        </div>

                        <div class="cart-table clearfix">
                            <table class="table table-responsive" width="100%" >
                                <thead>
                                    <tr>
                                        <th>Product</th>
                                        <th>Name</th>
                                        <th>Price</th>
                                        <th>Quantity</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                $total = 0;
                                foreach ($products as $item) {
                                    $total+= ($item['qty'] * $item['product']['price']);
                                ?>
                                <tr>
                                    <td class="cart_product_img">
                                        <a href="#"> <img  class="d-block w-100" src="<?= \yii\helpers\Url::to('@web/images/uploads/products/' . $item['product']['image']) ?>"></a>
                                    </td>
                                    <td class="cart_product_desc">
                                        <h5>White Modern Chair</h5>
                                    </td>
                                    <td class="price">
                                        <span>$<?=$item['product']['price']?></span>
                                    </td>
                                    <td class="qty">
                                        <div class="qty-btn d-flex">
                                            <p>Qty</p>
                                            <div class="quantity">
                                                <p> <?php echo $item['qty'];?></p>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                    <tr>
                                    <td>
                                        <form method="post" action="<?= \yii\helpers\Url::to(['/products/products/delete-from-cart'])?>">

                                            <input type="hidden" value="<?= $item['product']['id'];?>" name="pr">
                                            <button type="submit" name="addtocart" class="lav">X</button>
                                        </form>

                                    </td>
                                    </tr>

                                <?php
                                }
                                ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-12 col-lg-5">
                        <div class="cart-summary">
                            <h5>Cart Total</h5>
                            <ul class="summary-table">
                                <li><span>subtotal:</span> <span>$<?= $total;?></span></li>
                                <li><span>delivery:</span> <span>Free</span></li>
                                <li><span>total:</span> <span>$<?= $total;?></span></li>
                            </ul>
                            <div class="cart-btn mt-100">
                                <a href="<?= \yii\helpers\Url::to('site/checkout')?>" class="btn amado-btn w-100">Checkout</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php

}else{
    echo "take a product ";
}
?>
</div>
<!-- ##### Main Content Wrapper End ##### -->

<!-- ##### Newsletter Area Start ##### -->
<section class="newsletter-area section-padding-100-0">

</section>

<!-- ##### Newsletter Area End ##### -->
