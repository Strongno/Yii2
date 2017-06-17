<?php

/*
 * @var $comments array
 */
use yii\helpers\Html;

foreach ($comments as $comment) : ?>
<?php echo Html::tag('h5', Html::encode($comment['author'])); ?>
<?php echo Html::tag('p', Html::encode($comment['id'])); ?>
<?php endforeach; ?>
