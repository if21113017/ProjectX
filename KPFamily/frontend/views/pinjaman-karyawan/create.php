<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\PinjamanKaryawan */

$this->title = 'Create Pinjaman Karyawan';
$this->params['breadcrumbs'][] = ['label' => 'Pinjaman Karyawans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pinjaman-karyawan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
