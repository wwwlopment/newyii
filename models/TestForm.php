<?php


namespace app\models;

//use yii\base\Model;
use yii\db\ActiveRecord;

class TestForm extends ActiveRecord {

//  public $name;
//  public $email;
//  public $text;

public static function tableName() {
  return 'posts' ;
}

  public function attributeLabels()
  {
    return [
      'name' => 'Ім"я',
      'email' => 'Е-мейл',
      'text' => 'Текст повідомлення'
    ];
  }

  public function rules()   {
/*    return [
     // [['name', 'email'], 'required', 'message' => 'Обов"язкове поле'],
      [['name', 'email'], 'required'],
      ['email', 'email'],
    //  ['name', 'string','min' => 2, 'tooShort' => 'Мало'],
    //  ['name', 'string', 'max' => 5, 'tooLong' => 'Багато']
    //  ['email', 'required'],
      ['name', 'string', 'length' => [2,5] ],
      ['name', 'myRule'],
     // ['text', 'trim'],
      ['text', 'safe'],
    ];*/

     return [
       [['name', 'text'], 'required'],
     //  ['email', 'email'],
       ['email', 'trim'],
       ];


  }

  public function myRule($attr) {
    if(!in_array($this->$attr, ['hello', 'world'])) {
      $this->addError($attr, 'Wrong');
    }
  }
}