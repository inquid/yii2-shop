<?php

namespace xalberteinsteinx\shop\widgets\assets;

use yii\web\AssetBundle;

/**
 * @author Albert Gainutdinov <xalbert.einsteinx@gmail.com>
 */
class DeliveryAsset extends AssetBundle
{

    public $sourcePath = '@vendor/xalberteinsteinx/yii2-shop/widgets/assets/src';

    public $css = [
        'css/delivery.css'
    ];
    public $js = [
        'js/delivery.js'
    ];
    public $depends = [
        'yii\web\JqueryAsset',
    ];
}