<?php


namespace app\controllers;


use yii\web\Controller;
use \yii\widgets\DetailView;
use app\models\Product;

class TestController extends Controller {

public function actionIndex() {
    $product = new Product(1, "Product 1", "Products", 100);

    return $this->render('index');
}

}