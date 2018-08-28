<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\DeskripsiBonProduk */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Deskripsi Bon Produks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="deskripsi-bon-produk-view">

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
            'id_bon_produk',
            'id_produk',
            'jumlah_satuan',
            'harga_satuan',
            'satuan',
            'total_harga',
            'keterangan',
        ],
    ]) ?>

</div>
