<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\DeskripsiBonProduk */

$this->title = 'Create Deskripsi Bon Produk';
$this->params['breadcrumbs'][] = ['label' => 'Deskripsi Bon Produks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="deskripsi-bon-produk-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
