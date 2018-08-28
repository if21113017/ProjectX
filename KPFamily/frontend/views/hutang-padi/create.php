<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\HutangPadi */

$this->title = 'Create Hutang Padi';
$this->params['breadcrumbs'][] = ['label' => 'Hutang Padis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hutang-padi-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
