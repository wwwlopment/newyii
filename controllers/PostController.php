<?php
/**
 * Created by PhpStorm.
 * User: bogdan
 * Date: 18.04.18
 * Time: 15:07
 */

namespace app\controllers;

use Yii;
use app\models\TestForm;

class PostController extends AppController
{

  public $layout = 'basic';

  public function beforeAction($action)
  {

    if ($action->id == 'index') {
      $this->enableCsrfValidation = false;
    }
    return parent::beforeAction($action);
  }

  public function actionIndex()
  {

    if (Yii::$app->request->isAjax) {
      debug(Yii::$app->request->post());
      return 'test';
    }

    $model = new TestForm();
    if ( $model->load(Yii::$app->request->post()) ) {
      if ( $model->validate() ){
        Yii::$app->session->setFlash('success', 'Дані прийняті');
        $this->refresh();
      } else {
        Yii::$app->session->setFlash('error', 'Помилка');
      }
    }

    return $this->render('test', compact('model'));
  }

  public function actionShow()
  {
    $this->layout = 'basic';
    $this->view->title = 'Одна стаття';
    $this->view->registerMetaTag(['name' => 'keywords', 'content' => 'ключовики...']);
    $this->view->registerMetaTag(['name' => 'description', 'content' => 'опис сторінки...']);
    return $this->render('show');
  }
}