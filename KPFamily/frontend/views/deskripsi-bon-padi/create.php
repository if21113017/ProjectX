<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\DeskripsiBonPadi */

$this->title = 'Create Deskripsi Bon Padi';
$this->params['breadcrumbs'][] = ['label' => 'Deskripsi Bon Padis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="deskripsi-bon-padi-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
