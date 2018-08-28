<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\DeskripsiBonPadiSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Deskripsi Bon Padis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="deskripsi-bon-padi-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Deskripsi Bon Padi', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'id_bon',
            'id_jenis_padi',
            'jumlah_karung',
            'berat',
            //'total_berat',
            //'harga_perkilo',
            //'jumlah_harga',
            //'keterangan',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
