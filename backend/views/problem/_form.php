<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Problem */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="problem-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'CateId')->textInput() ?>

    <?= $form->field($model, 'Name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Content')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'Sort')->textInput() ?>

    <?= $form->field($model, 'CreateTime')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
