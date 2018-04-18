<?php
/**
 * Created by PhpStorm.
 * User: bogdan
 * Date: 18.04.18
 * Time: 15:07
 */

namespace app\controllers;

use Yii;

class PostController extends AppController
{

  public $layout = 'basic';

  public function actionIndex()  {

    return $this->render('test');
  }

    public function actionShow()  {
      $this->layout = 'basic';
    return $this->render('show');
  }
}