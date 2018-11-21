<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Problem */

$this->title = '更新 ' . $model->Name;
$this->params['breadcrumbs'][] = ['label' => 'Problems', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Name, 'url' => ['view', 'id' => $model->ID]];
$this->params['breadcrumbs'][] = '更新';
?>
<div class="problem-update">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
</div>
