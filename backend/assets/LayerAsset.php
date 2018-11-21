<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class LayerAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';

    public $js = [
        'js/plug/layer/layer.js'
    ];
    public $depends = [
        'yii\web\JqueryAsset',
    ];
}
