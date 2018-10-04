<?php
namespace app\components;
use yii\base\Component;

/**
 * Created by PhpStorm.
 * User: Xobat
 * Date: 01.10.2018
 * Time: 12:45
 */
class TestService extends Component{
public $var;
public function run() {
    $this->var = 'TestService is working';
    return $this->var;
}
}