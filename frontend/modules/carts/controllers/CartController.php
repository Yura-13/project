<?php

namespace frontend\modules\carts\controllers;

use common\models\Products;
use common\models\Cart;
use common\models\Orders;
use common\models\OrderItems;


class CartController extends \yii\web\Controller
{


    public function actionIndex()
    {
        return $this->render('index');
    }


    public function actionAdd()
    {

        $id = \Yii::$app->request->get('id');
        $qty = (int)\Yii::$app->request->get('qty');
        $qty = !$qty ? 1 : $qty;
        $product = Products::findOne($id);
        if (!empty($product)) {
            $session = \Yii::$app->session;
            $session->open();
            $cart = new Cart();
            $cart->addToCart($product, $qty);
            $this->layout = false;
            return $this->render('/cart/index', compact('session'));

        }
    }
    public function actionClear(){
        $session = \Yii::$app->session;
        $session->open();
        $session->remove('cart');
        $session->remove('cart.qty');
        $session->remove('cart.sum');
        $this->layout = false;
        return $this->render('/cart/index', compact('session'));
    }

    public function actionDelete(){
        $id = \Yii::$app->request->get('id');
        $session = \Yii::$app->session;
        $session->open();
        $cart = new Cart();
        $cart->recalc($id);
        $this->layout = false;
        return $this->render('/cart/index', compact('session'));
    }
    public function actionShow(){
        $session = \Yii::$app->session;
        $session->open();
        $this->layout = false;
        return $this->render('/cart/index', compact('session'));
    }

    public function actionCheckout(){
        $session = \Yii::$app->session;
        $session->open();
        $order = new Orders();
        return  $this->render('/cart/checkout',[
            'session' => $session,
                'order' =>$order
        ]
      );

    }

}
