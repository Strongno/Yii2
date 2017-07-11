<?php
/* @var $this yii\web\View */
/* @var $model frontend\models\Author */
use yii\helpers\Html;
use yii\helpers\Url;
?>
<h1>Delete <?php echo $model->id; ?></h1>
<a href="<?php echo Url::to(['author/delete', 'id' => $model->id]); ?>" class='btn btn-danger'>Delete</a>
