<?php
/*
 * $var $model frontend\models\forms\SearchForms
 */
use yii\widgets\ActiveForm;
use yii\helpers\Html;
use frontend\helpers\HighlightHelper;

?>
<h1>Search</h1>
<div class='col-md-12'>
<?php $form = ActiveForm::begin(); ?>
    <?php echo $form->field($model, 'keyword'); ?>
    <?php echo Html::submitButton('Search', ['class' => 'btn btn-primary']); ?>
<?php ActiveForm::end(); ?>
</div>
<hr>
<div class='col-md-12'>
    <?php if ($result) : ?>
        <?php foreach ($result as $item): ?>
        <?php echo $item['content'] ?>
        <?php endforeach; ?>
    <?php endif; ?>
</div>
