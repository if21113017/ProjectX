<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\PadiSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Padis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="padi-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Padi', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'jenis_padi',
            'stok',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
