<?php
/* @var $this yii\web\View */

foreach($productList as $product) {
    $maker = $product->getMaker();
    $one_category= $product->getCategoryOne();
    echo "<p>$product->product - $maker->maker - $one_category</p>";
}
?>

