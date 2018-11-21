<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\ProblemSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="problem-search">
    <div class="row" style="margin-top: 15px;">
        <div class="col-md-2">
            <?php $form = ActiveForm::begin([
                'action' => ['index'],
                'method' => 'get',
            ]); ?>
            <?= $form->field($model, 'ID')->textInput(['placeholder'=>'请输入ID'])->label(false) ?>
        </div>
        <div class="col-md-2">
            <?= $form->field($model, 'CateId')->textInput(['placeholder'=>'请输入ID'])->label(false) ?>
        </div>
        <div class="col-md-2">
            <?= $form->field($model, 'Name')->textInput(['placeholder'=>'请输入ID'])->label(false) ?>
        </div>
        <div class="col-md-2">
            <?= $form->field($model, 'Content')->textInput(['placeholder'=>'请输入ID'])->label(false) ?>
        </div>
        <div class="col-md-2">
            <?= $form->field($model, 'Sort')->textInput(['placeholder'=>'请输入ID'])->label(false)  ?>
        </div>
        <div class="col-md-2">
            <?php // echo $form->field($model, 'CreateTime') ?>
            <div class="form-group">
                <?= Html::submitButton('查询', ['class' => 'btn btn-primary']) ?>
                <?= Html::resetButton('重置', ['class' => 'btn btn-default']) ?>
            </div>
            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
