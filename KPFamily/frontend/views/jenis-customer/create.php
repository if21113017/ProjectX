<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\JenisCustomer */

$this->title = 'Create Jenis Customer';
$this->params['breadcrumbs'][] = ['label' => 'Jenis Customers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jenis-customer-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
