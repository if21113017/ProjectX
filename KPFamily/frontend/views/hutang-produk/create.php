<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\HutangProduk */

$this->title = 'Create Hutang Produk';
$this->params['breadcrumbs'][] = ['label' => 'Hutang Produks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hutang-produk-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
