<?php
/*
 * var $model frontend\models\Employee
 */

use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
use yii\validators\DateValidator;

if ($model->hasErrors()) {
    print_r($model->getErrors());
}
?>
<h3>Add Product</h3>
<?php $form = ActiveForm::begin(); ?>
<?php echo $form->field($model, 'category'); ?>
<?php echo $form->field($model, 'status'); ?>
<?php echo Html::submitButton('Отправить', ['class' => 'btn btn-submit']); ?>

<?php $form = ActiveForm::end() ?>