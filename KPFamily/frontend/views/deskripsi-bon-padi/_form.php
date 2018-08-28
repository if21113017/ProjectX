<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\DeskripsiBonPadi */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="deskripsi-bon-padi-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_bon')->textInput() ?>

    <?= $form->field($model, 'id_jenis_padi')->textInput() ?>

    <?= $form->field($model, 'jumlah_karung')->textInput() ?>

    <?= $form->field($model, 'berat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'total_berat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'harga_perkilo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jumlah_harga')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'keterangan')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
