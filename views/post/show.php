<?php
//$this->title = 'Одна стаття';
?>

<?php $this->beginBlock('block1'); ?>
  <h1>Заголовок сторінки</h1>
  <?php $this->endBlock() ?>

<h1>Show action</h1>

<?php
/*debug($cats[0]);
echo count($cats[0]->products);
debug($cats[0]);*/
foreach ($cats as $cat) {
    echo '<ul>';
        echo '<li>' . $cat->title . '</li>';
        $products = $cat->products;
        foreach ($products as $product){
              echo '<ul>';
        echo '<li>' . $product->title . '</li>';
         echo '</ul>';
        }
    echo '</ul>';
  //  echo $cat->title . '<br>';
}

?>
<button class="btn btn-success" id='btn' >Click me...</button>

<?php //$this->registerJsFile('@web/js/scripts.js', ['depends' => 'yii\web\YiiAsset']) ?>
<?php //$this->registerJs("$('.container').append('<p>SHOW!!!</p>');", \yii\web\View::POS_LOAD) ?>

<?php //$this->registerCss('.container{background: #ccc;}')?>

<?php
$js = <<<JS
$('#btn').on('click', function() {
  $.ajax({
  url: 'index.php?r=post/index',
  data: {test: '123'},
  type: 'POST',
  success: function(res) {
    console.log(res);
  },
  error: function() {
    alert('Error')
  }
  })
})

JS;

$this->registerJs($js);


?>