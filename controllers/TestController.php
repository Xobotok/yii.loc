<?php


namespace app\controllers;


homework6
master
use app\models\User;
use Yii;
use yii\db\Query;
use yii\helpers\VarDumper;
master
use yii\web\Controller;
use \yii\widgets\DetailView;
use app\models\Product;

class TestController extends Controller {

public function actionIndex() {
    $model = new User([]);

    return $this->render('index', [
        'model' => $model,
        'test' => \Yii::$app->test->run()
    ]);
}

    public function actionInsert() {
    Yii::$app->db->createCommand()->insert('user', array(
        'username' => 'Уася',
        'name' => 'Уася2',
        'password_hash' => "asfkjfq13e4",
        'access_token' => "123Ab",
        'auth_key' => '',
        'creator_id' => '12412',
        'updater_id' => '',
        'created_at' => 'Vasya',
        'updated_at' => ''
    ));
        Yii::$app->db->createCommand()->insert('user', array(
            'username' => 'Федя',
            'name' => 'Федя2',
            'password_hash' => "gagqqd",
            'access_token' => "456Ab",
            'auth_key' => '',
            'creator_id' => '124',
            'updater_id' => '',
            'created_at' => 'Fedya',
            'updated_at' => ''
        ));
}
public function actionSelect() {
    $rows = ['column' => (new Query())
        ->select('*')
        ->from('user')
        ->where(['id'=> 1])
        ->all(),
        'columns' => (new Query())
            ->select('*')
            ->from('user')
            ->where('id' > 1)
            ->orderBy('name')
            ->all(),
        'count' => (new Query())
            ->count('*', 'user')
        ];
   VarDumper::dump($rows);
}

}