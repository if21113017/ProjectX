<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\HutangPadi */

$this->title = 'Update Hutang Padi: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Hutang Padis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="hutang-padi-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
