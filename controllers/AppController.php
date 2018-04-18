<?php
/**
 * Created by PhpStorm.
 * User: bogdan
 * Date: 18.04.18
 * Time: 14:49
 */

namespace app\controllers;

use yii\web\Controller;

class AppController extends Controller
{

  public function debug($arr)
  {
    echo '<pre>' . print_r($arr, true) . '</pre>';
  }


}
