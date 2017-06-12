<?php
/*
 * 
 */

use \frontend\assets\GalleryAsset;

GalleryAsset::register($this);
$this->registerJsFile('@web/js/script.js', [
    'depends' => [
        GalleryAsset::className()]
]);
?>
<h1>Gallery</h1>
<div class="portfolioFilter">

    <a href="#" data-filter="*" class="current">All Categories</a>
    <a href="#" data-filter=".people">People</a>
    <a href="#" data-filter=".places">Places</a>
    <a href="#" data-filter=".food">Food</a>
    <a href="#" data-filter=".objects">Objects</a>

</div>

<div class="portfolioContainer">

    <div class="objects">
        <img src="/files/fotos/watch.jpg" alt="image">
    </div>

    <div class="people places">
        <img src="/files/fotos/surf.jpg" alt="image">
    </div>	

    <div class="food">
        <img src="/files/fotos/burger.jpg" alt="image">
    </div>

    <div class="people places">
        <img src="/files/fotos/subway.jpg" alt="image">
    </div>

    <div class="places objects">
        <img src="/files/fotos/trees.jpg" alt="image">
    </div>

    <div class="people food objects">
        <img src="/files/fotos/coffee.jpg" alt="image">
    </div>

    <div class="food objects">
        <img src="/files/fotos/wine.jpg" alt="image">
    </div>	

    <div class="food">
        <img src="/files/fotos/salad.jpg" alt="image">
    </div>	

</div>