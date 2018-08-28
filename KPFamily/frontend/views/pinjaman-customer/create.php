<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\PinjamanCustomer */

$this->title = 'Create Pinjaman Customer';
$this->params['breadcrumbs'][] = ['label' => 'Pinjaman Customers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pinjaman-customer-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
