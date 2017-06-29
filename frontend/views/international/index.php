<?php

use Yii;
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
use yii\widgets\Pjax;

$this->title = Yii::t('common', 'International');
?>

<?php
Pjax::begin([
        // Pjax options
]);
$form = ActiveForm::begin([
            'id' => 'form1',
            'layout' => 'horizontal',
            'fieldConfig' => [
                'template' => "{label}\n{beginWrapper}\n{input}\n{hint}\n{error}\n{endWrapper}",
                'horizontalCssClasses' => [
                    'label' => 'col-sm-4',
                    'offset' => 'col-sm-offset-4',
                    'wrapper' => 'col-sm-8',
                    'error' => '',
                    'hint' => '',
                ],
            ],
        ]);
?>

<?= $form->field($model, 'username') ?>
<?= $form->field($model, 'password')->passwordInput() ?>
<div class="form-group">
    <div class="col-lg-offset-1 col-lg-11">
        <?= Html::submitButton(Yii::t('common', 'Submit'), ['class' => 'btn btn-primary']) ?>
    </div>
</div>
<?php ActiveForm::end(); ?>
<?php Pjax::end(); ?>
