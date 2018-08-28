<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\Padi */

$this->title = 'Create Padi';
$this->params['breadcrumbs'][] = ['label' => 'Padis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="padi-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
