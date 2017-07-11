<?php
/* @var $this yii\web\View */
/* @var $model frontend\models\Author */

use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<h1> Update Author: <?php echo $model->id; ?> </h1>
<?php $form = ActiveForm::begin(); ?>
<?php echo $form->field($model, 'first_name'); ?>
<?php echo $form->field($model, 'last_name'); ?>
<?php echo $form->field($model, 'birthdate'); ?>
<?php echo $form->field($model, 'rating'); ?>
<?php echo Html::submitButton('Change', [
    'class' => 'btn btn-success'
]) ?>
<?php ActiveForm::end(); ?>
