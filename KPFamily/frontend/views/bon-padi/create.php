<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\BonPadi */

$this->title = 'Create Bon Padi';
$this->params['breadcrumbs'][] = ['label' => 'Bon Padis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bon-padi-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
