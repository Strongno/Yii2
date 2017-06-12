<?php

use frontend\assets\SliderAsset;
SliderAsset::register($this);
$this->registerJsFile('@web/js/script-slider.js', [
    'depends' => [
        SliderAsset::className(),
    ]]);
?>
<div id="slider" class="nivoSlider">     
    <img src="files/slider/1.jpg" alt="" />    
    <a href="http://dev7studios.com"><img src="files/slider/2.jpg" alt="" title="#htmlcaption" /></a>     
    <img src="files/slider/3.jpg" alt="" title="This is an example of a caption" />     
    <img src="files/slider/4.jpg" alt="" /> 
</div> 
<div id="htmlcaption" class="nivo-html-caption">     
    <strong>This</strong> is an example of a <em>HTML</em> caption with <a href="#">a link</a>. 
</div>