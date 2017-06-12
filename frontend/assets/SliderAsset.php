<?php

namespace frontend\assets;

use yii\web\AssetBundle;

class SliderAsset extends AssetBundle {
    
    public $css = [
        'css\nivo-slider.css',
    ];
    
    public $js = [
        'js\jquery.nivo.slider.pack',
    ];
    public $depends = [
       'yii\web\JqueryAsset',
    ];
    
    
}