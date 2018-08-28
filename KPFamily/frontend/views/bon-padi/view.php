<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\BonPadi */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Bon Padis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bon-padi-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'id_customer',
            'total_harga',
            'total_bayar',
            'tanggal',
            'id_user',
        ],
    ]) ?>

</div>
