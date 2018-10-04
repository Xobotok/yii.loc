<?php


namespace app\controllers;


use yii\web\Controller;
use \yii\widgets\DetailView;
use app\models\Product;

class TestController extends Controller {

public function actionIndex() {
    $model = new Product([]);

    return $this->render('index', [
        'model' => $model,
        'test' => \Yii::$app->test->run()
    ]);
}

}