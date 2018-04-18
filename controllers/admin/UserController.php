<?php
/**
 * Created by PhpStorm.
 * User: bogdan
 * Date: 18.04.18
 * Time: 0:52
 */

namespace app\controllers\admin;

use app\controllers\AppController;

class UserController extends AppController
{

  public function actionIndex() {

    return $this->render('index');
  }
}