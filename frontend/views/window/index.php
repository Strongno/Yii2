<?php
/*
 * var $errors string of errors of validation
 * var $model frontend\models\Window
 */
use yii\helpers\Html;

$this->title = 'Windows order';
?>
<?php
if ($model->hasErrors()) {
    print_r($model->getErrors());
}
?>
<?= Html::beginForm(['window/index', 'id' => 'form1'], 'post') ?>
<div class="form-group" style='width:500px'>
Width: <input  class='form-control ' type="text" name="width" /><br />
Height: <input  class='form-control ' type="text" name="height" /><br />
Number of insides: <input  class='form-control ' type="radio" name="inside" value='1' />1<input  class='form-control' type="radio" name="inside" value='2' />2<input  class='form-control' type="radio" name="inside" value='3'/>3<br />
Number of openings: <input  class='form-control ' type="text" name="openings" /><br />
Color: <select name="color">
        <option value="white">White</option>
        <option value="black">Black</option>
       </select><br />
Windows sill: <input  class='form-control' type="radio" id="coding" name="sill" value="no">
    <label for="coding">No</label>
    <input  class='form-control' type="radio" id="music" name="sill" value="yes">
    <label for="music">Yes</label><br />
Email: <input  class='form-control' type="text" name="email" /><br />
Full name: <input  class='form-control' type="text" name="name" /><br />
<?= Html::submitButton('Отправить', ['class' => 'submit']) ?>
</div>
<?php HTML::endForm() ?>
