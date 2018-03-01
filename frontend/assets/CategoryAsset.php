<?php
namespace sointula\shop\frontend\assets;
use yii\web\AssetBundle;

/**
 * @author Albert Gainutdinov <xalbert.einsteinx@gmail.com>
 */

class CategoryAsset extends AssetBundle
{
    public $sourcePath = '@vendor/sointula/yii2-shop/frontend/web';

    public $css = [
        'css/style.css',
    ];

    public $js = [
    ];

    public $depends = [
    ];
}