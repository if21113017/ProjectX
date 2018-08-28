<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\DeskripsiBonProdukSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Deskripsi Bon Produks';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="deskripsi-bon-produk-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Deskripsi Bon Produk', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'id_bon_produk',
            'id_produk',
            'jumlah_satuan',
            'harga_satuan',
            //'satuan',
            //'total_harga',
            //'keterangan',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
