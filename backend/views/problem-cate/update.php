<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\ProblemCate */

$this->title = 'Update Problem Cate: ' . $model->Name;
$this->params['breadcrumbs'][] = ['label' => 'Problem Cates', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Name, 'url' => ['view', 'id' => $model->ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="problem-cate-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
