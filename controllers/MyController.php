<?php
/**
 * Created by PhpStorm.
 * User: bogdan
 * Date: 18.04.18
 * Time: 0:31
 */

namespace app\controllers;


class MyController extends AppController
{
  public function actionIndex($id = null)
  {
    $hi = 'Hello, World!';
    $names = ['ivanov', 'petrov', 'sidorov'];
    if (!$id) {
      $id = 'test';
    }
    //return $this->render('index', ['hello' => $hi, 'names' => $names]);
    return $this->render('index', compact('hi', 'names', 'id'));
  }

  public function actionBlogPost() {
    //my/blog-post
    return 'Blog post';
  }
}