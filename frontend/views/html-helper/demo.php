<?php

use yii\helpers\Html;

echo Html::tag('p', 'Some text');

$array = [
    '1' => 'Berlin',
    '2' => 'Odessa',
    '3' => 'kiev',
];

echo Html::dropDownList('city_id', [], $array);

echo Html::radioList('city_id', [], $array);

echo Html::checkboxList('city_id', [16], $array);

echo Html::img('@fotos/burger.jpg');