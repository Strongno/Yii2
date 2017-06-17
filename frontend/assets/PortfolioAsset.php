<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Poftfolio frontend application asset bundle.
 */
class PortfolioAsset extends AssetBundle {

    public $css = [
        'css/portfolio/freelancer.min.css',
        'css/portfolio/freelancer.css',
        'fonts/font-awesome/css/font-awesome.min.css',
        'fonts/font-awesome/css/font-awesome.css',
        'https://fonts.googleapis.com/css?family=Montserrat:400,700',
        'https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic',
    ];
    public $js = [
        'js/portfolio/freelancer.js',
        'js/portfolio/contact_me.js',
        'js/portfolio/gulpfile.js',
        'js/portfolio/jqBootstrapValidation.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];

}
