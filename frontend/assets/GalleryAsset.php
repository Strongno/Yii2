<?php

namespace frontend\assets;

use yii\web\AssetBundle;

class GalleryAsset extends \yii\web\AssetBundle {

    public $css = [
        'css/style.css'
    ];
    public $js = [
        'js/jquery.isotope.js',
    ];
    public $depends = [
        'yii\web\JqueryAsset',
    ];

}
