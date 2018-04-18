<?php

/* @var $this \yii\web\View */
/* @var $content string */


use app\assets\AppAsset;
use yii\helpers\Html;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!doctype html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <?= Html::csrfMetaTags() ?>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $this->title ?></title>
  <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<div class="wrap">
    <div class="container">
        <ul class="nav nav-pills">
            <li role="presentation" class="active"><?= Html::a('Головна', '/web/') ?></li>
            <li role="presentation"><?= Html::a('Статті', '/post/index') ?></li>
            <li role="presentation"><?= Html::a('Стаття', '/post/show') ?></li>
        </ul>

        <?php if (isset($this->blocks['block1'])):?>
        <?php echo $this->blocks['block1'] ?>
<?php endif?>
      <?= $content ?>
    </div>
</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>