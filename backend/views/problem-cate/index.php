<?php

use yii\helpers\Html;
use yii\grid\GridView;
use backend\assets\LayerAsset;
/* @var $this yii\web\View */
/* @var $searchModel common\models\ProblemCateSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '问题分类中心';
$this->params['breadcrumbs'][] = $this->title;
LayerAsset::register($this);
?>
<div>
    <div class="row">
        <div class="col-md-12">
            <div class="box box-default box-solid">
                <div class="box-body">
                    <?php  echo $this->render('_search', ['model' => $searchModel]); ?>
                </div>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-body table-responsive">
                    <?= GridView::widget([
                        'dataProvider' => $dataProvider,
                //        'filterModel' => $searchModel,
                        'tableOptions' => ['class' => 'table table-hover'],
                        'layout'=> '{items}<div class="pull-left" >{pager}</div><div class="page-summary">{summary}</div>',
                        'columns' => [
                            ['class' => 'yii\grid\CheckboxColumn'],

                            'ID',
                            'Name',
                            'Sort',
                            'CreateTime',
                            ['class' => 'yii\grid\ActionColumn'],
                        ],
                    ]); ?>
                   </div>
            </div>
        </div>
    </div>
</div>
