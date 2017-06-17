<?php

/*
 * @var $employee array
 */

use yii\helpers\ArrayHelper;
use yii\bootstrap\Html;

$emails = ArrayHelper::getColumn($employee, 'email');

$listData = ArrayHelper::map($employee,'id', 'email');
print_r($listData);
echo Html::dropDownList('list', [], $listData);