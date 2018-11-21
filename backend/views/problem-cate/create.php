<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\ProblemCate */

$this->title = 'Create Problem Cate';
$this->params['breadcrumbs'][] = ['label' => 'Problem Cates', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="problem-cate-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
