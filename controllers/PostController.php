<?php
/**
 * Created by PhpStorm.
 * User: bogdan
 * Date: 18.04.18
 * Time: 15:07
 */

namespace app\controllers;

use app\models\Category;
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

    //$cats = Category::find()->all();
    //$cats = Category::find()->orderBy(['id' => SORT_DESC])->all();
    //$cats = Category::find()->asArray()->all();
    //$cats = Category::find()->where('parent=691')->all();
    //$cats = Category::find()->where(['parent' => '691'])->all();
    //$cats = Category::find()->where(['like', 'title', 'pp'])->all();
    //$cats = Category::find()->where(['<=', 'id', '695'])->all();
    //$cats = Category::find()->where(['parent' => '691'])->limit(1)->all();
    //$cats = Category::find()->where(['parent' => '691'])->count();
    //$cats = Category::find()->count();
    //$cats = Category::findOne(['parent' => 691]);
    //$cats = Category::findAll(['parent' => 691]);
    //$query = "SELECT * FROM categories WHERE title LIKE '%pp%'";
    //$cats = Category::findBySql($query)->all();
    //$query = "SELECT * FROM categories WHERE title LIKE :search";
    //$cats = Category::findBySql($query, [':search' => '%pp%'])->all();

    //$cats = Category::findOne(694);
    //$cats = Category::find()->with('products')->where('id=694')->all();
    //$cats = Category::find()->all(); //відкладена загрузка
    $cats = Category::find()->with('products')->all(); // "жадібна" загрузка
    
    return $this->render('show', compact('cats'));
  }
}