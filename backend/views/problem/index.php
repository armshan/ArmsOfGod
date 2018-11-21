<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel common\models\ProblemSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '问题中心';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="problem-index">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-default box-solid">
                <div class="box-body">
                    <?php  echo $this->render('_search', ['model' => $searchModel]); ?>
                </div>
            </div>
        </div>
    </div>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('创建问题', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-body table-responsive">
                    <?= GridView::widget([
                        'dataProvider' => $dataProvider,
                //        'filterModel' => $searchModel,
                        'columns' => [
                            ['class' => 'yii\grid\SerialColumn'],
                            'ID',
                            'CateId',
                            'Name',
                            'Content:ntext',
                            'Sort',
                            //'CreateTime',
                            ['class' => 'yii\grid\ActionColumn'],
                        ],
                    ]); ?>
                </div>
            </div>
        </div>
    </div>
</div>
