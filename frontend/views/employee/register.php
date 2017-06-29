<?php
/*
 * var $model frontend\models\Employee
 */
if ($model->hasErrors()) {
    print_r($model->getErrors());
}
use Yii;
use yii\widgets\ActiveForm;
use yii\helpers\Html;
?>
<?php $form = ActiveForm::begin(); ?>
    <?php echo $form->field($model, 'firstName'); ?>
    <?php echo $form->field($model, 'lastName'); ?>
    <?php echo $form->field($model, 'middleName'); ?>
    <?php echo $form->field($model, 'email'); ?>  
    <?php echo $form->field($model, 'dateBirth'); ?> 
    <?php echo $form->field($model, 'dateStart'); ?> 
    <?php echo $form->field($model, 'idCode'); ?>
    <?php echo $form->field($model, 'city')->dropDownList($model->getCitiesList()); ?> 
    <?php echo Html::submitButton('Отправить', ['class' => 'btn btn-submit']); ?>
<?php ActiveForm::end(); ?>

<!--<form method='post' style="width:300px;">
    <p>First Name</p>
    <input type='text' class="form-control" name='firstName' />
    <br><br>
    
    <p>Middle Name</p>
    <input type='text' class="form-control" name='middleName' />
    <br><br>
    
    <p>Last Name</p>
    <input type='text' class="form-control" name='lastName' />
    <br><br>
    
    <p>Email</p>
    <input type='text' class="form-control" name='email' />
    <br><br>
    
    <p>Дата рождения</p>
    <input type='text' class="form-control" name='dateBirth' />
    <br><br>
    
    <p>Дата начала работы</p>
    <input type='text' class="form-control" name='dateStart' />
    <br><br>
    
    <p>
        <select size="1" name='city' class="form-control">
            <option disabled>Віберите город</option>
            <option value='1'>Киев</option>
            <option value='2'>Одесса</option>
            <option value='3'>Харьков</option>
            <option value='4'>Львов</option>
        </select>
    </p>
    
    
    <p>Идентификационный код</p>
    <input type='text' class="form-control" name='idCode' />
    <br><br>
    
    
    <input type="submit" class="btn btn-default"/>
</form>-->
