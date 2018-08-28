<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\BonProduk */

$this->title = 'Create Bon Produk';
$this->params['breadcrumbs'][] = ['label' => 'Bon Produks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bon-produk-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
