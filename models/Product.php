<?php


namespace app\models;


use yii\base\Model;

class Product extends Model {
public $id;
public $name;
public $category;
public $price;
function __construct($id, $name, $category, $price) {
    parent::__construct();
    $this->id = $id;
    $this->name = $name;
    $this->category = $category;
    $this->price = $price;
}
}