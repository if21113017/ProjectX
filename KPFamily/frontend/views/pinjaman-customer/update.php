<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\PinjamanCustomer */

$this->title = 'Update Pinjaman Customer: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Pinjaman Customers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pinjaman-customer-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
