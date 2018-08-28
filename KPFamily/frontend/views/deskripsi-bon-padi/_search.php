<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\DeskripsiBonPadiSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="deskripsi-bon-padi-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'id_bon') ?>

    <?= $form->field($model, 'id_jenis_padi') ?>

    <?= $form->field($model, 'jumlah_karung') ?>

    <?= $form->field($model, 'berat') ?>

    <?php // echo $form->field($model, 'total_berat') ?>

    <?php // echo $form->field($model, 'harga_perkilo') ?>

    <?php // echo $form->field($model, 'jumlah_harga') ?>

    <?php // echo $form->field($model, 'keterangan') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
