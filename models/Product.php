<?php


namespace app\models;


use yii\db\ActiveRecord;

class Product extends ActiveRecord {

  public static function tableName() {
    return 'products';
  }



/*  public function getCategoties() {
    return $this->hasOne(Product::className(), ['id' => 'parent']);
  }*/


}