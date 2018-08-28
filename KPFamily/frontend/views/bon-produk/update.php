<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\BonProduk */

$this->title = 'Update Bon Produk: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Bon Produks', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="bon-produk-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
