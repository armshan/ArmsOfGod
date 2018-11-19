<?php
/**
 * Created by PhpStorm.
 * User: armshan
 * Date: 2018.11.19
 * Time: 15:24
 */
namespace console\controllers;

use yii\console\Controller;


class  TestController extends Controller
{


    public function actionTest()
    {
       echo \Yii::getVersion();
    }



}



